<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 27.02.2016
 * Time: 1:08
 */
require_once '../../application/app.php';
App::init(true);
App::requireModel('FutureCost');

if($_POST) {
    $future_cost = array();
    $future_cost['amount'] = $_POST['amount'];
    $future_cost['description'] = $_POST['description'];
    $future_cost['parent_id'] = $_POST['parent_id'];
    $future_cost['parent_type'] = $_POST['parent_type'];
    $future_cost['sp'] = $_POST['sp'];
    $future_cost['partner'] = $_POST['partner'];
    $future_cost['date'] = $_POST['date'];
    FutureCost::add($future_cost);
    echo 'Успешно добавлено!';
}