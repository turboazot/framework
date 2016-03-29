<div class="modal fade" id="add_child_cost_mdl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Добавить расход</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Сумма <span>*</span></label>
                    <input id="amount" type="text" class="form-control float-control required">
                </div>
                <div class="form-group">
                    <label>Описание <span>*</span></label>
                    <textarea id="description" class="form-control required" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Дата <span>*</span></label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input id="date" type="text" class="date-control form-control required">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary add-btn">Добавить</button>
            </div>
        </div>
    </div>
</div>