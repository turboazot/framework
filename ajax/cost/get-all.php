<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 26.02.2016
 * Time: 23:00
 */
require_once '../../application/app.php';
App::init(true);
App::requireModel('Cost');

if($_POST) {
    $limit = $_POST['limit'];
    $start_from = $_POST['start_from'];
    $parent_id = ($_POST['parent_id']) ? $_POST['parent_id'] : null;
    $parent_type = ($_POST['parent_type']) ? $_POST['parent_type'] : null;
    $month = $_POST['month'];
    $year = $_POST['year'];
    $partner = $_POST['partner'];

    $costs = Cost::get_all($limit, $start_from, $parent_id, $parent_type, $month, $year, $partner);
    if(count($costs)) {
        foreach ($costs as $cost) {
            $show_btn =
                (count($cost['children'])) ?
                    '<a class="panel-btn show-children-btn"><i class="fa fa-fw fa-arrow-down"></i></a>'
                    : '';
            echo '<tr id="' . $cost['id'] . '" class="cell">
                    <td class="date">' . $cost['date'] . '</td>
                    <td class="amount">' . $cost['amount'] . '</td>
                    <td class="currency">' . $cost['currency'] . '</td>
                    <td class="description">' . $cost['description'] . '</td>
                    <td>
                        ' . $cost['parent_type_word'] . '
                    </td>
                    <td>
                        ' . $show_btn . '
                        <a class="panel-btn update-mdl-btn"><i class="fa fa-fw fa-pencil"></i></a>
                        <a class="panel-btn child-mdl-btn"><i class="fa fa-fw fa-plus"></i></a>
                        <a class="panel-btn delete-btn"><i class="fa fa-fw fa-close"></i></a>
                    </td>
                    <input class="parent-id" value="' . $cost['parent_id'] . '" type="hidden"/>
                    <input class="parent-type" value="' . $cost['parent_type'] . '" type="hidden"/>
                    <input class="sp" value="' . $cost['sp'] . '" type="hidden"/>
                </tr>';
            if(count($cost['children'])) {
                echo '<tr class="children" style="display:none;">
                        <td colspan="6">
                            <table class="table table-bordered table-striped" style="margin-bottom: 0">';
                foreach ($cost['children'] as $child) {
                    echo '
                                <tr id="' . $child['id'] . '" class="cell">
                                    <td class="date" style="width: 80px">' . $child['date'] . '</td>
                                    <td class="amount" style="width: 80px">' . $child['amount'] . '</td>
                                    <td class="description" colspan="2">' . $child['description'] . '</td>
                                    <td style="width: 100px">
                                        <a class="panel-btn update-child-btn"><i class="fa fa-fw fa-pencil"></i></a>
                                        <a class="panel-btn delete-btn"><i class="fa fa-fw fa-close"></i></a>
                                    </td>
                                    <input class="parent-id" value="' . $child['parent_id'] . '" type="hidden"/>
                                </tr>
                        ';
                }
                echo '
                                <tr class="balance">
                                    <td colspan="6">Остаток: ' . $cost['balance'] . '</td>
                                </tr>
                            </table>
                        </td>
                    </tr>';
            }
        }
    }
}