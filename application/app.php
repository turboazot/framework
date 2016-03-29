<?php

require_once 'core/config.php';

/**
 *
 */
class App
{
    const TYPE = "SOCIAL NETWORK"; //Тип сайта

    const URL = 'http://localhost/chikotrans/admin/'; // URI сайта
    const SHORT_URL = '/chikotrans/admin/'; // короткий URL сайта
    const SITE_URL = 'http://localhost/chikotrans/';

    #Функционал на стороне сервера
    const DATABASE = true; // Использование базы данных
    const AUTH = true; // Использование аутентификации на сайте
    const PERM = true; // Использование прав пользователя на сайте
    const LOG = true; // Использование лога вывода сообщений
    const CSV = false; // Использование CSV
    const PAGER = false; // Использование постраничной навигации
    const REG_EXP = true; // Использование регулярных выражений
    const VALIDATION = true; // Использование проверки данных
    const DOCUMENT = false; // Использование работы с документами
    const DEBUG = true; // Использование средств отладки
    const COMMENT = true; // Использование комментариев
    const DATE = true; // Использование дат

    #Сервер
    public static $app_dir; // Папка API
    public static $core_dir; // Папка ядра API
    public static $system_dir;
    public static $addition_dir;
    public static $model_dir; // Папка моделей API
    public static $view_dir; // Папка отображений (видов) API
    public static $controller_dir; // Папка контроллеров API

    #Клиент
    public static $css_dir; // Папка CSS файлов
    public static $css_libs_dir;
    public static $js_dir; // Папка Javascript файлов
    public static $js_libs_dir; // Папка библиотек Javascript
    public static $img_dir; // Папка изображений
    public static $form_dir; //Не факт что будет в последующих версиях
    public static $document_dir; // Папка документов
    public static $uploads_dir; // Папка закачек
    public static $libs_dir;
    public static $plugin_dir;
    public static $dist_dir;
    public static $bootstrap_dir;

    #Smarty
    public static $smarty_dir; // Папка Smarty
    public static $template_dir; // Папка шаблонов Smarty
    public static $compile_dir; // Папка компилированных шаблонов Smarty
    public static $config_dir; // Папка конфигурации Smarty
    public static $cache_dir; // Папка кэша Smarty

    #База данных
    public static $db_host; // Хост
    public static $db_name; // Имя базы данных
    public static $db_user; // Имя пользователя
    public static $db_pass; // Пароль пользователя
    public static $db_charset; // Кодировка
    public static $db_pdo_dsn; // PDO DSN

    #Cессия и куки
    public static $session_lifetime; // Время жизни сессии
    public static $session_isPost;

    #AJAX
    public static $ajax;
    public static $ajax_down_folder;

    #Инициализация
    public static function init($isAjax = false)
    {
        date_default_timezone_set("Europe/Kiev");

        self::$app_dir = 'application/';
        self::$core_dir = self::$app_dir . 'core/';
        self::$system_dir = self::$core_dir . 'system/';
        self::$addition_dir = self::$core_dir . 'addition/';
        self::$model_dir = self::$app_dir . 'models/';
        self::$view_dir = self::$app_dir . 'view/';
        self::$controller_dir = self::$app_dir . 'controllers/';
        self::$css_dir = 'css/';
        self::$css_libs_dir = self::$css_dir . 'libs/';
        self::$js_dir = 'js/';
        self::$js_libs_dir = self::$js_dir . 'libs/';
        self::$img_dir = 'images/';
        self::$uploads_dir = 'uploads/';
        self::$form_dir = self::$view_dir . 'forms/';
        self::$document_dir = 'docs/';
        self::$libs_dir = 'libs/';
        self::$plugin_dir = 'plugins/';
        self::$dist_dir = 'dist/';
        self::$bootstrap_dir = 'bootstrap/';


        self::$smarty_dir = 'libs/smarty/';
        self::$template_dir = self::$view_dir . 'templates/';
        self::$compile_dir = self::$view_dir . 'templates_c/';
        self::$config_dir = self::$view_dir . 'config/';
        self::$cache_dir = 'cache/';

        self::$db_host = 'localhost';
        self::$db_name = 'chiko';
        self::$db_user = 'turboazot';
        self::$db_pass = '637833123qwertyab';
        self::$db_charset = 'utf8';
        self::$db_pdo_dsn = "mysql:host=" . self::$db_host . ";dbname=" . self::$db_name . ";charset=" . self::$db_charset;

        self::$session_lifetime = time() + 60 * 60 * 24 * 365;
        self::$session_isPost = false;

        self::$ajax = $isAjax;
        self::$ajax_down_folder = ($isAjax) ? '../../' : '';

        /*if(!self::$ajax) {
            #Подключение необходимых модулей API
            self::requirePart();

            #Инициализация некоторых модулей
            if(self::AUTH) {
                Auth::init();
            }

            if(self::PERM) {
                Perm::init();
            }

            if(self::DATABASE) {
                Database::Execute("SET NAMES 'utf8'");
            }

            #Создание и загрузка маршрутизатора
            $route = new Route();
            $route->initValidUrlPatterns(Route::$validUrlPatterns);
            $route->load();
        } else {
            self::requirePart('true');
            #Инициализация некоторых модулей

            if(self::AUTH) {
                Auth::init();
            }

            if(self::PERM) {
                Perm::init();
            }

            if(self::DATABASE) {
                Database::Execute("SET NAMES 'utf8'");
            }
        }*/

        #Подключение необходимых модулей API
        self::requirePart();

        #Инициализация некоторых модулей
        if(self::AUTH) {
            Auth::init();
        }

        if(self::PERM) {
            Perm::init();
        }

        if(self::DATABASE) {
            Database::Execute("SET NAMES 'utf8'");
        }

        App::requireModel('Config');

        if(!self::$ajax) {
            #Создание и загрузка маршрутизатора
            $route = new Route();
            $route->initValidUrlPatterns(Route::$validUrlPatterns);
            $route->load();
        }
    }


    private function __construct()
    {
    }
    private function __clone()
    {
    }

    #Подключение модуля
    public static function requireModule($moduleName, $moduleType, $isNecessary = true)
    {
        if($isNecessary == true) {
            if($moduleType == 'Core') {
                require_once self::$ajax_down_folder . self::$core_dir . $moduleName . '.php';
            } elseif($moduleType == 'Smarty') {
                require_once self::$ajax_down_folder . self::$smarty_dir . $moduleName . '.php';
            }
        }
    }

    #Подключение необходимых модулей
    public static function requirePart()
    {

        App::requireModule('PregMatch', 'Core', self::REG_EXP);
        App::requireModule('Smarty.class', 'Smarty');
        App::requireModule('Route', 'Core');
        App::requireModule('url-patterns', 'Core');
        App::requireModule('Database', 'Core', self::DATABASE);
        App::requireModule('Session', 'Core');
        App::requireModule('Post', 'Core');
        App::requireModule('Cookie', 'Core');
        App::requireModule('Auth', 'Core', self::AUTH);
        App::requireModule('Perm', 'Core', self::PERM);
        App::requireModule('Log', 'Core', self::LOG);
        App::requireModule('Csv', 'Core', self::CSV);
        App::requireModule('PagerMysql', 'Core', self::PAGER);
        App::requireModule('Form', 'Core');
        App::requireModule('Validation', 'Core', self::VALIDATION);
        App::requireModule('Debug', 'Core', self::DEBUG);
        App::requireModule('Ajax', 'Core');
        App::requireModule('Comment', 'Core', self::COMMENT);
        App::requireModule('Date', 'Core', self::DATE);

        /*if($isAjaxScript) {
            App::requireModule('PregMatch', 'Core', self::REG_EXP, true);
            App::requireModule('Route', 'Core', true, true);
            App::requireModule('url-patterns', 'Core', true, true);
            App::requireModule('Database', 'Core', self::DATABASE, true);
            App::requireModule('Session', 'Core', true, true);
            App::requireModule('Post', 'Core', true, true);
            App::requireModule('Cookie', 'Core', true, true);
            App::requireModule('Auth', 'Core', self::AUTH, true);
            App::requireModule('Perm', 'Core', self::PERM, true);
            App::requireModule('Log', 'Core', self::LOG, true);
            App::requireModule('Csv', 'Core', self::CSV, true);
            App::requireModule('PagerMysql', 'Core', self::PAGER, true);
            App::requireModule('Form', 'Core', true, true);
            App::requireModule('Validation', 'Core', self::VALIDATION, true);
            App::requireModule('Debug', 'Core', self::DEBUG, true);
            App::requireModule('Comment', 'Core', self::COMMENT, true);
            App::requireModule('Date', 'Core', self::DATE, true);
        } else {

        }*/
    }

    public static function requireModel($modelName)
    {
        if(self::$ajax) {
            require_once self::$ajax_down_folder . App::$model_dir . $modelName . 'Model.php';
        } else {
            require_once App::$model_dir . $modelName . 'Model.php';
        }

    }
}
?>