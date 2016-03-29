<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 05.03.2016
 * Time: 21:03
 */
require_once '../../application/app.php';
App::init(true);
App::requireModel('Fuel');

if($_POST) {
    $limit = $_POST['limit'];
    $start_from = $_POST['start_from'];
    $vehicle = ($_POST['vehicle']) ? $_POST['vehicle'] : null;
    $month = $_POST['month'];
    $year = $_POST['year'];

    $fuels = Fuel::get_all($limit, $start_from, $vehicle, $month, $year);

    foreach ($fuels as $fuel) {
        $amount =
            ($fuel['vehicle']) ?
                '- <span>' . $fuel['amount'] . '</span>'
                : '+ <span>' . $fuel['amount'] . '</span>';

        echo '<tr id="' . $fuel['id'] . '" class="cell">
                    <td class="date">' . $fuel['date'] . '</td>
                    <td class="amount">' . $amount . '</td>
                    <td>' . $fuel['type_word'] . '</td>
                    <td>' . $fuel['vehicle_number'] . '</td>
                    <td>
                        <a class="panel-btn update-mdl-btn"><i class="fa fa-fw fa-pencil"></i></a>
                        <a class="panel-btn delete-btn"><i class="fa fa-fw fa-close"></i></a>
                    </td>
                    <input value="' . $fuel['type'] . '" class="type" type="hidden"/>
                    <input value="' . $fuel['vehicle'] . '" class="vehicle" type="hidden"/>
                </tr>';
    }
}