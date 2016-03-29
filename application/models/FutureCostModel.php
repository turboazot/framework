<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 26.02.2016
 * Time: 22:57
 */

class FutureCost {
    public static function add($future_cost) {
        try {
            Database::Execute("INSERT INTO future_costs
                               (amount, description, parent_id, parent_type, sp, partner, `date`)
                               VALUES (:amount, :description, :parent_id, :parent_type, :sp, :partner, :date)",
                array(':amount' => $future_cost['amount'], ':description' => $future_cost['description'],
                    ':parent_id' => $future_cost['parent_id'], ':parent_type' => $future_cost['parent_type'], ':sp' => $future_cost['sp'],
                    ':partner' => $future_cost['partner'], ':date' => $future_cost['date']));
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function get_one($id) {
        try {
            return Database::GetRow("SELECT * FROM future_costs WHERE id = :id",
                array(':id' => $id));
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function get_all($limit, $start_from = null) {
        try {
            $sql_limit_part = (isset($start_from)) ? 'LIMIT ' . $start_from . ', ' . $limit : 'LIMIT ' . $limit;
            return Database::GetAll("SELECT * FROM future_costs ORDER BY `date` DESC $sql_limit_part");
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function update($future_cost) {
        try {
            Database::Execute("UPDATE future_costs
                               SET amount = :amount, description = :description, parent_id = :parent_id,
                               parent_type = :parent_type, sp = :sp, partner = :partner, `date` = :date
                               WHERE id = :id",
                array(':amount' => $future_cost['amount'], ':description' => $future_cost['description'],
                    ':parent_id' => $future_cost['parent_id'], ':parent_type' => $future_cost['parent_type'],
                    ':sp' => $future_cost['sp'], ':partner' => $future_cost['partner'], ':date' => $future_cost['date'],
                    ':id' => $future_cost['id']));
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function delete($id) {
        try {
            Database::Execute("DELETE FROM future_costs WHERE id = :id",
                array(':id' => $id));
        } catch (PDOException $e) {
            echo $e->getCode();
        }
    }

    public static function ajax_add_future_cost() {
        $code = new Ajax('ajax_add_future_cost', array('amount', 'description', 'parent_id', 'parent_type',
            'sp', 'partner', 'date'), 'future_cost/add.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }

    public static function ajax_get_future_costs() {
        $code = new Ajax('ajax_get_future_costs', array('limit', 'start_from'), 'future_cost/get-all.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }

    public static function ajax_update_future_cost() {
        $code = new Ajax('ajax_update_future_cost', array('id', 'amount', 'description', 'parent_id', 'parent_type',
            'sp', 'partner', 'date'), 'future_cost/update.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }

    public static function ajax_delete_future_cost() {
        $code = new Ajax('ajax_delete_future_cost', array('id'), 'future_cost/delete.php');
        $code = $code->generateAjaxQuery();
        return $code;
    }
}