<div class="modal fade" id="add_registry_mdl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Добавить строку</h4>
            </div>
            <div class="modal-body">
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
                    <label>Машина <span>*</span></label>
                    <select id="vehicle" class="form-control required">
                        <option value="" selected>-</option>
                        {foreach from=$vehicles item=vehicle}
                            <option value="{$vehicle.id}">{$vehicle.registration_number}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="form-group">
                    <label>Клиент <span>*</span></label>
                    <input id="client" type="text" class="form-control required">
                </div>
                <div class="form-group">
                    <label>Спидометр <span>*</span></label>
                    <input id="sp_before" type="text" class="form-control required" maxlength="6" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="до">
                    <input id="sp_after" type="text" class="form-control required" maxlength="6" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="после">
                </div>
                <div class="form-group">
                    <label for="currency">Валюта</label>
                    <select id="currency" class="form-control">
                        <option value="грн" selected>грн</option>
                        <option value="руб">руб</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Топливо <span>*</span></label>
                    <select id="fuel_type" class="form-control required">
                        <option value="">выберите заправку</option>
                        <option value="cash">наличными</option>
                        {foreach from=$fuel_types item=fuel_type}
                            <option value="{$fuel_type.id}">
                                {$fuel_type.name} / {$fuel_type.tariff} {$fuel_type.currency}
                            </option>
                        {/foreach}
                    </select>
                    <input id="fuel_tariff" type="text" class="form-control float-control cash-field hidden-field"
                           maxlength="5" placeholder="Цена за литр">
                    <input id="fuel_get" type="text" class="form-control float-control" placeholder="Д/Т заправка">
                    <input id="fuel_before" type="text" class="form-control float-control required" placeholder="Д/Т до *">
                    <input id="fuel_after" type="text" class="form-control float-control required" placeholder="Д/Т после *">
                </div>
                <div class="form-group">
                    <label>Материал</label>
                    <input id="material" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Объём выполненных работ <span>*</span></label>
                    <select id="tariff_type" class="form-control">
                        <option value="ход" selected>ход</option>
                        <option value="км">км</option>
                        <option value="т/км">т/км</option>
                        <option value="т">т</option>
                        <option value="ч">ч</option>
                    </select>
                    <input id="quantity" type="text" class="form-control float-control required" placeholder="Количество *">
                    <input id="tariff" type="text" class="form-control float-control required" placeholder="Тариф *">
                    <input id="weight" type="text" class="form-control float-control hidden-field" placeholder="Вес">
                    <input id="partial" type="text" class="form-control float-control" placeholder="Неполная ходка (сумма)">
                    <input id="salary_tariff" type="text" class="form-control float-control" placeholder="Зарплата за ед.">
                    <input id="salary" type="text" class="form-control float-control hidden-field" placeholder="Зарплата">
                </div>
                <div class="form-group">
                    <label>Описание</label>
                    <textarea id="description" class="form-control" rows="3"></textarea>
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
    #add_registry_mdl .form-control, #add_registry_mdl select {
        margin-bottom: 20px;
    }

    #date {
        margin: 0!important;
    }
</style>