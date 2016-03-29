<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 26.02.2016
 * Time: 22:23
 */

class Registry {
    public static function add($row) {
        try {
            App::requireModel('Vehicle');
            App::requireModel('Fuel');
            App::requireModel('FuelType');
            App::requireModel('Cost');

            $vehicle = Vehicle::get_one($row['vehicle']);
            $driver = $vehicle['driver'];

            $km = $row['sp_after'] - $row['sp_before'];

            Vehicle::set_sp($vehicle['id'], $row['sp_after']);

            //Топливо

            /*$fuel = array();
            $fuel['amount'] = $row['fuel_get'] + $row['fuel_before'] - $row['fuel_after'];
            $fuel['tariff'] = $row['fuel_tariff'];
            $fuel['currency'] = $row['currency'];
            $fuel['vehicle'] = $row['vehicle'];
            $fuel['date'] = $row['date'];
            $fuel['type'] = $row['fuel_type'];

            Fuel::add($fuel);*/

            //$fuel_id = Database::GetLastInsertId();

            $fuel_lost = $row['fuel_get'] + $row['fuel_before'] - $row['fuel_after'];
            $fuel_cost = ($row['fuel_type'] == 'cash') ?
                $row['fuel_tariff'] * $fuel_lost
                : FuelType::get_tariff($row['fuel_type']) * $fuel_lost;

            /*if($vehicle['owner'] != 1) {
                $fuel_cost = Database::GetOne("SELECT amount
                                  FROM costs
                                  WHERE id = (SELECT cost FROM fuel WHERE id = :id)",
                    array(':id' => $fuel_id));
            } else {

            }*/

            Vehicle::increment_fuel($vehicle['id'], -$fuel_lost);

            // Вал. доход
            $dirty_gain = $row['quantity'] * $row['tariff'];

            if($row['tariff_type'] == 'ход' && $row['partial']) {
                $dirty_gain += $row['partial'];
            } else if($row['tariff_type'] == 'т/км') {
                $dirty_gain *= $row['weight'];
            }

            $dirty_gain = number_format($dirty_gain, 2, '.', '');

            // Зарплата
            if($row['tariff_type'] == 'т' || $row['tariff_type'] == 'т/км') {
                $salary_total = $row['salary'];
            } else {
                $salary_total = $row['quantity'] * $row['salary_tariff'];
                if($row['partial']) {
                    $salary_total += ($row['partial'] / $row['tariff']) * $row['salary_tariff'];
                }
            }

            $cost = array();
            $cost['amount'] = $salary_total;
            $cost['currency'] = $row['currency'];
            $cost['description'] = $row['quantity'] . ' ' . $row['tariff_type'] . '. по ' .
            $row['tariff'] . ' ' . $row['currency'];
            if($row['tariff_type'] == 'ход' && $row['partial']) {
                $cost['description'] .= ' + ' . $row['partial'] . ' ' . $row['currency'];
            }
            $cost['parent_id'] = $driver;
            $cost['parent_type'] = 'worker';
            $cost['sp'] = 0;
            $cost['date'] = Date::toHyphenFormat($row['date']);

            Cost::add($cost);

            $salary_cost_id = Database::GetLastInsertId();


            // Чистый доход
            $clear_gain = number_format($dirty_gain - $fuel_cost - $salary_total, 2, '.', '');

            Database::Execute("INSERT INTO registry
                               (vehicle, driver, client, `date`, sp_before, sp_after, km, fuel_get, fuel_before,
                               fuel_after, fuel_type, fuel_lost, material, quantity, tariff, currency, tariff_type, `partial`,
                               description, dirty_gain, salary, clear_gain, partner, salary_cost_id)
                               VALUES (:vehicle, :driver, :client, :date, :sp_before, :sp_after, :km, :fuel_get, :fuel_before,
                               :fuel_after, :fuel_type, :fuel_lost, :material, :quantity, :tariff, :currency, :tariff_type,
                               :partial, :description, :dirty_gain, :salary, :clear_gain, :partner, :salary_cost_id)",
            array(':vehicle' => $row['vehicle'], ':driver' => $driver, ':client' => $row['client'],
                ':date' => $row['date'], ':sp_before' => $row['sp_before'], ':sp_after' => $row['sp_after'],
                ':km' => $km, ':fuel_get' => $row['fuel_get'], ':fuel_before' => $row['fuel_before'],
                ':fuel_after' => $row['fuel_after'], ':fuel_type' => $row['fuel_type'], ':fuel_lost' => $fuel_lost,
                ':material' => $row['material'], ':quantity' => $row['quantity'], ':tariff' => $row['tariff'],
                ':currency' => $row['currency'], ':tariff_type' => $row['tariff_type'], ':partial' => $row['partial'],
                ':description' => $row['description'], ':dirty_gain' => $dirty_gain, ':salary' => $salary_total,
                ':clear_gain' => $clear_gain, ':partner' => $vehicle['owner'],
                ':salary_cost_id' => $salary_cost_id));
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function get_one($id) {
        try {
            return Database::GetRow("SELECT * FROM registry WHERE id = :id",
                array(':id' => $id));
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function get_all($limit, $start_from = null, $vehicle = null, $month = null, $year = null, $partner = null) {
        try {
            App::requireModel('Vehicle');
            App::requireModel('Worker');

            $sql_limit_part = (isset($start_from)) ? 'LIMIT ' . $start_from . ', ' . $limit : 'LIMIT ' . $limit;
            $sql_month = ($month) ? $month : date('m');
            $sql_year = ($year) ? $year : date('y');
            $sql_partner = ($partner) ? $partner : 1;
            $sql_vehicle_part = ($vehicle) ? 'AND vehicle = ' . $vehicle : '';
            $rows =  Database::GetAll("SELECT *
                                     FROM registry
                                     WHERE month(`date`) = $sql_month AND year(`date`) = $sql_year
                                     AND partner = $sql_partner
                                     $sql_vehicle_part
                                     ORDER BY `date` DESC, id DESC $sql_limit_part");

            foreach ($rows as &$row) {
                $row['date'] = Date::toDotFormat($row['date']);
                $row['vehicle_number'] = Vehicle::get_registration_number($row['vehicle']);
                $row['driver_name'] = Worker::get_name($row['driver']);
            }

            return $rows;
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function update($row) {
        try {
            App::requireModel('Vehicle');
            App::requireModel('Fuel');
            App::requireModel('FuelType');
            App::requireModel('Cost');

            $vehicle = Vehicle::get_one($row['vehicle']);
            $driver = $vehicle['driver'];

            $km = $row['sp_after'] - $row['sp_before'];

            Vehicle::set_sp($vehicle['id'], $row['sp_after']);

            //Топливо
            /*if($row['fuel_id']) {
                Fuel::delete($row['fuel_id']);
            }

            $fuel = array();
            $fuel['amount'] = $row['fuel_get'] + $row['fuel_before'] - $row['fuel_after'];
            $fuel['tariff'] = $row['fuel_tariff'];
            $fuel['currency'] = $row['currency'];
            $fuel['vehicle'] = $row['vehicle'];
            $fuel['date'] = $row['date'];
            $fuel['type'] = $row['fuel_type'];

            Fuel::add($fuel);

            $fuel_id = Database::GetLastInsertId();*/

            $fuel_lost = $row['fuel_get'] + $row['fuel_before'] - $row['fuel_after'];
            $fuel_cost = ($row['fuel_type'] == 'cash') ?
                $row['fuel_tariff'] * $fuel_lost
                : FuelType::get_tariff($row['fuel_type']) * $fuel_lost;

            /*if($vehicle['owner'] != 1) {
                $fuel_cost = Database::GetOne("SELECT amount
                                  FROM costs
                                  WHERE id = (SELECT cost FROM fuel WHERE id = :id)",
                    array(':id' => $fuel_id));
            } else {
                $fuel_cost = ($row['fuel_type'] == 'cash') ?
                    $fuel['tariff'] * $fuel['amount']
                    : FuelType::get_tariff($row['fuel_type']) * $fuel['amount'];
            }*/

            Vehicle::increment_fuel($vehicle['id'], $row['fuel_lost']);
            Vehicle::increment_fuel($vehicle['id'], -$fuel_lost);

            // Вал. доход
            $dirty_gain = $row['quantity'] * $row['tariff'];

            if($row['tariff_type'] == 'ход' && $row['partial']) {
                $dirty_gain += $row['partial'];
            } else if($row['tariff_type'] == 'т/км') {
                $dirty_gain *= $row['weight'];
            }

            $dirty_gain = number_format($dirty_gain, 2, '.', '');

            // Зарплата
            if($row['tariff_type'] == 'т' || $row['tariff_type'] == 'т/км') {
                $salary_total = $row['salary'];
            } else {
                $salary_total = $row['quantity'] * $row['salary_tariff'];
                if($row['partial']) {
                    $salary_total += ($row['partial'] / $row['tariff']) * $row['salary_tariff'];
                }
            }

            Cost::delete($row['salary_cost_id']);

            $cost = array();
            $cost['amount'] = $salary_total;
            $cost['currency'] = $row['currency'];
            $cost['description'] = $row['quantity'] . ' ' . $row['tariff_type'] . '. по ' .
                $row['tariff'] . ' ' . $row['currency'];
            if($row['tariff_type'] == 'ход' && $row['partial']) {
                $cost['description'] .= ' + ' . $row['partial'] . ' ' . $row['currency'];
            }
            $cost['parent_id'] = $driver;
            $cost['parent_type'] = 'worker';
            $cost['sp'] = 0;
            $cost['date'] = Date::toHyphenFormat($row['date']);

            Cost::add($cost);

            $salary_cost_id = Database::GetLastInsertId();


            // Чистый доход
            $clear_gain = number_format($dirty_gain - $fuel_cost - $salary_total, 2, '.', '');

            Database::Execute("UPDATE registry
                               SET vehicle = :vehicle, driver = :driver, client = :client, `date` = :date,
                               sp_before = :sp_before, sp_after = :sp_after, km = :km, fuel_get = :fuel_get,
                               fuel_before = :fuel_before, fuel_after = :fuel_after, fuel_type = :fuel_type,
                               fuel_lost = :fuel_lost, material = :material, quantity = :quantity, tariff = :tariff,
                               currency = :currency, tariff_type = :tariff_type, `partial` = :partial,
                               description = :description, dirty_gain = :dirty_gain, salary = :salary,
                               clear_gain = :clear_gain, partner = :partner, salary_cost_id = :salary_cost_id
                               WHERE id = :id",
                array(':id' => $row['id'], ':vehicle' => $row['vehicle'], ':driver' => $driver, ':client' => $row['client'],
                    ':date' => $row['date'], ':sp_before' => $row['sp_before'], ':sp_after' => $row['sp_after'],
                    ':km' => $km, ':fuel_get' => $row['fuel_get'], ':fuel_before' => $row['fuel_before'],
                    ':fuel_after' => $row['fuel_after'], ':fuel_type' => $row['fuel_type'], ':fuel_lost' => $fuel_lost,
                    ':material' => $row['material'], ':quantity' => $row['quantity'], ':tariff' => $row['tariff'],
                    ':currency' => $row['currency'], ':tariff_type' => $row['tariff_type'], ':partial' => $row['partial'],
                    ':description' => $row['description'], ':dirty_gain' => $dirty_gain, ':salary' => $salary_total,
                    ':clear_gain' => $clear_gain, ':partner' => $vehicle['owner'],
                    ':salary_cost_id' => $salary_cost_id));
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function delete($id) {
        try {
            App::requireModel('Fuel');
            App::requireModel('Cost');

            $row = Database::GetRow("SELECT * FROM registry WHERE id = :id",
                array(':id' => $id));

            if($row['fuel_id']) {
                Fuel::delete($row['fuel_id']);
            }
            Cost::delete($row['salary_cost_id']);

            Database::Execute("DELETE FROM registry WHERE id = :id",
                array(':id' => $id));
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function get_total_dirty($partner, $month = null, $year = null, $vehicle = null) {
        $sql_month = ($month) ? $month : date('m');
        $sql_year = ($year) ? $year : date('y');
        $sql_vehicle_part = ($vehicle) ? 'AND vehicle = ' . $vehicle : '';

        $total = 0;
        $rows = Database::GetAll("SELECT *
                                  FROM registry
                                  WHERE month(`date`) = $sql_month AND year(`date`) = $sql_year
                                  $sql_vehicle_part AND partner = :partner",
            array(':partner' => $partner));

        foreach ($rows as $row) {
            $total += $row['dirty_gain'];
        }

        return $total;
    }

    public static function get_total_clear($partner, $month = null, $year = null, $vehicle = null) {
        $sql_month = ($month) ? $month : date('m');
        $sql_year = ($year) ? $year :date('y');
        $sql_vehicle_part = ($vehicle) ? 'AND vehicle = ' . $vehicle : '';

        $total = 0;
        $rows = Database::GetAll("SELECT *
                                  FROM registry
                                  WHERE month(`date`) = $sql_month AND year(`date`) = $sql_year
                                  $sql_vehicle_part AND partner = :partner",
            array(':partner' => $partner));

        foreach ($rows as $row) {
            $total += $row['clear_gain'];
        }

        return $total;
    }

    public static function get_default_set($limit, $filter) {
        $set['limit'] = $limit;
        $set['rows'] = self::get_all($limit, null, null, $filter['month'], $filter['year'], $filter['partner']);
        $set['total']['dirty'] = self::get_total_dirty($filter['partner'], $filter['month'], $filter['year'], null);
        $set['total']['clear'] = self::get_total_clear($filter['partner'], $filter['month'], $filter['year'], null);
        return $set;
    }

    public static function ajax_add_registry() {
        $code = new Ajax('ajax_add_registry', array('date', 'vehicle', 'client', 'sp_before', 'sp_after',
            'currency', 'fuel_type', 'fuel_tariff', 'fuel_get', 'fuel_before', 'fuel_after',
            'material', 'tariff_type', 'quantity', 'tariff', 'weight', 'partial', 'salary_tariff', 'salary',
            'description'), 'registry/add.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }

    public static function ajax_get_registry() {
        $code = new Ajax('ajax_get_registry', array('limit', 'start_from', 'vehicle', 'month', 'year', 'partner'),
            'registry/get-all.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }

    public static function ajax_get_registry_total() {
        $code = new Ajax('ajax_get_registry_total', array('vehicle', 'month', 'year', 'partner'), 'registry/get-total.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }

    public static function ajax_update_registry() {
        $code = new Ajax('ajax_update_registry', array('id', 'date', 'vehicle', 'client', 'sp_before', 'sp_after',
            'currency', 'fuel_type', 'fuel_tariff', 'fuel_get', 'fuel_before', 'fuel_after', 'fuel_lost',
            'material', 'tariff_type', 'quantity', 'tariff', 'weight', 'partial', 'salary_tariff', 'salary',
            'description', 'salary_cost_id'), 'registry/update.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }

    public static function ajax_delete_registry() {
        $code = new Ajax('ajax_delete_registry', array('id'), 'registry/delete.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }
}