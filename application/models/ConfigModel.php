<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 25.02.2016
 * Time: 14:22
 */

class Config {

    public static function increment($label, $value) {
        Database::Execute("UPDATE config
                           SET `value` = `value` + :value
                           WHERE label = :label",
            array(':value' => $value, ':label' => $label));
    }

    public static function update($label, $value) {
        Database::Execute("UPDATE config
                           SET `value` = :value
                           WHERE label = :label",
            array(':value' => $value, ':label' => $label));
    }

    public static function get_all() {
        $rows = Database::GetAll("SELECT * FROM config");
        foreach ($rows as $row) {
            $rows[$row['label']] = $row['value'];
        }
        return $rows;

    }

    public static function ajax_update_config() {
        $code = new Ajax('ajax_update_config', array('label', 'value'), 'config/update.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }

}