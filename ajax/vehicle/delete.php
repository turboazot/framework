<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 27.02.2016
 * Time: 1:23
 */
require_once '../../application/app.php';
App::init(true);
App::requireModel('Vehicle');

if($_POST) {
    $id = $_POST['id'];
    Vehicle::delete($id);
    echo 'Успешно удалено!';
}