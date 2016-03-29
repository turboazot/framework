<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 14.10.2015
 * Time: 22:49
 */

class Cookie
{
    public static $defaultTime;
    public function __construct()
    {

    }

    public static function setDefaultTime($time)
    {
        self::$defaultTime = $time;
    }

    public static function getDefaultTime()
    {
        return self::$defaultTime;
    }

    public static function setVar($varName, $varValue)
    {
        setcookie($varName, $varValue);
    }

    public static function getVar($varName)
    {
        if(isset($_COOKIE[$varName]))
        {
            return $_COOKIE[$varName];
        }
        else
            return false;
    }

    public static function issetVar($varName)
    {
        return isset($_COOKIE[$varName]);
    }

    public static function unsetVar($varName)
    {
        setcookie($varName, "");
    }
}