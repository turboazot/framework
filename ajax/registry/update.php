<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 27.02.2016
 * Time: 1:13
 */
require_once '../../application/app.php';
App::init(true);
App::requireModel('Registry');

if($_POST) {
    $row = array();
    $row['id'] = $_POST['id'];
    $row['date'] = Date::toHyphenFormat($_POST['date']);
    $row['vehicle'] = $_POST['vehicle'];
    $row['client'] = $_POST['client'];
    $row['sp_before'] = $_POST['sp_before'];
    $row['sp_after'] = $_POST['sp_after'];
    $row['currency'] = $_POST['currency'];
    $row['fuel_type'] = $_POST['fuel_type'];
    $row['fuel_tariff'] = $_POST['fuel_tariff'];
    $row['fuel_get'] = (isset($_POST['fuel_get'])) ? $_POST['fuel_get'] : 0;
    $row['fuel_before'] = $_POST['fuel_before'];
    $row['fuel_after'] = $_POST['fuel_after'];
    $row['fuel_lost'] = $_POST['fuel_lost'];
    $row['material'] = $_POST['material'];
    $row['tariff_type'] = $_POST['tariff_type'];
    $row['quantity'] = $_POST['quantity'];
    $row['tariff'] = $_POST['tariff'];
    $row['weight'] = $_POST['weight'];
    $row['partial'] = (isset($_POST['partial'])) ? $_POST['partial'] : 0;
    $row['salary_tariff'] = $_POST['salary_tariff'];
    $row['salary'] = $_POST['salary'];
    $row['description'] = $_POST['description'];
    $row['salary_cost_id'] = $_POST['salary_cost_id'];

    Registry::update($row);
    echo 'Успешно обновлено!';
}