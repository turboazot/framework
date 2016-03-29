<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 06.10.2015
 * Time: 0:30
 */

class PregMatch {

    private static $_patterns = array(
        'login' => "/^[a-z0-9_-]{3,16}$/",
        'some_word' => "/^[а-яА-ЯёЁa-zA-Z0-9]+$/u",
        'some_words' => "/^[а-яА-ЯёЁa-zA-Z0-9\s]+$/u",
        'integer' => "/^[0-9]+$/u",
        'float' => "/^[+-]?\d+(\.\d+)?$/",
        'mail' => "/^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/u",
        'date' => "/(0[1-9]|[12][0-9]|3[01])[- \/.](0[1-9]|1[012])[- \/.](19|20)\d\d/u",
        'year' => "/^[0-9]{4}$/u"
    );

    public static function PregMatchPattern($string, $pattern)
    {
        $pattern_name = self::GetPregMatchPattern($pattern);
        $isMatched = preg_match($pattern_name, $string);
        return $isMatched;
    }

    public static function GetPregMatchPattern($patternName)
    {
        return self::$_patterns[$patternName];
    }

    public static function GetPregMatchJSPattern($patternName)
    {
        if(self::$_patterns[$patternName]{strlen(self::$_patterns[$patternName]) - 1} == 'u')
        {
            return substr(self::$_patterns[$patternName], 0, -1);
        }
        else {
            return self::$_patterns[$patternName];
        }
    }

}