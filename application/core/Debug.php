<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 22.10.2015
 * Time: 2:03
 */

class Debug
{
    public static function printObject($label, $object)
    {
        echo $label . ':<br>';
        echo '<pre>';
        print_r($object);
        echo '</pre>';
    }
}