<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 26.02.2016
 * Time: 22:48
 */

class Fuel {
    public static function add($fuel) {
        try {
            App::requireModel('Cost');
            App::requireModel('FuelType');
            App::requireModel('Vehicle');

            $type = ($fuel['type'] == 'cash') ? 'cash' : FuelType::get_one((int)$fuel['type']);

            if($fuel['vehicle']) {
                $vehicle = Vehicle::get_one($fuel['vehicle']);
                if($vehicle['owner'] != 1 || $fuel['type'] == 'cash') {
                    $cost = array();
                    if($fuel['type'] == 'cash') {
                        $cost['amount'] = $fuel['amount'] * $fuel['tariff'];
                        $cost['currency'] = $fuel['currency'];
                        $type_word = 'наличка';
                    } else {
                        $cost['amount'] = $fuel['amount'] * $type['tariff'];
                        $cost['currency'] = $type['currency'];
                        $type_word = $type['name'];
                    }

                    $cost['description'] = "Заправка: " . $type_word;
                    $cost['parent_id'] = $fuel['vehicle'];
                    $cost['parent_type'] = 'fuel';
                    $cost['sp'] = '';
                    $cost['date'] = Date::toHyphenFormat($fuel['date']);

                    Cost::add($cost);

                    $cost_id = Database::GetLastInsertId();
                    Vehicle::increment_fuel($vehicle['id'], $fuel['amount']);
                }
                if($fuel['type'] != 'cash') {
                    FuelType::increment($type['id'], -$fuel['amount']);
                    Vehicle::increment_fuel($vehicle['id'], $fuel['amount']);
                }

            } else {
                $cost = array();

                if($fuel['type'] == 'cash') {
                    $cost['amount'] = $fuel['amount'] * $fuel['tariff'];
                    $cost['currency'] = $fuel['currency'];
                    $type_word = 'наличка';
                } else {
                    $cost['amount'] = $fuel['amount'] * $type['tariff'];
                    $cost['currency'] = $type['currency'];
                    $type_word = $type['name'];
                }

                $cost['description'] = "Покупка: " . $type_word;
                $cost['parent_id'] = null;
                $cost['parent_type'] = 'fuel';
                $cost['sp'] = '';
                $cost['date'] = Date::toHyphenFormat($fuel['date']);

                Cost::add($cost);

                $cost_id = Database::GetLastInsertId();

                if($fuel['type'] != 'cash') {
                    FuelType::increment($type['id'], $fuel['amount']);
                }
            }

            Database::Execute("INSERT INTO fuel
                               (amount, vehicle, `date`, `type`, cost)
                               VALUES (:amount, :vehicle, :date, :type, :cost)",
                array(':amount' => $fuel['amount'], ':vehicle' => $fuel['vehicle'], ':date' => $fuel['date'],
                    ':type' => $fuel['type'], ':cost' => $cost_id));



        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function get_one($id) {
        try {
            return Database::GetRow("SELECT * FROM fuel WHERE id = :id",
                array(':id' => $id));
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function get_all($limit, $start_from = null,
                                   $vehicle = null, $month = null, $year = null) {
        try {
            App::requireModel('FuelType');
            App::requireModel('Vehicle');
            $sql_month = ($month) ? $month : date('m');
            $sql_year = ($year) ? $year : date('y');
            $sql_vehicle_part = (isset($vehicle)) ? 'AND vehicle = ' . $vehicle : '';
            $sql_limit_part = (isset($start_from)) ? 'LIMIT ' . $start_from . ', ' . $limit : 'LIMIT ' . $limit;
            $fuels = Database::GetAll("SELECT *
                                       FROM fuel
                                       WHERE month(`date`) = $sql_month AND year(`date`) = $sql_year
                                       $sql_vehicle_part
                                       ORDER BY `date` DESC, id DESC $sql_limit_part");

            foreach ($fuels as &$fuel) {
                $fuel['date'] = Date::toDotFormat($fuel['date']);
                $fuel['type_word'] = ($fuel['type'] == 'cash') ? 'наличка' : FuelType::get_type($fuel['type']);
                $fuel['vehicle_number'] = Vehicle::get_registration_number($fuel['vehicle']);
            }

            return $fuels;
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function update($fuel) {
        try {
            App::requireModel('Cost');
            App::requireModel('FuelType');
            App::requireModel('Vehicle');

            $type = ($fuel['type'] == 'cash') ? 'cash' : FuelType::get_one((int)$fuel['type']);

            $old_cost_id = Database::GetOne("SELECT cost FROM fuel WHERE id = :id",
                array(':id' => $fuel['id']));
            if($old_cost_id) {
                Database::Execute("DELETE FROM costs WHERE id = :id",
                    array(':id' => $old_cost_id));
            }

            $old_fuel = Database::GetRow("SELECT amount, `type`, vehicle FROM fuel WHERE id = :id",
                array(':id' => $fuel['id']));

            if($old_fuel['type'] != 'cash') {
                if($old_fuel['vehicle']) {
                    FuelType::increment($old_fuel['type'], $old_fuel['amount']);
                } else {
                    FuelType::increment($old_fuel['type'], -$old_fuel['amount']);
                }
            }

            $cost_id = 0;

            if($fuel['vehicle']) {
                $vehicle = Vehicle::get_one($fuel['vehicle']);
                if($vehicle['owner'] != 1 || $fuel['type'] == 'cash') {
                    $cost = array();

                    if($fuel['type'] == 'cash') {
                        $cost['amount'] = $fuel['amount'] * $fuel['tariff'];
                        $cost['currency'] = $fuel['currency'];
                        $type_word = 'наличка';
                    } else {
                        $cost['amount'] = $fuel['amount'] * $type['tariff'];
                        $cost['currency'] = $type['currency'];
                        $type_word = $type['name'];
                    }

                    $cost['description'] = "Заправка: " . $type_word;
                    $cost['parent_id'] = $fuel['vehicle'];
                    $cost['parent_type'] = 'fuel';
                    $cost['sp'] = '';
                    $cost['date'] = Date::toHyphenFormat($fuel['date']);

                    Cost::add($cost);

                    $cost_id = Database::GetLastInsertId();
                }
                if($fuel['type'] != 'cash') {
                    FuelType::increment($type['id'], -$fuel['amount']);
                }

            } else {
                $cost = array();

                if($fuel['type'] == 'cash') {
                    $cost['amount'] = $fuel['amount'] * $fuel['tariff'];
                    $cost['currency'] = $fuel['currency'];
                    $type_word = 'наличка';
                } else {
                    $cost['amount'] = $fuel['amount'] * $type['tariff'];
                    $cost['currency'] = $type['currency'];
                    $type_word = $type['name'];
                }

                $cost['description'] = "Покупка: " . $type_word;
                $cost['parent_id'] = null;
                $cost['parent_type'] = 'fuel';
                $cost['sp'] = '';
                $cost['date'] = Date::toHyphenFormat($fuel['date']);

                Cost::add($cost);

                $cost_id = Database::GetLastInsertId();

                if($fuel['type'] != 'cash') {
                    FuelType::increment($type['id'], $fuel['amount']);
                }
            }

            Database::Execute("UPDATE fuel
                               SET amount = :amount, vehicle = :vehicle, `date` = :date, `type` = :type,
                               cost = :cost
                               WHERE id = :id",
                array(':amount' => $fuel['amount'], ':vehicle' => $fuel['vehicle'], ':date' => $fuel['date'],
                    ':type' => $fuel['type'], ':cost' => $cost_id, ':id' => $fuel['id']));

        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function delete($id) {
        try {
            App::requireModel('Cost');
            App::requireModel('FuelType');

            $cost_id = Database::GetOne("SELECT cost FROM fuel WHERE id = :id",
                array(':id' => $id));

            if($cost_id) {
                Cost::delete($cost_id);
            }

            $fuel_type = Database::GetRow("SELECT `type`, amount FROM fuel WHERE id = :id",
                array(':id' => $id));

            if($fuel_type['type'] != 'cash') {
                FuelType::increment($fuel_type['type'], $fuel_type['amount']);
            }

            Database::Execute("DELETE FROM fuel WHERE id = :id",
                array(':id' => $id));
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function get_default_set($limit, $filter) {
        $set['limit'] = $limit;
        $set['fuels'] = self::get_all($limit, null, null, $filter['month'], $filter['year']);
        return $set;
    }

    public static function ajax_add_fuel() {
        $code = new Ajax('ajax_add_fuel', array('amount', 'tariff', 'currency', 'vehicle', 'date', 'type'),
            'fuel/add.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }

    public static function ajax_get_fuel() {
        $code = new Ajax('ajax_get_fuel', array('limit', 'start_from', 'vehicle', 'month', 'year'), 'fuel/get-all.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }

    public static function ajax_update_fuel() {
        $code = new Ajax('ajax_update_fuel', array('id', 'amount', 'tariff', 'currency', 'vehicle', 'date', 'type'), 'fuel/update.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }

    public static function ajax_delete_fuel() {
        $code = new Ajax('ajax_delete_fuel', array('id'), 'fuel/delete.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }

}