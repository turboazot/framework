{extends file="prt_content.tpl"}
{block name="content"}
    <div class="row">
        <div class="col-xs-12">
            <div class="box costs">
                <div class="box-header with-border">
                    <h3 class="box-title">Таблица расходов</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="parents table table-bordered">
                        <tr>
                            <th style="width: 80px">Дата</th>
                            <th style="width: 80px">Сумма</th>
                            <th style="width: 40px">Валюта</th>
                            <th>Описание</th>
                            <th>Тип</th>
                            <th style="width: 100px">Панель</th>
                        </tr>
                        {foreach from=$cost_set.costs item=cost}
                            <tr id="{$cost.id}" class="cell">
                                <td class="date">{$cost.date}</td>
                                <td class="amount">{$cost.amount}</td>
                                <td class="currency">{$cost.currency}</td>
                                <td class="description">
                                    {$cost.description}
                                </td>
                                <td>
                                    {$cost.parent_type_word}
                                </td>
                                <td>
                                    {if count($cost.children)}
                                        <a class="panel-btn show-children-btn"><i class="fa fa-fw fa-arrow-down"></i></a>
                                    {/if}
                                    <a class="panel-btn update-mdl-btn"><i class="fa fa-fw fa-pencil"></i></a>
                                    <a class="panel-btn child-mdl-btn"><i class="fa fa-fw fa-plus"></i></a>
                                    <a class="panel-btn delete-btn"><i class="fa fa-fw fa-close"></i></a>
                                </td>
                                <input class="parent-id" value="{$cost.parent_id}" type="hidden"/>
                                <input class="parent-type" value="{$cost.parent_type}" type="hidden"/>
                                <input class="sp" value="{$cost.sp}" type="hidden"/>
                            </tr>
                            {if count($cost.children)}
                                <tr class="children" style="display:none;">
                                    <td colspan="6">
                                        <table class="table table-bordered table-striped" style="margin-bottom: 0">
                                            {foreach from=$cost.children item=child}
                                                <tr id="{$child.id}" class="cell">
                                                    <td class="date" style="width: 80px">{$child.date}</td>
                                                    <td class="amount" style="width: 80px">{$child.amount}</td>
                                                    <td class="description" colspan="2">{$child.description}</td>
                                                    <td style="width: 100px">
                                                        <a class="panel-btn update-child-btn"><i class="fa fa-fw fa-pencil"></i></a>
                                                        <a class="panel-btn delete-btn"><i class="fa fa-fw fa-close"></i></a>
                                                    </td>
                                                    <input class="parent-id" value="{$child.parent_id}" type="hidden"/>
                                                </tr>
                                            {/foreach}
                                            <tr class="balance">
                                                <td colspan="5">Остаток: {$cost.balance}</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            {/if}
                        {/foreach}
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <div class="filter">
                        <div class="total">
                            Итого: <span>{$cost_set.total.grn} грн {$cost_set.total.rub} руб</span>
                        </div>
                        <hr/>
                        <select class="form-control" id="vehicle">
                            <option value="" selected>выберите машину</option>
                            {foreach from=$vehicles item=vehicle}
                                <option value="{$vehicle.id}">{$vehicle.registration_number}</option>
                            {/foreach}
                        </select>
                        <select class="form-control" id="worker">
                            <option value="" selected>выберите работника</option>
                            {foreach from=$workers item=worker}
                                <option value="{$worker.id}">{$worker.last_name}</option>
                            {/foreach}
                        </select>
                        <button type="button" class="btn btn-block btn-primary btn-sm cost-mdl-btn">Добавить</button>
                    </div>
                    <hr/>

                </div>
            </div>
        </div>
    </div>
    {include file="mdl_add-cost.tpl"}
    {include file="mdl_add_child_cost.tpl"}
    {include file="mdl_update_cost.tpl"}
    {include file="mdl_update-child-cost.tpl"}
    <script>
        var cost = {
            limit : {$cost_set.limit},
            start_from : {$cost_set.limit},
            load : true,
            current_id : 0,
            parent_id : 0,
            filter_type : null,
            filter_id : null
        }
    </script>
    <style>
        .costs .cost-mdl-btn {
            width: 200px;
            float: right;
            margin-right: 30px;
        }
    </style>
    <!-- /.box -->
{/block}