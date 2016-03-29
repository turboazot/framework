<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 27.02.2016
 * Time: 1:12
 */
require_once '../../application/app.php';
App::init(true);
App::requireModel('FutureCost');

if($_POST) {
    $id = $_POST['id'];
    FutureCost::delete($id);
    echo 'Успешно удалено!';
}