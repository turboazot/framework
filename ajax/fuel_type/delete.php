<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 05.03.2016
 * Time: 17:55
 */
require_once '../../application/app.php';
App::init(true);
App::requireModel('FuelType');

if($_POST) {
    $id = $_POST['id'];
    FuelType::delete($id);
    echo 'Успешно удалено!';
}