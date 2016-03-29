<?php 
	/**
	* 
	*/
	class Route
	{
        #Массив шаблонов корректных URL-ов
		public $validUrls;
        public static $validUrlPatterns;

        #Конструктор
		public function __constructor()
		{
			$this->validUrls = array();
            self::$validUrlPatterns = array();
		}

        #Функция инициализации корректных URL-ов
		public function initValidUrlPatterns($urlPatternsArray)
		{
            foreach ($urlPatternsArray as $urlPattern) {
                $this->addUrl($urlPattern['url_pattern'], $urlPattern['controller'], $urlPattern['action'], $urlPattern['filter']);
            }
		}

		public function load()
		{
			$url = $_SERVER['REQUEST_URI'];

            Session::start();

            /*Если в сайте присутствует авторизация*/
            if(App::AUTH)
            {
                #Перенаправление с домашней страницы. (Необходимо перенести)
                if($url == App::SHORT_URL)
                {
                    self::location(Auth::$url_loginPage);
                    exit();
                }
                if(!$this->isRegistrationPage() && !$this->isActivationPage())
                    if(!Auth::isAuthenticUser() && !$this->isCheckPage() && !$this->isLoginPage())
                        self::location(Auth::$url_loginPage);

            }
            /*Debug::printObject("Cookie", $_COOKIE);
            Debug::printObject("Session", $_SESSION);
            Debug::printObject("POST", $_POST);*/

			#Убираем слэши в конце URL
			$url = rtrim($url, "/");

            #Инициализируем URL запроса (без доменна)
            if(App::SHORT_URL)
                $requestUrl = str_replace(App::SHORT_URL, "", $url);

            if($requestUrl == rtrim(App::SHORT_URL, "/"))
                foreach ($this->validUrls as $validUrl) {
                    if($validUrl['route_pattern'] == "#HomePage#")
                    {
                        $isValid = true;
                        $routePattern = $validUrl;
                    }
                }
            else
            {
                #Находим текущий URL в списке корректных URL-ов
                foreach ($this->validUrls as $validUrl) {
                    if($this->validateUrl($requestUrl, $validUrl['route_pattern']) == 1)
                    {
                        #Если найден - присваиваем шаблон URL переменной $routePattern
                        $isValid = true;
                        $routePattern = $validUrl;
                    }
                }
            }

            #Если URL корректный...
            if($isValid == true)
            {
                $requestUrlArr = explode('/', $requestUrl);
                $params = array();

                #Переменная, показывающая был ли исправлен url...
                $updateUrl = false;

                #Если URL имеет параметры...
                if($routePattern[params] != null)

                    #Инициализация параметров
                    foreach ($routePattern[params] as $param) {
                        $params[$param[name]] = $requestUrlArr[$param[id]];

                        #Применение фильтра к параметру
                        if(isset($param[filter]))
                        {
                            #Проверка типа значения параметра
                            if(isset($param[filter][type]))
                            {
                                if($param[filter][type] == 'integer' && substr($requestUrlArr[$param[id]], 0, 1) == '0')
                                {
                                    $requestUrlArr[$param[id]] = ltrim($requestUrlArr[$param[id]], '0');
                                    $updateUrl = true;
                                }


                                if(!PregMatch::PregMatchPattern($params[$param[name]], $param[filter][type]))
                                    die("Неверно указан URL!");
                            }


                            #Проверка длины значения параметра
                            if(isset($param[filter][length]))
                                if(strlen($params[$param[name]]) != $param[filter][length])
                                    die("Неверно указан URL!" . strlen($params[$param[name]]));
                        }
                    }

                if($updateUrl)
                    self::location(App::URL . implode('/', $requestUrlArr));

                #Подключение контроллера
                $controllerName = $routePattern['controller'];
                $controllerFile = $controllerName . "Controller.php";
                $controllerPath = App::$controller_dir . $controllerFile;

                if(file_exists($controllerPath))
                {
                    require_once $controllerPath;
                    $controllerFullName = $controllerName . "Controller";
                    $controller = new $controllerFullName();
                }
                else
                {
                    echo "Файл контроллера не создан!";
                }

                #Вызов функции контроллера
                $actionName = $routePattern['action'] . "Action";
                if(method_exists($controller, $actionName))
                {
                    if(count($params) > 0)
                        $controller->$actionName($params);
                    else
                        $controller->$actionName();
                }

                if(App::$session_isPost == false)
                {
                    Post::destroy();
                }
            } /*else if(stripos($url, '.php')) {
                $params = array();
                $params['GET'] = $_GET;
                $params['url'] = $url;

                $controllerName = 'PHP';
                $controllerFile = $controllerName . "Controller.php";
                $controllerPath = App::$controller_dir . $controllerFile;

                if(file_exists($controllerPath))
                {
                    require_once $controllerPath;
                    $controllerFullName = $controllerName . "Controller";
                    $controller = new $controllerFullName();
                }
                else
                {
                    echo "Файл контроллера не создан!";
                }

                #Вызов функции контроллера
                $actionName = "loadAction";
                if(method_exists($controller, $actionName))
                {
                    if(count($params) > 0)
                        $controller->$actionName($params);
                    else
                        $controller->$actionName();
                } else {
                    echo "Такого метода не существует в данном классе!";
                }
            }*/
		}

        //Функция для добавления шаблона URL
		public function addUrl($urlPattern, $controllerName = 'HomePage', $actionName = 'index', $filter = null)
		{
            #Создаём массив параметров
			$params = array();
			$urlArr = explode('/', $urlPattern);

            #Инициализация параметров
			foreach($urlArr as $urlKey => $urlVal)
			{
                #Определение параметра
				if(preg_match("|\{(.*)\}|U", $urlVal))
				{
					$urlVal = rtrim(ltrim($urlVal, '{'), '}');

                    #Массив отдельного параметра
                    $singleParamArray = array();
                    $singleParamArray['name'] = $urlVal;
                    $singleParamArray['id'] = $urlKey;

                    #Добавление массива фильтра (если необходим)
                    if(isset($filter))
                    {
                        $singleParamArray['filter'] = array();

                        #Инициализация фильтра для типа значения параметра
                        if(array_key_exists('type', $filter[$urlVal]))
                        {
                            $singleParamArray['filter']['type'] = $filter[$urlVal]['type'];
                        }

                        #Инициализация фильтра для длины значения параметра
                        if(array_key_exists('length', $filter[$urlVal]))
                        {
                            $singleParamArray['filter']['length'] = $filter[$urlVal]['length'];
                        }
                    }

                    #Добавления параметра к массиву параметров
					$params[] = $singleParamArray;
				}
			}

            #Инициализация шаблона URL-а
			$addUrlArr = array();
            $urlPattern = '^' . $urlPattern . '$';
			$addUrlArr['route_pattern'] = $urlPattern;
			$addUrlArr['controller'] = $controllerName;
			$addUrlArr['action'] = $actionName;

            #Добавление параметров, если они существуют
			if(count($params)>0)
				$addUrlArr['params'] = $params;

            #Добавление шаблона URL-а к общему массиву корректных шаблонов URL-а
			$this->validUrls[] = $addUrlArr;
		}

		#Функция, для проверки корректности URL
		public function validateUrl($routePattern, $validUrl)
		{
			#Шаблон регулярного выражения корректного URL-а
			$validUrlPattern = preg_replace("|\{.*\}|U", "(\w*)", $validUrl);
			#Если всё верно, возвращаем true, если нет - false
			if(preg_match("|" . $validUrlPattern . "$|U", $routePattern) == 1)
				return 1;
			else
				return 0;
		}

        public static function location($requestUrl)
        {
            header("Location:" . $requestUrl);
        }

        public function isCheckPage()
        {
            if($_SERVER['REQUEST_URI'] == Auth::$url_checkPage) {
                return true;
            } else {
                return false;
            }
        }

        public function isLoginPage()
        {
            if($_SERVER['REQUEST_URI'] == Auth::$url_loginPage)
            {
                return true;
            } else {
                return false;
            }
        }

        public function isRegistrationPage()
        {
            if($_SERVER['REQUEST_URI'] == Auth::$url_registrationPage)
            {
                return true;
            } else {
                return false;
            }
        }

        public function isActivationPage()
        {
            $urlArr =  explode('/', $_SERVER['REQUEST_URI']);
            if(App::SHORT_URL . $urlArr[2] == Auth::$url_activationPage)
            {
                return true;
            } else {
                return false;
            }
        }
	}
?>