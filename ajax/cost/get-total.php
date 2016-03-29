<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 26.02.2016
 * Time: 23:00
 */
require_once '../../application/app.php';
App::init(true);
App::requireModel('Cost');

if($_POST) {
    $parent_id = ($_POST['parent_id']) ? $_POST['parent_id'] : null;
    $parent_type = ($_POST['parent_type']) ? $_POST['parent_type'] : null;
    $month = $_POST['month'];
    $year = $_POST['year'];
    $partner = $_POST['partner'];

    echo Cost::get_total($parent_id, $parent_type, $month, $year, $partner);
}