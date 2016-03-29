{extends file="prt_content.tpl"}
{block name="content"}
    <div class="row">
        <div class="col-xs-12">
            <div class="box registry">
                <div class="box-header with-border">
                    <h3 class="box-title">Реестр</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="parents table table-bordered">
                        <tr>
                            <th style="width: 80px">Дата</th>
                            <th style="width: 120px">Авто</th>
                            <th style="width: 80px">Водитель</th>
                            <th>Клиент</th>
                            <th>Обьём выполненных работ</th>
                            <th>Валовый доход</th>
                            <th>Д/Т расход</th>
                            <th>Зарплата</th>
                            <th>Чистый доход</th>
                            <th style="width: 100px">Панель</th>
                        </tr>
                        {foreach from=$registry_set.rows item=row}
                            <tr id="{$row.id}" class="cell" tabindex="0" role="button" data-content="
                                                        <div class='pop-container'>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Дата:</div>
                                                                <div class='pop-value'>{$row.date}</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Авто:</div>
                                                                <div class='pop-value'>{$row.vehicle_number}</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Водитель:</div>
                                                                <div class='pop-value'>{$row.driver_name}</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Клиент:</div>
                                                                <div class='pop-value'>{$row.client}</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Спидометр (до):</div>
                                                                <div class='pop-value'>{$row.sp_before} км</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Спидометр (после):</div>
                                                                <div class='pop-value'>{$row.sp_after} км</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Километраж:</div>
                                                                <div class='pop-value'>{$row.km} км</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Д/Т заправка:</div>
                                                                <div class='pop-value'>{$row.fuel_get} л.</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Д/Т до:</div>
                                                                <div class='pop-value'>{$row.fuel_before} л.</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Д/Т после:</div>
                                                                <div class='pop-value'>{$row.fuel_after} л.</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Материал:</div>
                                                                <div class='pop-value'>{$row.material}</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Тип:</div>
                                                                <div class='pop-value'>{$row.tariff_type}</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Количество:</div>
                                                                <div class='pop-value'>{$row.quantity}</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Тариф:</div>
                                                                <div class='pop-value'>{$row.tariff} {$row.currency}</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Дополнительная ходка:</div>
                                                                <div class='pop-value'>{$row.partial}</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Описание:</div>
                                                                <div class='pop-value'>{$row.description}</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Валовый доход:</div>
                                                                <div class='pop-value'>{$row.dirty_gain} {$row.currency}</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Зарплата:</div>
                                                                <div class='pop-value'>{$row.salary}</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Чистый доход:</div>
                                                                <div class='pop-value'>{$row.clear_gain} {$row.currency}</div>
                                                            </div>
                                                        </div>
                        ">
                                <td class="date">{$row.date}</td>
                                <td class="vehicle_number">{$row.vehicle_number}</td>
                                <td class="driver_name">{$row.driver_name}</td>
                                <td class="client">{$row.client}</td>
                                <td class="short_description">
                                    {$row.quantity} {$row.tariff_type} по {$row.tariff} {$row.currency} {if $row.partial}+ {$row.partial} {$row.currency}{/if}
                                </td>
                                <td class="dirty_gain">
                                    <span>{$row.dirty_gain} {$row.currency}</span>
                                </td>
                                <td class="fuel_lost_liter">{$row.fuel_lost} л.</td>
                                <td class="salary_total">
                                    <span>{$row.salary} {$row.currency}</span>
                                </td>
                                <td>{$row.clear_gain} {$row.currency}</td>
                                <td>
                                    <a class="panel-btn update-mdl-btn"><i class="fa fa-fw fa-pencil"></i></a>
                                    <a class="panel-btn delete-btn"><i class="fa fa-fw fa-close"></i></a>
                                </td>
                                <input type="hidden" class="vehicle" value="{$row.vehicle}"/>
                                <input type="hidden" class="driver" value="{$row.driver}"/>
                                <input type="hidden" class="sp_before" value="{$row.sp_before}"/>
                                <input type="hidden" class="sp_after" value="{$row.sp_after}"/>
                                <input type="hidden" class="fuel_get" value="{$row.fuel_get}"/>
                                <input type="hidden" class="fuel_before" value="{$row.fuel_before}"/>
                                <input type="hidden" class="fuel_after" value="{$row.fuel_after}"/>
                                <input type="hidden" class="fuel_type" value="{$row.fuel_type}"/>
                                <input type="hidden" class="fuel_lost" value="{$row.fuel_lost}"/>
                                <input type="hidden" class="material" value="{$row.material}"/>
                                <input type="hidden" class="quantity" value="{$row.quantity}"/>
                                <input type="hidden" class="tariff" value="{$row.tariff}"/>
                                <input type="hidden" class="currency" value="{$row.currency}"/>
                                <input type="hidden" class="tariff_type" value="{$row.tariff_type}"/>
                                <input type="hidden" class="partial" value="{$row.partial}"/>
                                <input type="hidden" class="salary" value="{$row.salary}"/>
                                <input type="hidden" class="description" value="{$row.description}"/>
                                <input type="hidden" class="salary_cost_id" value="{$row.salary_cost_id}"/>
                            </tr>
                        {/foreach}
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <div class="total">
                        Итого: <span>Валовый - {$registry_set.total.dirty}; Чистый - {$registry_set.total.clear}</span>
                    </div>
                    <hr/>
                    <div class="filter">
                        <select class="form-control" id="vehicle">
                            <option value="" selected>выберите машину</option>
                            {foreach from=$vehicles item=vehicle}
                                <option value="{$vehicle.id}">{$vehicle.registration_number}</option>
                            {/foreach}
                        </select>
                        <button type="button" class="btn btn-block btn-primary btn-sm add-reg-mdl-btn">Добавить</button>
                    </div>
                </div>
            </div>
            {include file="mdl_add-registry.tpl"}
            {include file="mdl_update-registry.tpl"}
        </div>
    </div>
    <script>
        var registry = {
            limit : {$registry_set.limit},
            start_from : {$registry_set.limit},
            load : true,
            current_id : 0,
            salary_cost_id : 0,
            fuel_lost : 0,
            vehicle : null
        }
    </script>
    <style>
        .registry .add-reg-mdl-btn {
            width: 200px;
            float: right;
        }

        .pop-row {
            clear: both;
        }
        .pop-field {
            float: left;
            font-weight: bold;
            margin-right: 10px;
        }

        .popover {
            width: 500px;
        }
    </style>
    <!-- /.box -->
{/block}