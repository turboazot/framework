<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 26.02.2016
 * Time: 23:34
 */
require_once '../../application/app.php';
App::init(true);
App::requireModel('Cost');
App::requireModel('Vehicle');

if($_POST) {
    $cost = array();
    $cost['amount'] = $_POST['amount'];
    $cost['currency'] = $_POST['currency'];
    $cost['description'] = $_POST['description'];
    $cost['parent_id'] = $_POST['parent_id'];
    $cost['parent_type'] = $_POST['parent_type'];
    $cost['sp'] = $_POST['sp'];
    $cost['date'] = Date::toHyphenFormat($_POST['date']);

    Cost::add($cost);
    echo 'Успешно добавлено!';
}