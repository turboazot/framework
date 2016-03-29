<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 27.02.2016
 * Time: 1:19
 */
require_once '../../application/app.php';
App::init(true);
App::requireModel('Registry');

if($_POST) {
    $id = $_POST['id'];
    Registry::delete($id);
    echo 'Успешно удалено!';
}