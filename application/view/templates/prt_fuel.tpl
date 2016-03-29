{extends file="prt_content.tpl"}
{block name="content"}
    <div class="row">
        <div class="col-md-6">
            <div class="box fuels">
                <div class="box-header with-border">
                    <h3 class="box-title">Оборот топлива</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 30px">Дата</th>
                            <th>Кол-во (л.)</th>
                            <th>Тип</th>
                            <th style="width: 120px">Машина</th>
                            <th style="width: 60px;">Панель</th>
                        </tr>
                        {foreach from=$fuel_set.fuels item=fuel}
                            <tr id="{$fuel.id}" class="cell">
                                <td class="date">{$fuel.date}</td>
                                <td class="amount">{if $fuel.vehicle}
                                        - <span>{$fuel.amount}</span>
                                    {else}
                                        + <span>{$fuel.amount}</span>
                                    {/if}</td>
                                <td>{$fuel.type_word}</td>
                                <td>{$fuel.vehicle_number}</td>
                                <td>
                                    <a class="panel-btn update-mdl-btn"><i class="fa fa-fw fa-pencil"></i></a>
                                    <a class="panel-btn delete-btn"><i class="fa fa-fw fa-close"></i></a>
                                </td>
                                <input value="{$fuel.type}" class="type" type="hidden"/>
                                <input value="{$fuel.vehicle}" class="vehicle" type="hidden"/>
                            </tr>
                        {/foreach}
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <div class="box-footer clearfix">
                        <div class="filter">
                            <select class="form-control" id="vehicle">
                                <option value="" selected>выберите машину</option>
                                {foreach from=$vehicles item=vehicle}
                                    <option value="{$vehicle.id}">{$vehicle.registration_number}</option>
                                {/foreach}
                            </select>
                            <button type="button" class="btn btn-block btn-primary btn-sm add-f-mdl-btn">Добавить</button>
                        </div>
                    </div>
                </div>
            </div>
            {include file="mdl_add-fuel.tpl"}
            {include file="mdl_update-fuel.tpl"}
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
            <div class="box fuel-types">
                <div class="box-header">
                    <h3 class="box-title">Заправки</h3>

                    <div class="box-tools">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table">
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th>Название</th>
                            <th>Валюта</th>
                            <th>Баланс</th>
                            <th>Тариф</th>
                            <th style="width: 60px">Панель</th>
                        </tr>
                        {foreach from=$fuel_types item=fuel_type}
                            <tr class="cell">
                                <td class="id">{$fuel_type.id}</td>
                                <td class="name">{$fuel_type.name}</td>
                                <td class="currency">{$fuel_type.currency}</td>
                                <td class="balance">{$fuel_type.balance}</td>
                                <td class="tariff"><span class="badge bg-green">{$fuel_type.tariff}</span></td>
                                <td>
                                    <a class="panel-btn update-mdl-btn"><i class="fa fa-fw fa-pencil"></i></a>
                                    <a class="panel-btn delete-btn"><i class="fa fa-fw fa-close"></i></a>
                                </td>
                            </tr>
                        {/foreach}
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <button type="button" class="btn btn-block btn-primary btn-sm add-ft-mdl-btn">Добавить</button>
                </div>
            </div>
            {include file="mdl_add-fuel-type.tpl"}
            {include file="mdl_update-fuel-type.tpl"}
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <script>
        var fuel_type_id = 0;
        var fuel = {
            limit : {$fuel_set.limit},
            start_from : {$fuel_set.limit},
            load : true,
            current_id : 0,
            vehicle : null
        }
    </script>
    <style>
        .add-ft-mdl-btn, .add-f-mdl-btn {
            width: 200px;
            float: right;
        }
    </style>
{/block}