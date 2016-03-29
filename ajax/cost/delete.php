<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 26.02.2016
 * Time: 23:53
 */
require_once '../../application/app.php';
App::init(true);
App::requireModel('Cost');

if($_POST) {
    $id = $_POST['id'];
    Cost::delete($id);
    echo 'Успешно удалено!';
}