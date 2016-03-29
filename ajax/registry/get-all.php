<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 06.03.2016
 * Time: 20:41
 */
require_once '../../application/app.php';
App::init(true);
App::requireModel('Registry');

if($_POST) {
    $limit = $_POST['limit'];
    $start_from = $_POST['start_from'];
    $vehicle = ($_POST['vehicle']) ? $_POST['vehicle'] : null;
    $month = $_POST['month'];
    $year = $_POST['year'];
    $partner = $_POST['partner'];

    $rows = Registry::get_all($limit, $start_from, $vehicle, $month, $year, $partner);

    foreach ($rows as $row) {
        $partial_part = ($row['partial']) ? '+ ' . $row['partial'] . ' ' . $row['currency'] : '';
        echo '
            <tr id="' . $row['id'] . '" class="cell" tabindex="0" role="button" data-content="
                                                        <div class=\'pop-container\'>
                                                            <div class=\'pop-row\'>
                                                                <div class=\'pop-field\'>Дата:</div>
                                                                <div class=\'pop-value\'>' . $row['date'] . '</div>
                                                            </div>
                                                            <div class=\'pop-row\'>
                                                                <div class=\'pop-field\'>Авто:</div>
                                                                <div class=\'pop-value\'>' . $row['vehicle_number'] . '</div>
                                                            </div>
                                                            <div class=\'pop-row\'>
                                                                <div class=\'pop-field\'>Водитель:</div>
                                                                <div class=\'pop-value\'>' . $row['driver_name'] . '</div>
                                                            </div>
                                                            <div class=\'pop-row\'>
                                                                <div class=\'pop-field\'>Клиент:</div>
                                                                <div class=\'pop-value\'>' . $row['client'] . '</div>
                                                            </div>
                                                            <div class=\'pop-row\'>
                                                                <div class=\'pop-field\'>Спидометр (до):</div>
                                                                <div class=\'pop-value\'>' . $row['sp_before'] . ' км</div>
                                                            </div>
                                                            <div class=\'pop-row\'>
                                                                <div class=\'pop-field\'>Спидометр (после):</div>
                                                                <div class=\'pop-value\'>' . $row['sp_after'] . ' км</div>
                                                            </div>
                                                            <div class=\'pop-row\'>
                                                                <div class=\'pop-field\'>Километраж:</div>
                                                                <div class=\'pop-value\'>' . $row['km'] . ' км</div>
                                                            </div>
                                                            <div class=\'pop-row\'>
                                                                <div class=\'pop-field\'>Д/Т заправка:</div>
                                                                <div class=\'pop-value\'>' . $row['fuel_get'] . ' л.</div>
                                                            </div>
                                                            <div class=\'pop-row\'>
                                                                <div class=\'pop-field\'>Д/Т до:</div>
                                                                <div class=\'pop-value\'>' . $row['fuel_before'] . ' л.</div>
                                                            </div>
                                                            <div class=\'pop-row\'>
                                                                <div class=\'pop-field\'>Д/Т после:</div>
                                                                <div class=\'pop-value\'>' . $row['fuel_after'] . ' л.</div>
                                                            </div>
                                                            <div class=\'pop-row\'>
                                                                <div class=\'pop-field\'>Материал:</div>
                                                                <div class=\'pop-value\'>' . $row['material'] . '</div>
                                                            </div>
                                                            <div class=\'pop-row\'>
                                                                <div class=\'pop-field\'>Тип:</div>
                                                                <div class=\'pop-value\'>' . $row['tariff_type'] . '</div>
                                                            </div>
                                                            <div class=\'pop-row\'>
                                                                <div class=\'pop-field\'>Количество:</div>
                                                                <div class=\'pop-value\'>' . $row['quantity'] . '</div>
                                                            </div>
                                                            <div class=\'pop-row\'>
                                                                <div class=\'pop-field\'>Тариф:</div>
                                                                <div class=\'pop-value\'>' . $row['tariff'] . ' ' . $row['currency'] . '</div>
                                                            </div>
                                                            <div class=\'pop-row\'>
                                                                <div class=\'pop-field\'>Дополнительная ходка:</div>
                                                                <div class=\'pop-value\'>' . $row['partial'] . '</div>
                                                            </div>
                                                            <div class=\'pop-row\'>
                                                                <div class=\'pop-field\'>Описание:</div>
                                                                <div class=\'pop-value\'>' . $row['description'] . '</div>
                                                            </div>
                                                            <div class=\'pop-row\'>
                                                                <div class=\'pop-field\'>Валовый доход:</div>
                                                                <div class=\'pop-value\'>' . $row['dirty_gain'] . ' ' . $row['currency'] . '</div>
                                                            </div>
                                                            <div class=\'pop-row\'>
                                                                <div class=\'pop-field\'>Зарплата:</div>
                                                                <div class=\'pop-value\'>' . $row['salary'] . '</div>
                                                            </div>
                                                            <div class=\'pop-row\'>
                                                                <div class=\'pop-field\'>Чистый доход:</div>
                                                                <div class=\'pop-value\'>' . $row['clear_gain'] . ' ' . $row['currency'] . '</div>
                                                            </div>
                                                        </div>
                        ">
                                <td class="date">' . $row['date'] . '</td>
                                <td class="vehicle_number">' . $row['vehicle_number'] . '</td>
                                <td class="driver_name">' . $row['driver_name'] . '</td>
                                <td class="client">' . $row['client'] . '</td>
                                <td class="short_description">
                                    ' . $row['quantity'] . ' ' . $row['tariff_type'] . ' по ' . $row['tariff'] . ' ' . $row['currency'] . ' ' . $partial_part . '
                                </td>
                                <td class="dirty_gain">
                                    <span>' . $row['dirty_gain'] . ' ' . $row['currency'] . '</span>
                                </td>
                                <td class="fuel_lost_liter">' . $row['fuel_lost'] . ' л.</td>
                                <td class="salary_total">
                                    <span>' . $row['salary'] . ' ' . $row['currency'] . '</span>
                                </td>
                                <td>' . $row['clear_gain'] . ' ' . $row['currency'] . '</td>
                                <td>
                                    <a class="panel-btn update-mdl-btn"><i class="fa fa-fw fa-pencil"></i></a>
                                    <a class="panel-btn delete-btn"><i class="fa fa-fw fa-close"></i></a>
                                </td>
                                <input type="hidden" class="vehicle" value="' . $row['vehicle'] . '"/>
                                <input type="hidden" class="driver" value="' . $row['driver'] . '"/>
                                <input type="hidden" class="sp_before" value="' . $row['sp_before'] . '"/>
                                <input type="hidden" class="sp_after" value="' . $row['sp_after'] . '"/>
                                <input type="hidden" class="fuel_get" value="' . $row['fuel_get'] . '"/>
                                <input type="hidden" class="fuel_before" value="' . $row['fuel_before'] . '"/>
                                <input type="hidden" class="fuel_after" value="' . $row['fuel_after'] . '"/>
                                <input type="hidden" class="fuel_type" value="' . $row['fuel_type'] . '"/>
                                <input type="hidden" class="fuel_lost" value="' . $row['fuel_lost'] . '"/>
                                <input type="hidden" class="material" value="' . $row['material'] . '"/>
                                <input type="hidden" class="quantity" value="' . $row['quantity'] . '"/>
                                <input type="hidden" class="tariff" value="' . $row['tariff'] . '"/>
                                <input type="hidden" class="currency" value="' . $row['currency'] . '"/>
                                <input type="hidden" class="tariff_type" value="' . $row['tariff_type'] . '"/>
                                <input type="hidden" class="partial" value="' . $row['partial'] . '"/>
                                <input type="hidden" class="salary" value="' . $row['salary'] . '"/>
                                <input type="hidden" class="description" value="' . $row['description'] . '"/>
                                <input type="hidden" class="salary_cost_id" value="' . $row['salary_cost_id'] . '"/>
                            </tr>
        ';
    }
}