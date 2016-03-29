{extends file="prt_content.tpl"}
{block name="content"}
    <div class="row">
        <div class="col-md-6">
            <div class="box vehicles">
                <div class="box-header with-border">
                    <h3 class="box-title">Машины</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 120px">Гос. номер</th>
                            <th>Спидометр</th>
                            <th>Год</th>
                            <th>Состояние</th>
                            <th>Баланс топлива</th>
                            <th>Водитель</th>
                            <th>Владелец</th>
                            <th style="width: 60px;">Панель</th>
                        </tr>
                        {foreach from=$vehicles item=vehicle}
                            <tr id="{$vehicle.id}" class="cell">
                                <td class="registration-number">{$vehicle.registration_number}</td>
                                <td class="sp">{$vehicle.sp}</td>
                                <td class="year">{$vehicle.year}</td>
                                <td class="state">{$vehicle.state}</td>
                                <td class="fuel_balance">{$vehicle.fuel_balance}</td>
                                <td>{$vehicle.driver_name}</td>
                                <td>{$vehicle.owner_name}</td>
                                <td>
                                    <a class="panel-btn update-mdl-btn"><i class="fa fa-fw fa-pencil"></i></a>
                                    <a class="panel-btn delete-btn"><i class="fa fa-fw fa-close"></i></a>
                                </td>
                                <input value="{$vehicle.driver}" class="driver" type="hidden"/>
                                <input value="{$vehicle.owner}" class="owner" type="hidden"/>
                            </tr>
                        {/foreach}
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <div class="filter">
                        <button type="button" class="btn btn-block btn-primary btn-sm add-v-mdl-btn">Добавить</button>
                    </div>
                </div>
            </div>
            {include file="mdl_add-vehicle.tpl"}
            {include file="mdl_update-vehicle.tpl"}
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <script>
        /*var fuel_type_id = 0;
        var fuel = {
            limit : {$fuel_set.limit},
            start_from : {$fuel_set.limit},
            load : true,
            current_id : 0,
            vehicle : null
        }*/

        var vehicle_id = 0;
    </script>
    <style>
        .add-v-mdl-btn{
            width: 200px;
            float: right;
        }
    </style>
{/block}