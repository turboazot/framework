<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 26.02.2016
 * Time: 21:59
 */

class Cost {
    public static function add($cost) {
        try {
            App::requireModel('Vehicle');
            App::requireModel('Worker');

            if($cost['parent_type'] == 'vehicle') {
                $partner = Vehicle::get_owner($cost['parent_id']);
            } elseif($cost['parent_type'] == "worker") {
                $partner = Worker::get_owner($cost['parent_id']);
            } elseif($cost['parent_type'] == 'fuel') {
                $vehicle_owner = Vehicle::get_owner($cost['parent_id']);
                $partner = ($vehicle_owner) ? $vehicle_owner : Auth::getCurrentUserId();
            } else {
                $partner = Auth::getCurrentUserId();
            }


            Database::Execute("INSERT INTO costs
                               (amount, currency, description, parent_id, parent_type, sp, partner, `date`)
                               VALUES (:amount, :currency, :description, :parent_id, :parent_type, :sp, :partner, :date)",
                array(':amount' => $cost['amount'], ':currency' => $cost['currency'], ':description' => $cost['description'],
                    ':parent_id' => $cost['parent_id'], ':parent_type' => $cost['parent_type'], ':sp' => $cost['sp'],
                    ':partner' => $partner, ':date' => $cost['date']));
            /*if($cost['parent_type'] != 'cost') {
                Config::increment('balance', -$cost['amount']);
            }*/
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function get_one($id) {
        try {
            return Database::GetRow("SELECT * FROM costs WHERE id = :id",
                array(':id' => $id));
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function get_all($limit, $start_from = null,
                                   $parent_id = null, $parent_type = null, $month = null, $year = null, $partner = null) {
        try {
            App::requireModel('Vehicle');
            App::requireModel('Worker');
            $total_amount = 0;
            $sql_month = ($month) ? $month : date('m');
            $sql_year = ($year) ? $year : date('y');
            $sql_partner = ($partner) ? $partner : 1;
            $sql_filter_part = (isset($parent_id) && isset($parent_type)) ? "AND parent_id = $parent_id AND parent_type = '$parent_type'" : '';
            $sql_limit_part = (isset($start_from)) ? 'LIMIT ' . $start_from . ', ' . $limit : 'LIMIT ' . $limit;
            $costs = Database::GetAll("SELECT *
                                       FROM costs
                                       WHERE parent_type != 'cost'
                                       $sql_filter_part
                                       AND month(`date`) = $sql_month AND year(`date`) = $sql_year
                                       AND partner = $sql_partner
                                       ORDER BY `date` DESC, id DESC $sql_limit_part");

            /*echo "SELECT *
                                       FROM costs
                                       WHERE parent_type != 'cost'
                                       $sql_filter_part
                                       AND month(`date`) = $sql_month AND partner = $sql_partner
                                       ORDER BY `date` DESC $sql_limit_part";*/
            if(count($costs)) {
                foreach ($costs as &$cost) {
                    $total_amount += $cost['amount'];
                    $cost['date'] = Date::toDotFormat($cost['date']);
                    if($cost['parent_type'] == 'vehicle') {
                        $vehicle = Vehicle::get_one($cost['parent_id']);
                        $cost['description'] = "Машина: " . $vehicle['registration_number'] . "<br>Пробег: " .
                            $cost['sp'] . "<br>Описание: " . $cost['description'];
                    } else if($cost['parent_type'] == 'worker') {
                        $worker = Worker::get_one($cost['parent_id']);
                        $cost['description'] = "Работник: " . $worker['last_name'] .
                            "<br>Описание: " . $cost['description'];
                    } else if($cost['parent_type'] == 'fuel') {
                        if($cost['parent_id']) {
                            $vehicle = Vehicle::get_one($cost['parent_id']);
                            $cost['description'] = "Машина: " . $vehicle['registration_number'] .
                                "<br>Описание: " . $cost['description'];
                        }
                    }
                    $cost['parent_type_word'] = self::get_type($cost['parent_type']);
                    $child_cost_total = 0;

                    $child_costs = Database::GetAll("SELECT *
                                                 FROM costs
                                                 WHERE parent_id = :parent_id AND parent_type = 'cost'
                                                 ORDER BY `date` DESC",
                        array(':parent_id' => $cost['id']));
                    if(count($child_costs)) {
                        foreach ($child_costs as &$child_cost) {
                            $child_cost['date'] = Date::toDotFormat($child_cost['date']);
                            $child_cost['parent_type_word'] = self::get_type($cost['parent_type']);
                            $child_cost_total += $child_cost['amount'];
                        }

                        $cost['children'] = $child_costs;
                        $cost['balance'] = $cost['amount'] - $child_cost_total;
                    }
                }
            }

            return $costs;

        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function update($cost) {
        try {
            App::requireModel('Worker');
            App::requireModel('Vehicle');
            /*$amount_old = Database::GetOne("SELECT amount FROM costs WHERE id = :id",
                array(':id' => $cost['id']));*/

            if($cost['parent_type'] == 'vehicle') {
                $partner = Vehicle::get_owner($cost['parent_id']);
            } else if($cost['parent_type'] == 'worker') {
                $partner = Worker::get_owner($cost['parent_id']);
            } else if($cost['parent_type'] == 'fuel') {
                $partner = ($cost['parent_id']) ? Vehicle::get_owner($cost['parent_id']) : Auth::getCurrentUserId();
            } else {
                $partner = Auth::getCurrentUserId();
            }

            /*if($cost['parent_type'] != 'cost') {
                Config::increment('balance', $amount_old);
            }*/

            Database::Execute("UPDATE costs
                               SET amount = :amount, currency = :currency, description = :description,
                               parent_id = :parent_id, parent_type = :parent_type, sp = :sp, partner = :partner,
                               `date` = :date
                               WHERE id = :id",
                array(':amount' => $cost['amount'], ':currency' => $cost['currency'], ':description' => $cost['description'],
                    ':parent_id' => $cost['parent_id'], ':parent_type' => $cost['parent_type'],
                    ':sp' => $cost['sp'], ':partner' => $partner, ':date' => $cost['date'],
                    ':id' => $cost['id']));
            /*if($cost['parent_type'] != 'cost') {
                Config::increment('balance', -$cost['amount']);
            }*/
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function delete($id) {
        try {
            $cost = Database::GetRow("SELECT amount, parent_type FROM costs WHERE id = :id",
                array(':id' => $id));
            if($id) {
                Database::Execute("DELETE FROM costs WHERE id = :id OR (parent_id = :id AND parent_type = 'cost')",
                    array(':id' => $id));
            }

            /*if($cost['parent_type'] != 'cost') {
                Config::increment('balance', $cost['amount']);
            }*/
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function get_type($label) {
        switch ($label) {
            case "worker":
                return "зарплата";
                break;
            case "vehicle":
                return "ремонт";
                break;
            case "fuel":
                return "топливо";
                break;
            case "box":
                return "бокс";
                break;
            case "dues":
                return "налоги";
                break;
            case "other":
                return "другие";
                break;
        }
    }

    public static function get_total($parent_id = null, $parent_type = null, $month = null, $year = null, $partner = null, $currency = 'грн') {
        $sql_month = ($month) ? $month : date('m');
        $sql_year = ($year) ? $year : date('y');
        $sql_partner = ($partner) ? $partner : 1;
        $sql_filter_part = (isset($parent_id) && isset($parent_type)) ? "AND parent_id = $parent_id AND parent_type = '$parent_type'" : '';
        $total = 0;
        $amounts = Database::GetAll("SELECT amount
                          FROM costs
                          WHERE parent_type != 'cost' AND currency = '$currency'
                          $sql_filter_part
                          AND month(`date`) = $sql_month AND year(`date`) = $sql_year
                          AND partner = $sql_partner");

        foreach ($amounts as $amount) {
            $total += $amount['amount'];
        }

        return $total;
    }

    public static function get_default_set($limit, $filter) {
        $set['limit'] = $limit;
        $set['costs'] = self::get_all($limit, null, null, null, $filter['month'], $filter['year'], $filter['partner']);
        $set['total']['grn'] = self::get_total(null, null, $filter['month'], $filter['year'], $filter['partner']);
        $set['total']['rub'] = self::get_total(null, null, $filter['month'], $filter['year'], $filter['partner'], 'руб');
        return $set;
    }

    public static function ajax_add_cost() {
        $code = new Ajax('ajax_add_cost', array('amount', 'currency', 'description', 'parent_id', 'parent_type',
            'sp', 'date'), 'cost/add.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }

    public static function ajax_get_costs() {
        $code = new Ajax('ajax_get_costs', array('limit', 'start_from', 'parent_id', 'parent_type', 'month', 'year', 'partner'),
            'cost/get-all.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }

    public static function ajax_get_cost_total() {
        $code = new Ajax('ajax_get_cost_total', array('parent_id', 'parent_type', 'month', 'year', 'partner'), 'cost/get-total.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }

    public static function ajax_update_cost() {
        $code = new Ajax('ajax_update_cost', array('id', 'amount', 'currency', 'description', 'parent_id',
            'parent_type', 'sp', 'date'), 'cost/update.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }

    public static function ajax_delete_cost() {
        $code = new Ajax('ajax_delete_cost', array('id'), 'cost/delete.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }

}