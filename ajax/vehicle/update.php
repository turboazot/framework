<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 27.02.2016
 * Time: 1:22
 */
require_once '../../application/app.php';
App::init(true);
App::requireModel('Vehicle');

if($_POST) {
    $vehicle = array();
    $vehicle['id'] = $_POST['id'];
    $vehicle['registration_number'] = $_POST['registration_number'];
    $vehicle['sp'] = $_POST['sp'];
    $vehicle['year'] = $_POST['year'];
    $vehicle['state'] = $_POST['state'];
    $vehicle['driver'] = $_POST['driver'];
    $vehicle['owner'] = $_POST['owner'];
    Vehicle::update($vehicle);
    echo 'Успешно обновлено!';
}