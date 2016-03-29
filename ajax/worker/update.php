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
    $worker = array();
    $worker['id'] = $_POST['id'];
    $worker['first_name'] = $_POST['first_name'];
    $worker['last_name'] = $_POST['last_name'];
    $worker['fath_name'] = $_POST['fath_name'];
    $worker['type'] = $_POST['type'];
    $worker['phone'] = $_POST['phone'];
    $worker['owner'] = $_POST['owner'];

    Worker::update($worker);
    echo 'Успешно обновлено!';
}