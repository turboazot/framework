<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 27.02.2016
 * Time: 1:20
 */
require_once '../../application/app.php';
App::init(true);
App::requireModel('Vehicle');

if($_POST) {
    $vehicle = array();
    $vehicle['registration_number'] = $_POST['registration_number'];
    $vehicle['sp'] = $_POST['sp'];
    $vehicle['year'] = $_POST['year'];
    $vehicle['state'] = $_POST['state'];
    $vehicle['driver'] = $_POST['driver'];
    $vehicle['owner'] = $_POST['owner'];

    Vehicle::add($vehicle);
    echo 'Успешно добавлено!';
}