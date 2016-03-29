<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 27.02.2016
 * Time: 1:06
 */
require_once '../../application/app.php';
App::init(true);
App::requireModel('Fuel');

if($_POST) {
    $id = $_POST['id'];
    Fuel::delete($id);
    echo 'Успешно удалено!';
}