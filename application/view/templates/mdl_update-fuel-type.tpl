<div class="modal fade" id="update_fuel_type_mdl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Изменить заправку</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Название <span>*</span></label>
                    <input id="name" type="text" class="form-control required">
                </div>
                <div class="form-group">
                    <label for="currency">Валюта</label>
                    <select id="currency" class="form-control">
                        <option value="грн" selected>грн</option>
                        <option value="руб">руб</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Тарифф <span>*</span></label>
                    <input id="tariff" type="text" class="form-control float-control required" maxlength="5">
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