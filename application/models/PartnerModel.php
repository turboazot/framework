<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 05.03.2016
 * Time: 0:22
 */

class Partner {

    public static function get_all() {
        try {
            return Database::GetAll("SELECT * FROM admins");
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function get_name($id) {
        try {
            return Database::GetOne("SELECT first_name FROM admins WHERE id = :id",
                array(':id' => $id));
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

}