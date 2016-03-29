<div class="modal fade" id="update_worker_mdl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Изменить сотрудника</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Имя <span>*</span></label>
                    <input id="first_name" type="text" class="form-control required">
                </div>
                <div class="form-group">
                    <label>Фамилия <span>*</span></label>
                    <input id="last_name" type="text" class="form-control required">
                </div>
                <div class="form-group">
                    <label>Отчество <span>*</span></label>
                    <input id="fath_name" type="text" class="form-control required">
                </div>
                <div class="form-group">
                    <label>Тип <span>*</span></label>
                    <input id="type" type="text" class="form-control required">
                </div>
                <div class="form-group">
                    <label>Работодатель</label>
                    <select class="form-control" id="owner">
                        {foreach from=$partners item=partner}
                            <option value="{$partner.id}">{$partner.first_name}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="form-group">
                    <label>Телефон</label>
                    <input id="phone" type="text" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary update-btn">Добавить</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>