<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 05.03.2016
 * Time: 17:36
 */

class FuelType {

    public static function add($fuel_type) {
        try {
            Database::Execute("INSERT INTO fuel_types
                               (`name`, currency, tariff)
                               VALUES (:name, :currency, :tariff)",
            array(':name' => $fuel_type['name'], ':currency' => $fuel_type['currency'],
                ':tariff' => $fuel_type['tariff']));
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function get_all() {
        try {
            return Database::GetAll("SELECT * FROM fuel_types");
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function get_one($id) {
        try {
            return Database::GetRow("SELECT * FROM fuel_types WHERE id = :id",
                array(':id' => $id));
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function update($fuel_type) {
        try {
            Database::Execute("UPDATE fuel_types
                               SET `name` = :name, currency = :currency, tariff = :tariff
                               WHERE id = :id",
                array(':name' => $fuel_type['name'], ':currency' => $fuel_type['currency'],
                    ':tariff' => $fuel_type['tariff'], ':id' => $fuel_type['id']));
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function delete($id) {
        try {
            Database::Execute("DELETE FROM fuel_types WHERE id = :id",
                array(':id' => $id));
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function get_type($id) {
        try {
            return Database::GetOne("SELECT `name` FROM fuel_types WHERE id = :id",
                array(':id' => $id));
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function increment($id, $value) {
        try {
            Database::Execute("UPDATE fuel_types
                               SET balance = balance + :value
                               WHERE id = :id",
                array(':id' => $id, ':value' => $value));
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function get_tariff($id) {
        try {
            return Database::GetOne("SELECT tariff FROM fuel_types WHERE id = :id",
                array(':id' => $id));
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function ajax_add_fuel_type() {
        $code = new Ajax('ajax_add_fuel_type', array('name', 'currency', 'tariff'), 'fuel_type/add.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }

    public static function ajax_update_fuel_type() {
        $code = new Ajax('ajax_update_fuel_type', array('id', 'name', 'currency', 'tariff'),
            'fuel_type/update.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }

    public static function ajax_delete_fuel_type() {
        $code = new Ajax('ajax_delete_fuel_type', array('id'), 'fuel_type/delete.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }
}