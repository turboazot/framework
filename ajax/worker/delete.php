<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 27.02.2016
 * Time: 1:24
 */
require_once '../../application/app.php';
App::init(true);
App::requireModel('Worker');

if($_POST) {
    $id = $_POST['id'];
    Worker::delete($id);
    echo 'Успешно удалено!';
}