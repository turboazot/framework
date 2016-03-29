<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 08.01.2016
 * Time: 3:24
 */

class AdminPanelController {
    function __construct()
    {

    }

    public function costAction() {
        Post::save();
        App::requireModel('Worker');
        App::requireModel('Vehicle');
        App::requireModel('Cost');
        App::requireModel('Partner');

        Post::toSession('filter', 'filter', 'filter');

        $view = new Smarty('Расходы');

        $partners = Partner::get_all();

        $filter = (Post::getVar('filter')) ? Post::getVar('filter') : array('partner' => 1, 'month' => date('m'),
            'year' => date('y'));

        $vehicles = Vehicle::get_all(10);

        $cost_set = Cost::get_default_set(20, $filter);
        Ajax::addScript(Cost::ajax_add_cost());
        Ajax::addScript(Cost::ajax_get_costs());
        Ajax::addScript(Cost::ajax_get_cost_total());
        Ajax::addScript(Cost::ajax_update_cost());
        Ajax::addScript(Cost::ajax_delete_cost());

        $workers = Worker::get_all(20);

        $view->assign('partners', $partners);
        $view->assign('filter', $filter);
        $view->assign('vehicles', $vehicles);
        $view->assign('cost_set', $cost_set);
        $view->assign('workers', $workers);
        $view->assign('ajax', Ajax::getTotalScript());
        $view->display('prt_cost.tpl');
    }

    public function fuelAction() {
        Post::save();
        App::requireModel('Worker');
        App::requireModel('Vehicle');
        App::requireModel('FuelType');
        App::requireModel('Fuel');
        App::requireModel('Partner');

        Post::toSession('filter', 'filter', 'filter');

        $view = new Smarty('Топливо');

        $partners = Partner::get_all();
        $filter = (Post::getVar('filter')) ? Post::getVar('filter') : array('partner' => 1, 'month' => date('m'));

        $vehicles = Vehicle::get_all(10);

        $fuel_set = Fuel::get_default_set(10, $filter);

        Ajax::addScript(Fuel::ajax_add_fuel());
        Ajax::addScript(Fuel::ajax_update_fuel());
        Ajax::addScript(Fuel::ajax_get_fuel());
        Ajax::addScript(Fuel::ajax_delete_fuel());

        $fuel_types = FuelType::get_all();
        Ajax::addScript(FuelType::ajax_add_fuel_type());
        Ajax::addScript(FuelType::ajax_update_fuel_type());
        Ajax::addScript(FuelType::ajax_delete_fuel_type());

        $view->assign('partners', $partners);
        $view->assign('filter', $filter);
        $view->assign('fuel_set', $fuel_set);
        $view->assign('fuel_types', $fuel_types);
        $view->assign('vehicles', $vehicles);
        $view->assign('ajax', Ajax::getTotalScript());

        $view->display('prt_fuel.tpl');
    }

    public function registryAction() {
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
        //$view->assign('cost_set', $cost_set);
        //$view->assign('workers', $workers);
        $view->assign('ajax', Ajax::getTotalScript());
        $view->display('prt_registry.tpl');
    }

    public function vehicleAction() {
        Post::save();
        App::requireModel('Worker');
        App::requireModel('Vehicle');
        App::requireModel('Partner');

        Post::toSession('filter', 'filter', 'filter');

        $view = new Smarty('Топливо');

        $partners = Partner::get_all();
        $filter = (Post::getVar('filter')) ? Post::getVar('filter') : array('partner' => 1, 'month' => date('m'));

        $vehicles = Vehicle::get_all(10);

        $workers = Worker::get_all(20);

        Ajax::addScript(Vehicle::ajax_add_vehicle());
        Ajax::addScript(Vehicle::ajax_update_vehicle());
        Ajax::addScript(Vehicle::ajax_delete_vehicle());

        $view->assign('partners', $partners);
        $view->assign('filter', $filter);
        $view->assign('vehicles', $vehicles);
        $view->assign('workers', $workers);

        $view->assign('ajax', Ajax::getTotalScript());

        $view->display('prt_vehicle.tpl');
    }

    public function workerAction() {
        Post::save();
        App::requireModel('Worker');
        App::requireModel('Vehicle');
        App::requireModel('Partner');

        Post::toSession('filter', 'filter', 'filter');

        $view = new Smarty('Топливо');

        $partners = Partner::get_all();
        $filter = (Post::getVar('filter')) ? Post::getVar('filter') : array('partner' => 1, 'month' => date('m'));

        $workers = Worker::get_all(20);
        Ajax::addScript(Worker::ajax_add_worker());
        Ajax::addScript(Worker::ajax_update_worker());
        Ajax::addScript(Worker::ajax_delete_worker());

        $view->assign('partners', $partners);
        $view->assign('filter', $filter);
        $view->assign('workers', $workers);
        $view->assign('ajax', Ajax::getTotalScript());

        $view->display('prt_worker.tpl');
    }
}