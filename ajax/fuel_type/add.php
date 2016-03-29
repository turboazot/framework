<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 05.03.2016
 * Time: 17:52
 */
require_once '../../application/app.php';
App::init(true);
App::requireModel('FuelType');

if($_POST) {
    $fuel_type = array();
    $fuel_type['name'] = $_POST['name'];
    $fuel_type['currency'] = $_POST['currency'];
    $fuel_type['tariff'] = $_POST['tariff'];
    FuelType::add($fuel_type);
    echo 'Успешно добавлено!';
}