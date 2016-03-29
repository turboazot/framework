<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 26.02.2016
 * Time: 22:35
 */

class Worker {
    public static function add($worker) {
        try {
            Database::Execute("INSERT INTO workers
                               (first_name, last_name, fath_name, `type`, phone, owner)
                               VALUES (:first_name, :last_name, :fath_name, :type, :phone, :owner)",
                array(':first_name' => $worker['first_name'], ':last_name' => $worker['last_name'],
                    ':fath_name' => $worker['fath_name'], ':type' => $worker['type'],
                    ':phone' => $worker['phone'], ':owner' => $worker['owner']));
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function get_one($id) {
        try {
            return Database::GetRow("SELECT * FROM workers WHERE id = :id",
                array(':id' => $id));
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function get_all($limit, $start_from = null) {
        try {
            App::requireModel('Partner');

            $sql_limit_part = (isset($start_from)) ? 'LIMIT ' . $start_from . ', ' . $limit : 'LIMIT ' . $limit;
            $workers = Database::GetAll("SELECT * FROM workers $sql_limit_part");
            foreach ($workers as &$worker) {
                $worker['owner_name'] = Partner::get_name($worker['owner']);
            }

            return $workers;

        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function update($worker) {
        try {
            Database::Execute("UPDATE workers
                               SET first_name = :first_name, last_name = :last_name, fath_name = :fath_name,
                               `type` = :type, phone = :phone, owner = :owner
                               WHERE id = :id",
                array(':first_name' => $worker['first_name'], ':last_name' => $worker['last_name'],
                    ':fath_name' => $worker['fath_name'], ':type' => $worker['type'],
                    ':phone' => $worker['phone'], ':owner' => $worker['owner'], ':id' => $worker['id']));
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function delete($id) {
        try {
            Database::Execute("DELETE FROM workers WHERE id = :id",
                array(':id' => $id));
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function get_name($id) {
        try {
            return Database::GetOne("SELECT last_name FROM workers WHERE id = :id",
                array(':id' => $id));
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function get_owner($id) {
        try {
            return Database::GetOne("SELECT owner FROM workers WHERE id = :id",
                array(':id' => $id));
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function ajax_add_worker() {
        $code = new Ajax('ajax_add_worker', array('first_name', 'last_name', 'fath_name',
            'type', 'phone', 'owner'), 'worker/add.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }

    public static function ajax_get_workers() {
        $code = new Ajax('ajax_get_workers', array('limit', 'start_from'), 'worker/get-all.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }

    public static function ajax_update_worker() {
        $code = new Ajax('ajax_update_worker', array('id', 'first_name', 'last_name', 'fath_name',
            'type', 'phone', 'owner'), 'worker/update.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }

    public static function ajax_delete_worker() {
        $code = new Ajax('ajax_delete_worker', array('id'), 'worker/delete.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }
}