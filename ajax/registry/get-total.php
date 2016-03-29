<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 06.03.2016
 * Time: 21:47
 */
require_once '../../application/app.php';
App::init(true);
App::requireModel('Registry');

if($_POST) {
    $vehicle = $_POST['vehicle'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $partner = $_POST['partner'];

    echo 'Валовый - ' . Registry::get_total_dirty($partner, $month, $year, $vehicle) . '; Чистый - ' . Registry::get_total_clear($partner, $month, $year, $vehicle);
}