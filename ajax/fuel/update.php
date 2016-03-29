<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 27.02.2016
 * Time: 0:59
 */
require_once '../../application/app.php';
App::init(true);
App::requireModel('Fuel');

if($_POST) {
    $fuel = array();
    $fuel['id'] = $_POST['id'];
    $fuel['amount'] = $_POST['amount'];
    $fuel['tariff'] = $_POST['tariff'];
    $fuel['currency'] = $_POST['currency'];
    $fuel['vehicle'] = $_POST['vehicle'];
    $fuel['date'] = Date::toHyphenFormat($_POST['date']);
    $fuel['type'] = $_POST['type'];
    Fuel::update($fuel);
    echo 'Успешно обновлено!';
}