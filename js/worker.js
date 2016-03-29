/**
 * Created by Artem on 06.03.2016.
 */
var $workers = $('.workers');

var $add_w_mdl_btn = $workers.find('.add-w-mdl-btn');
var $add_w_mdl = $('#add_worker_mdl');
var $add_w_btn = $add_w_mdl.find('.add-btn');

var $update_w_mdl_btn = $workers.find('.update-mdl-btn');
var $update_w_mdl = $('#update_worker_mdl');
var $update_w_btn = $update_w_mdl.find('.update-btn');

var $delete_w_btn = $workers.find('.delete-btn');

$add_w_mdl_btn.click(function () {
    $add_w_mdl.modal();
});

$add_w_btn.click(function () {
    var first_name = $add_w_mdl.find('#first_name').val();
    var last_name = $add_w_mdl.find('#last_name').val();
    var fath_name = $add_w_mdl.find('#fath_name').val();
    var type = $add_w_mdl.find('#type').val();
    var owner = $add_w_mdl.find('#owner').val();
    var phone = $add_w_mdl.find('#phone').val();

    if(validate($add_w_mdl)) {
        ajax_add_worker(first_name, last_name, fath_name, type, phone, owner, function (data) {
            alert(data);
            location.reload();
        });
    } else {
        alert('Заполните все нужные поля!');
    }

});

$update_w_mdl_btn.click(function () {
    var $cell = $(this).closest('.cell');
    worker_id = $cell.attr('id');
    var first_name = $cell.find('.first-name').html();
    var last_name = $cell.find('.last-name').html();
    var fath_name = $cell.find('.fath-name').html();
    var type = $cell.find('.type').html();
    var owner = $cell.find('.owner').val();
    var phone = $cell.find('.phone').html();

    $update_w_mdl.find('#first_name').val(first_name);
    $update_w_mdl.find('#last_name').val(last_name);
    $update_w_mdl.find('#fath_name').val(fath_name);
    $update_w_mdl.find('#type').val(type);
    $update_w_mdl.find('#owner').find('option[value="' + owner + '"]').attr('selected', true);
    $update_w_mdl.find('#phone').val(phone);

    $update_w_mdl.modal();
});

$update_w_btn.click(function () {
    var id = worker_id;
    var first_name = $update_w_mdl.find('#first_name').val();
    var last_name = $update_w_mdl.find('#last_name').val();
    var fath_name = $update_w_mdl.find('#fath_name').val();
    var type = $update_w_mdl.find('#type').val();
    var owner = $update_w_mdl.find('#owner').val();
    var phone = $update_w_mdl.find('#phone').val();

    if(validate($update_w_mdl)) {
        ajax_update_worker(id, first_name, last_name, fath_name, type, phone, owner, function (data) {
            alert(data);
            location.reload();
        });
    } else {
        alert('Заполните все нужные поля!');
    }

});

$delete_w_btn.click(function () {
    var $cell = $(this).closest('.cell');
    var id = $cell.attr('id');
    ajax_delete_worker(id, function (data) {
        $cell.remove();
        alert(data);
    });
});

