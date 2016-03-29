<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 14.10.2015
 * Time: 22:38
 */

class Post
{
    public function __construct()
    {

    }

    /*public static function setVar($varName, $varValue)
    {
        $_POST[$varName] = $varValue;
    }

    public static function addToArr($arrName, $varValue)
    {
        $_POST[$arrName][] = $varValue;
    }

    public static function getVar($varName)
    {
        if(isset($_POST[$varName]))
        {
            return $_POST[$varName];
        }
        else
            return false;
    }

    public static function unsetVar($varName)
    {
        unset($_POST[$varName]);
    }

    public static function unsetArrKey($arrName, $keyName)
    {
        unset($_POST[$arrName][$keyName]);
    }*/

    public static function toSession($post_isset, $post_variableName, $session_variableName)
    {
        if(isset($_POST[$post_isset]))
        {
            $post_arrayName = 'POST';
            Session::addToArr($post_arrayName, $session_variableName, $_POST[$post_variableName]);
            unset($_POST);

            $currentLink = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

            Route::location($currentLink);
            exit();
        }
    }

    public static function issetVar($variableName)
    {
        return Session::issetArrKey('POST', $variableName);
    }

    public static function getVar($variableName)
    {
        return Session::getArrKey('POST', $variableName);
    }

    public static function setVar($variableKey, $variableValue)
    {
        Session::addToArr('POST', $variableKey, $variableValue);
    }

    public static function save()
    {
        App::$session_isPost = true;
    }

    public static function destroy()
    {
        Session::unsetVar('POST');
    }
}