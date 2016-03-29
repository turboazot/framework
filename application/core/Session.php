<?php 
	class Session
	{
		public function __construct()
		{
			
		}

		public static function setVar($varName, $varValue)
		{
			$_SESSION[$varName] = $varValue;
		}

		public static function addToArr($arrName, $varKey, $varValue)
		{
            $_SESSION[$arrName][$varKey] = $varValue;
		}
        public static function getArrKey($arrayName, $arrayKey)
        {
            if(isset($_SESSION[$arrayName][$arrayKey]))
            {
                return $_SESSION[$arrayName][$arrayKey];
            }
            else
                return null;
        }

        public static function issetArrKey($arrayName, $arrayKey)
        {
            return isset($_SESSION[$arrayName][$arrayKey]);
        }

		public static function getVar($varName)
		{
			if(isset($_SESSION[$varName]))
			{
				return $_SESSION[$varName];
			}
			else
				return null;
		}

		public static function start()
		{
			session_set_cookie_params(App::$session_lifetime);
			session_start();
		}

		public static function destroy()
		{
			session_destroy();
		}

		public static function issetVar($varName)
		{
			return isset($_SESSION[$varName]);
		}

		public static function unsetVar($varName)
		{
			unset($_SESSION[$varName]);
		}

		public static function unsetArrKey($arrName, $keyName)
		{
			unset($_SESSION[$arrName][$keyName]);
		}

        public static function deletePostFromSession()
        {
            unset($_SESSION['POST']);
        }
	}
?>