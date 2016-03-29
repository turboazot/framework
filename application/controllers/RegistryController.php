<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 26.03.2016
 * Time: 22:46
 */

class RegistryController {
    public function getAllAction() {
        Post::save();
        App::requireModel('Worker');
        App::requireModel('Vehicle');
        App::requireModel('FuelType');
        App::requireModel('Partner');
        App::requireModel('Registry');

        Post::toSession('filter', 'filter', 'filter');

        $view = new Smarty('Реестр');

        $partners = Partner::get_all();

        $filter = (Post::getVar('filter')) ? Post::getVar('filter') : array('partner' => 1, 'month' => date('m'));

        $vehicles = Vehicle::get_all(10);
        $fuel_types = FuelType::get_all();

        $registry_set = Registry::get_default_set(20, $filter);

        Ajax::addScript(Registry::ajax_add_registry());
        Ajax::addScript(Registry::ajax_update_registry());
        Ajax::addScript(Registry::ajax_get_registry());
        Ajax::addScript(Registry::ajax_delete_registry());
        Ajax::addScript(Registry::ajax_get_registry_total());

        $view->assign('partners', $partners);
        $view->assign('filter', $filter);
        $view->assign('vehicles', $vehicles);
        $view->assign('fuel_types', $fuel_types);
        $view->assign('registry_set', $registry_set);
        $view->assign('ajax', Ajax::getTotalScript());
        $view->display('registry/get-all.tpl');
    }

    public function addAction() {
        Post::save();
        App::requireModel('Worker');
        App::requireModel('Vehicle');
        App::requireModel('FuelType');
        App::requireModel('Partner');
        App::requireModel('Registry');

        Post::toSession('filter', 'filter', 'filter');

        $view = new Smarty("Добавить строку");

        $partners = Partner::get_all();

        $filter = (Post::getVar('filter')) ? Post::getVar('filter') : array('partner' => 1, 'month' => date('m'));

        $view->assign('partners', $partners);
        $view->assign('filter', $filter);
        $view->display('registry/add.tpl');
    }

}