{extends file="prt_content.tpl"}
{block name="content"}
    <div class="row">
        <div class="col-md-6">
            <div class="box workers">
                <div class="box-header with-border">
                    <h3 class="box-title">Сотрудники</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Имя</th>
                            <th>Фамилия</th>
                            <th>Отчество</th>
                            <th>Тип</th>
                            <th>Работодатель</th>
                            <th>Телефон</th>
                            <th style="width: 60px;">Панель</th>
                        </tr>
                        {foreach from=$workers item=worker}
                            <tr id="{$worker.id}" class="cell">
                                <td class="first-name">{$worker.first_name}</td>
                                <td class="last-name">{$worker.last_name}</td>
                                <td class="fath-name">{$worker.fath_name}</td>
                                <td class="type">{$worker.type}</td>
                                <td>{$worker.owner_name}</td>
                                <td class="phone">{$worker.phone}</td>
                                <td>
                                    <a class="panel-btn update-mdl-btn"><i class="fa fa-fw fa-pencil"></i></a>
                                    <a class="panel-btn delete-btn"><i class="fa fa-fw fa-close"></i></a>
                                </td>
                                <input value="{$worker.owner}" class="owner" type="hidden"/>
                            </tr>
                        {/foreach}
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <div class="filter">
                        <button type="button" class="btn btn-block btn-primary btn-sm add-w-mdl-btn">Добавить</button>
                    </div>
                </div>
            </div>
            {include file="mdl_add-worker.tpl"}
            {include file="mdl_update-worker.tpl"}
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
        var worker_id = 0;
    </script>
    <style>
        .add-w-mdl-btn {
            width: 200px;
            float: right;
        }
    </style>
{/block}