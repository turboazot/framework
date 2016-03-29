<div class="modal fade" id="add_vehicle_mdl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Добавить машину</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Регистрационный номер <span>*</span></label>
                    <input id="registration_number" type="text" class="form-control required">
                </div>
                <div class="form-group">
                    <label>Спидометр</label>
                    <input id="sp" type="text" class="form-control" maxlength="6" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="Enter ...">
                </div>
                <div class="form-group">
                    <label>Год</label>
                    <input id="year" type="text" class="form-control" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="Enter ...">
                </div>
                <div class="form-group">
                    <label>Состояние</label>
                    <input id="state" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Водитель</label>
                    <select id="driver" class="form-control">
                        {foreach from=$workers item=worker}
                            <option value="{$worker.id}">{$worker.last_name}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="form-group">
                    <label>Владелец</label>
                    <select class="form-control" id="owner">
                        {foreach from=$partners item=partner}
                            <option value="{$partner.id}">{$partner.first_name}</option>
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