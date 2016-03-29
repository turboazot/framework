<div class="modal fade" id="update_cost_mdl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Изменить расход</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Сумма <span>*</span></label>
                    <input id="amount" type="text" class="form-control float-control required">
                </div>
                <div class="form-group">
                    <label for="currency">Валюта</label>
                    <select id="currency" class="form-control">
                        <option value="грн" selected>грн</option>
                        <option value="руб">руб</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Тип <span>*</span></label>
                    <select id="parent_type" class="form-control required">
                        <option value="" selected>-</option>
                        <option value="worker">зарплата</option>
                        <option value="vehicle">ремонт</option>
                        <option value="fuel">топливо</option>
                        <option value="box">бокс</option>
                        <option value="dues">налоги</option>
                        <option value="other">другие</option>
                    </select>
                </div>
                <div class="form-group worker-field hidden-field">
                    <label>Работник</label>
                    <select id="parent_id" class="form-control">
                        <option value="" selected>-</option>
                        {foreach from=$workers item=worker}
                            <option value="{$worker.id}">{$worker.last_name}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="form-group vehicle-field fuel-field hidden-field">
                    <label>Машина</label>
                    <select id="parent_id" class="form-control">
                        <option value="" selected>-</option>
                        {foreach from=$vehicles item=vehicle}
                            <option value="{$vehicle.id}">{$vehicle.registration_number}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="form-group vehicle-field hidden-field">
                    <label>Спидометр</label>
                    <input id="sp" type="text" class="form-control" maxlength="6" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="Enter ...">
                </div>
                <div class="form-group">
                    <label>Описание</label>
                    <textarea id="description" class="form-control" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label>Дата <span>*</span></label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input id="date" type="text" class="date-control form-control required">
                    </div>
                    <!-- /.input group -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary update-btn">Изменить</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>

<style>
    .vehicle-field, .worker-field {
        display: none;
    }
</style>