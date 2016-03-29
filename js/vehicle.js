/**
 * Created by Artem on 06.03.2016.
 */
var $vehicles = $('.vehicles');

var $add_v_mdl_btn = $vehicles.find('.add-v-mdl-btn');
var $add_v_mdl = $('#add_vehicle_mdl');
var $add_v_btn = $add_v_mdl.find('.add-btn');

var $update_v_mdl_btn = $vehicles.find('.update-mdl-btn');
var $update_v_mdl = $('#update_vehicle_mdl');
var $update_v_btn = $update_v_mdl.find('.update-btn');

var $delete_v_btn = $vehicles.find('.delete-btn');

$add_v_mdl_btn.click(function () {
    $add_v_mdl.modal();
});

$add_v_btn.click(function () {
    var registration_number = $add_v_mdl.find('#registration_number').val();
    var sp = $add_v_mdl.find('#sp').val();
    var year = $add_v_mdl.find('#year').val();
    var state = $add_v_mdl.find('#state').val();
    var driver = $add_v_mdl.find('#driver').val();
    var owner = $add_v_mdl.find('#owner').val();

    if(validate($add_v_mdl)) {
        ajax_add_vehicle(registration_number, sp, year, state, driver, owner, function (data) {
            alert(data);
            location.reload();
        });
    } else {
        alert('Заполните все нужные поля!');
    }

});

$update_v_mdl_btn.click(function () {
    var $cell = $(this).closest('.cell');
    vehicle_id = $cell.attr('id');
    var registration_number = $cell.find('.registration-number').html();
    var sp = $cell.find('.sp').html();
    var year = $cell.find('.year').html();
    var state = $cell.find('.state').html();
    var driver = $cell.find('.driver').val();
    var owner = $cell.find('.owner').val();

    $update_v_mdl.find('#registration_number').val(registration_number);
    $update_v_mdl.find('#sp').val(sp);
    $update_v_mdl.find('#year').val(year);
    $update_v_mdl.find('#state').val(state);
    $update_v_mdl.find('#driver').find('option[value="' + driver + '"]').attr('selected', true);
    $update_v_mdl.find('#owner').find('option[value="' + owner + '"]').attr('selected', true);

    $update_v_mdl.modal();
});

$update_v_btn.click(function () {
    var id = vehicle_id;
    var registration_number = $update_v_mdl.find('#registration_number').val();
    var sp = $update_v_mdl.find('#sp').val();
    var year = $update_v_mdl.find('#year').val();
    var state = $update_v_mdl.find('#state').val();
    var driver = $update_v_mdl.find('#driver').val();
    var owner = $update_v_mdl.find('#owner').val();

    if(validate($update_v_mdl)) {
        ajax_update_vehicle(id, registration_number, sp, year, state, driver, owner, function (data) {
            alert(data);
            location.reload();
        });
    } else {
        alert('Заполните все нужные поля!');
    }
});

$delete_v_btn.click(function () {
    var $cell = $(this).closest('.cell');
    var id = $cell.attr('id');
    ajax_delete_vehicle(id, function (data) {
        $cell.remove();
        alert(data);
    });
});

