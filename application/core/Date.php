<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 12.02.2016
 * Time: 21:59
 */

class Date {

    public static function getCurrentDate() {
        return date('d.m.Y');
    }

    public static function getCurrentTime() {
        return date('h:i:s');
    }

    public static function getCurrentDateTime() {
        return date('h:i:s d.m.Y');
    }

    public static function toDotFormat($date, $year = false) {
        $new_date = date_create($date);
        if(!$year) {
            return date_format($new_date, 'd.m.Y');
        }
        return date_format($new_date, 'd.m.Y') . ' г.';
    }

    public static function toHyphenFormat($date) {
        return date('Y-m-d', strtotime($date));
    }

    public static function toTimeFormat($date, $seconds = false) {
        $timeDate = date_create($date);
        $format = ($seconds) ? 'H:i:s' : 'H:i';
        return date_format($timeDate, $format);
    }

    public static function getMonthName($month) {
        switch($month) {
            case '01': return 'января';
            case '02': return 'февраля';
            case '03': return 'марта';
            case '04': return 'апреля';
            case '05': return 'мая';
            case '06': return 'июня';
            case '07': return 'июля';
            case '08': return 'августа';
            case '09': return 'сентября';
            case '10': return 'октября';
            case '11': return 'ноября';
            case '12': return 'декабря';
            default: return $month;
        }
    }

    public static function toWordFormat($date, $year = true) {
        $new_date = self::toDotFormat($date);
        $pattern = "/\.(\d+)\./";
        $month = array();
        preg_match("/\.(\d+)\./", $new_date, $month);
        $month = self::getMonthName($month[1]);
        $wordDate = preg_replace($pattern, ' ' . $month . ' ', $new_date);
        if($year) {
            $wordDate .= ' г.';
        } else {
            $wordDate = substr($wordDate, 0, strlen($wordDate) - 5);
        }
        return $wordDate;
    }
}