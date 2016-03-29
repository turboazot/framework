<div class="modal fade" id="add_fuel_mdl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Топливо</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Количество <span>*</span></label>
                    <input id="amount" type="text" class="form-control float-control required">
                </div>
                <div class="form-group">
                    <label>Тип <span>*</span></label>
                    <select id="type" class="form-control required">
                        <option value="">-</option>
                        <option value="cash">наличными</option>
                        {foreach from=$fuel_types item=fuel_type}
                            <option value="{$fuel_type.id}">
                                {$fuel_type.name} / {$fuel_type.tariff} {$fuel_type.currency}
                            </option>
                        {/foreach}
                    </select>
                </div>
                <div class="form-group cash-field hidden-field">
                    <label>Цена за литр</label>
                    <input id="tariff" type="text" class="form-control float-control" maxlength="5">
                </div>
                <div class="form-group cash-field hidden-field">
                    <label for="currency">Валюта</label>
                    <select id="currency" class="form-control">
                        <option value="грн" selected>грн</option>
                        <option value="руб">руб</option>
                    </select>
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
                <div class="form-group">
                    <label>Машина</label>
                    <select id="vehicle" class="form-control">
                        <option value="" selected>-</option>
                        {foreach from=$vehicles item=vehicle}
                            <option value="{$vehicle.id}">{$vehicle.registration_number}</option>
                        {/foreach}
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary add-btn">Добавить</button>
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