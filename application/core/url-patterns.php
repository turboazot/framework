<?php

#Инициализация корректных шаблонов URL
Route::$validUrlPatterns =
array(

    #Авторизация
    array(
        'url_pattern' => 'login',
        'controller'  => 'Authorization',
        'action'      => 'login'
    ),

    array(
        'url_pattern' => 'check',
        'controller'  => 'Authorization',
        'action'      => 'check'
    ),

    #Регистрация
    array(
        'url_pattern' => 'registration',
        'controller'  => 'Authorization',
        'action'      => 'registration'
    ),

    array(
        'url_pattern' => 'panel',
        'controller'  => 'AdminPanel',
        'action'      => 'cost'
    ),

    array(
        'url_pattern' => 'fuel',
        'controller'  => 'AdminPanel',
        'action'      => 'fuel'
    ),

    array(
        'url_pattern' => 'registry',
        'controller'  => 'Registry',
        'action'      => 'getAll'
    ),



    array(
        'url_pattern' => 'registry/{id}',
        'controller'  => 'Registry',
        'action'      => 'getOne'
    ),

    array(
        'url_pattern' => 'registry/add',
        'controller'  => 'Registry',
        'action'      => 'add'
    ),

    array(
        'url_pattern' => 'registry/update',
        'controller'  => 'Registry',
        'action'      => 'update'
    ),

    array(
        'url_pattern' => 'vehicle',
        'controller'  => 'AdminPanel',
        'action'      => 'vehicle'
    ),

    array(
        'url_pattern' => 'worker',
        'controller'  => 'AdminPanel',
        'action'      => 'worker'
    ),

    array(
        'url_pattern' => 'header',
        'controller'  => 'AdminPanel',
        'action'      => 'header'
    ),

    array(
        'url_pattern' => 'about',
        'controller'  => 'AdminPanel',
        'action'      => 'about'
    ),

    array(
        'url_pattern' => 'contact',
        'controller'  => 'AdminPanel',
        'action'      => 'contact'
    )
);
