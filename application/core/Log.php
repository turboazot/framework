<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 29.10.2015
 * Time: 15:19
 */

class Log
{
    private $div_className;
    private $img_name;
    private $img_extension;
    private $img_className;
    private $session_logArray;

    public function __construct($div_className, $session_logArray)
    {
        $this->div_className = $div_className;
        $this->session_logArray = $session_logArray;
    }

    public function setImage($img_name, $img_extension, $img_className)
    {
        $this->img_name = $img_name;
        $this->img_extension = $img_extension;
        $this->img_className = $img_className;
    }

    public function setMessage($messageBody, $messageKey)
    {
        Session::addToArr($this->session_logArray, $messageKey, $messageBody);
    }

    public function getMessages()
    {
        if(Session::issetVar($this->session_logArray))
        {
            $html = "";
            $messageArray = Session::getVar($this->session_logArray);
            foreach ($messageArray as $message)
            {
                $html .= '<div class="' . $this->div_className . '">';
                if(isset($this->img_name) && isset($this->img_className) && isset($this->img_extension)) {
                    $html .= '<img class="' . $this->img_className . '"
                     src="' . App::URL . App::$img_dir . $this->img_name . $this->img_extension . '">';
                }
                            $html .= '<span>' .
                                $message .
                            '</span>' .
                          '</div>';
            }

            Session::unsetVar($this->session_logArray);
            return $html;
        }
    }

    public static function newLog($logName, $imgExtension = '.png')
    {
        $obj = new Log($logName . '-msg-row', $logName . '_messages');
        return $obj;
    }

    public function issetLog()
    {
        return Session::issetVar($this->session_logArray);
    }
}

class ErrorLog extends Log
{
    private static $inst;

    public static function getInst()
    {
        if(!isset(self::$inst))
        {
            self::$inst = parent::newLog('error');
        }

        return self::$inst;
    }

    public static function setErrorMessage($messageBody, $messageKey)
    {
        self::getInst()->setMessage($messageBody, $messageKey);
    }

    public static function getErrorMessages()
    {
        return self::getInst()->getMessages();
    }

    public static function issetErrors()
    {
        return self::getInst()->issetLog();
    }
}