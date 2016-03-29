<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 14.10.2015
 * Time: 22:28
 */

class Auth
{
    #Ссылки
    public static $url_loginPage; // Страница входа
    public static $url_checkPage; // Страница проверки введённых данных
    public static $url_registrationPage; // Страница регистрации
    public static $url_activationPage; // Страница активации

    #Сессия
    public static $session_userData; // Сессия: переменная для проверки авторизации

    #POST
    public static $post_userArrayName; // POST: название массива данных пользователя
    public static $post_userLoginIndex; // POST: индекс логина пользователя
    public static $post_userPasswordIndex; // POST: индекс пароля пользователя
    public static $post_submitName; // POST: переменная для проверки отправленных данных

    #База данных
    public static $db_userTableName; // База данных: название таблицы пользователей
    public static $db_userIdField; // База данных: поле ID пользователя
    public static $db_userLoginField; // База данных: поле логина пользователя
    public static $db_userPasswordField; // База данных: поле пароля пользователя
    public static $db_userHashField; // База данных: поле хэш-кода пользователя
    public static $db_userStatusField; // База данных: поле статуса пользователя

    #Cookie
    public static $cookie_userIdIndex; // Cookie: индекс ID пользователя
    public static $cookie_userHashIndex; // Cookie: индекс хэш-кода пользователя

    #Инициализация
    public static function init()
    {
        self::$url_loginPage = App::SHORT_URL . 'login';
        self::$url_checkPage = App::SHORT_URL . 'check';
        self::$url_registrationPage = App::SHORT_URL . 'registration';
        self::$url_activationPage = App::SHORT_URL . 'activation';

        self::$session_userData = 'current_admin';

        self::$post_userArrayName = 'user';
        self::$post_userLoginIndex = 'login';
        self::$post_userPasswordIndex = 'password';
        self::$post_submitName = 'log_in';

        self::$db_userTableName = 'admins';
        self::$db_userIdField = 'id';
        self::$db_userLoginField = 'login';
        self::$db_userPasswordField = 'password';
        self::$db_userHashField = 'hash';

        self::$cookie_userIdIndex = 'admin_id';
        self::$cookie_userHashIndex = 'admin_hash';
    }

    #Сессия: получение и хранение данных о пользователе (необходимо разобраться)
    public static function setUserDataSession($userData)
    {
        Session::setVar(self::$session_userData, $userData); // Определяем данные текущего пользователя
    }

    #Сессия: удаление данных о пользователе
    public static function destroyUserDataSession()
    {
        Session::unsetVar(self::$session_userData); // Удаляем данные текущего пользователя
        Session::deletePostFromSession();
    }

    #Сессия: определить данные о правах пользователя
    public static function setUserVariablesSession($userPermissions, $userData)
    {
        Perm::setSessionPermissions($userPermissions); // Определить массив прав
        self::setUserDataSession($userData); // Определить массив пользователя (необходимо разобраться)
    }

    #База данных: получить данные пользователя по нужному полю
    public static function getUserDB($field, $value)
    {
        $user = Database::GetRow("SELECT *
                                  FROM " . self::$db_userTableName . "
                                  WHERE ". $field . " = :field
                                  LIMIT 1",
            array(':field' => $value)); // Запрос к БД

        return $user; // Возвращаем пользователя
    }

    #База данных: обновить хэш-код пользователя (возвращает хэш-код)
    public static function updateUserHashDB($userId)
    {
        $hash = self::generateHash(); // Получаем хэш

        $query = "UPDATE " . self::$db_userTableName . "
                          SET " . self::$db_userHashField . "= :userhash
                          WHERE " . self::$db_userIdField . "= :userid"; // Строка запроса БД

        Database::Execute($query,
            array(':userhash' => $hash, ':userid' => $userId)); // Выполняем запрос к БД

        return $hash; // Возвращаем хэш
    }
    
    #Генерировать код
    public static function generateCode($length = 6)
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789"; // Допустимые символы в коде

        $code = ""; // Строка кода

        $clen = strlen($chars) - 1;
        while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0, $clen)];
        }

        return $code; // Возвращаем код
    }

    #Генерировать хэш-код
    public static function generateHash()
    {
        $hash = md5(self::generateCode(10));
        return $hash;
    }

    #Авторизация пользователя (первый этап)
    public static function logIn()
    {
        Post::toSession(self::$post_userArrayName, self::$post_userArrayName, self::$post_userArrayName);
        if(Session::issetVar('POST')) // Если пользователь ввёл данные и нажал на кнопку входа
        {
            #Получение данных о пользователе
            $post_data = Session::getVar('POST');
            $clientUser = $post_data[self::$post_userArrayName]; // POST: Получаем данные из формы
            $dbUser = self::getUserDB(self::$db_userLoginField, $clientUser[self::$post_userLoginIndex]); // База данных: Получаем данные пользователя из БД

            #Если пароль из формы совпадает с паролем из БД
            if($dbUser[self::$db_userPasswordField] === md5(md5($clientUser[self::$post_userPasswordIndex])))
            {
                $userId = $dbUser[self::$db_userIdField]; // Получаем ID пользователя
                $userHash = self::updateUserHashDB($userId); // Обновляем хэш пользователя

                #Ставим куки
                Cookie::setVar(self::$cookie_userIdIndex, $userId); // Куки-файл ID пользователя
                Cookie::setVar(self::$cookie_userHashIndex, $userHash); // Куки-файл хэш-кода пользователя

                Post::destroy();

                return true; // Возвращаем успешный результат
            }
            #Если не совпадает
            else
            {
                if(ErrorLog::issetErrors())
                {
                    Post::destroy();
                }
                else
                {
                    ErrorLog::setErrorMessage("Неверные логин или пароль", 'invalid_data');
                    Route::location(App::URL . 'login');
                    exit();
                }

                return false;
            }
        } else {
            return false;
        }
    }

    #Выход из учётной записи
    public static function logOut()
    {
        #Если определены куки-файлы
        if(Cookie::issetVar(self::$cookie_userHashIndex)
        or Cookie::issetVar(self::$cookie_userIdIndex))
        {
            Cookie::unsetVar(self::$cookie_userIdIndex); // Cookie: удаляем ID пользователя
            Cookie::unsetVar(self::$cookie_userHashIndex); // Cookie: удаляем хэш-код пользователя
            Perm::destroy(); // Сессия: удаляем права пользователя
            self::destroyUserDataSession(); // Сессия: удаляем данные о пользователе
            Route::location(App::URL . 'login'); // Перенаправление на страницу авторизации
            exit();
        }
    }

    #Проверка данных (второй этап)
    public static function checkUserData($redirectUrl)
    {
        #Если были созданы куки-файлы с ID и хэш-кодом пользователя
        if(Cookie::issetVar(self::$cookie_userIdIndex)
            and Cookie::issetVar(self::$cookie_userHashIndex))
        {
            $cookieId = intval(Cookie::getVar(self::$cookie_userIdIndex)); // Получаем ID из куки-файла
            $cookieHash = Cookie::getVar(self::$cookie_userHashIndex);
            $dbUser = self::getUserDB(self::$db_userIdField, $cookieId); // База данных: получаем данные пользователя из БД

            #Если хэш-коды из куки-файла и из БД НЕ совпадают
            if(($dbUser[self::$db_userIdField] != $cookieId)
                or ($dbUser[self::$db_userHashField] != $cookieHash))
            {
                //Cookie::setVar(self::$cookie_userIdIndex, "", Cookie::getDefaultTime()); // Ставим куки ID пользователя
                Auth::logOut();
                die("Хм, что-то пошло не так..."); // Выводим сообщение об ошибке
            }
            #Если совпали
            else
            {
                $userPermissions = Perm::getUserPermissions($cookieId); // Получаем права текущего пользователя

                self::setUserVariablesSession($userPermissions, $dbUser); // Определяем данные пользователя

                Route::location($redirectUrl); // Переадресация на нужную страницу
            }
        }
        #Если нет
        else
        {
            Auth::logOut();
            die("Включите куки"); // Выводим сообщение об ошибке
        }
    }

    #Проверка был ли совершён вход
    public static function isAuthenticUser()
    {
        #Cookie: Если хэш-код пользователя определён
        if(Cookie::issetVar(self::$cookie_userHashIndex) and Cookie::issetVar(self::$cookie_userIdIndex))
        {
            return true; // Возвращаем true
        #Иначе
        } else {
            return false; // Возвращаем false
        }
    }

    public static function getCurrentUserId() {
        return Cookie::getVar('admin_id');
    }

    public static function registrateUserPost($arrayName) {
        Post::toSession($arrayName, $arrayName, $arrayName);
    }

    /*public static function activateAccount($activateCode) {
        try {
            App::requireModel('Profile');
            $user_status = true;

            $user_id = Database::GetOne('SELECT id
                                        FROM profiles
                                        WHERE activation = :activation',
            array(':activation' => $activateCode));

            if($user_id) {
                Database::Execute('UPDATE profiles
                                   SET status = :status
                                   WHERE id = :userid',
                array(':status' => $user_status, ':userid' => $user_id));

                Profile::createUploadDir($user_id);
                die('Аккаунт успешно активирован!');
            } else {
                die('Неправильный код активации!');
            }
        } catch(PDOException $e) {
            die('Error!: ' . $e->getMessage());
        }
    }*/
}

?>