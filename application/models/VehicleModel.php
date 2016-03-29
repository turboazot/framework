<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 26.02.2016
 * Time: 22:42
 */

class Vehicle {
    public static function add($vehicle) {
        try {
            Database::Execute("INSERT INTO vehicles
                               (registration_number, sp, `year`, state, driver, owner)
                               VALUES (:registration_number, :sp, :year, :state, :driver, :owner)",
            array(':registration_number' => $vehicle['registration_number'], ':sp' => $vehicle['sp'],
                ':year' => $vehicle['year'], ':state' => $vehicle['state'],':driver' => $vehicle['driver'], ':owner' => $vehicle['owner']));
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function get_one($id) {
        try {
            return Database::GetRow("SELECT * FROM vehicles WHERE id = :id",
                array(':id' => $id));
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function get_all($limit, $start_from = null) {
        try {
            App::requireModel('Worker');
            App::requireModel('Partner');

            $sql_limit_part = (isset($start_from)) ? 'LIMIT ' . $start_from . ', ' . $limit : 'LIMIT ' . $limit;
            $vehicles =  Database::GetAll("SELECT * FROM vehicles $sql_limit_part");
            foreach ($vehicles as &$vehicle) {
                $vehicle['driver_name'] = Worker::get_name($vehicle['driver']);
                $vehicle['owner_name'] = Partner::get_name($vehicle['owner']);
            }

            return $vehicles;

        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function update($vehicle) {
        try {
            Database::Execute("UPDATE vehicles
                               SET registration_number = :registration_number, sp = :sp, `year` = :year,
                               state = :state, driver = :driver, owner = :owner
                               WHERE id = :id",
                array(':registration_number' => $vehicle['registration_number'], ':sp' => $vehicle['sp'],
                    ':year' => $vehicle['year'], ':state' => $vehicle['state'], ':driver' => $vehicle['driver'], ':owner' => $vehicle['owner'],
                    ':id' => $vehicle['id']));
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function delete($id) {
        try {
            Database::Execute("DELETE FROM vehicles WHERE id = :id",
                array(':id' => $id));
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function get_owner($id) {
        try {
            return Database::GetOne("SELECT owner FROM vehicles WHERE id = :id",
                array(':id' => $id));
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function get_registration_number($id) {
        try {
            return Database::GetOne("SELECT registration_number FROM vehicles WHERE id = :id",
                array(':id' => $id));
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function set_sp($id, $sp) {
        try {
            Database::Execute("UPDATE vehicles
                               SET sp = :sp
                               WHERE id = :id",
                array(':sp' => $sp, ':id' => $id));
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function increment_fuel($id, $amount) {
        try {
            Database::Execute("UPDATE vehicles
                               SET fuel_balance = fuel_balance + :amount
                               WHERE id = :id",
                array(':amount' => $amount, ':id' => $id));
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function ajax_add_vehicle() {
        $code = new Ajax('ajax_add_vehicle', array('registration_number', 'sp', 'year', 'state', 'driver', 'owner'),
            'vehicle/add.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }

    public static function ajax_get_vehicles() {
        $code = new Ajax('ajax_get_vehicles', array('limit', 'start_from'), 'vehicle/get-all.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }

    public static function ajax_update_vehicle() {
        $code = new Ajax('ajax_update_vehicle', array('id', 'registration_number', 'sp', 'year', 'state', 'driver', 'owner'),
            'vehicle/update.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }

    public static function ajax_delete_vehicle() {
        $code = new Ajax('ajax_delete_vehicle', array('id'), 'vehicle/delete.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }
}