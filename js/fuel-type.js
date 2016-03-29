/**
 * Created by Artem on 05.03.2016.
 */
var $fuel_types = $('.fuel-types');

var $add_ft_mdl_btn = $('.add-ft-mdl-btn');
var $add_ft_mdl = $('#add_fuel_type_mdl');
var $add_ft_btn = $add_ft_mdl.find('.add-btn');

var $update_ft_mdl_btn = $fuel_types.find('.update-mdl-btn');
var $update_ft_mdl = $('#update_fuel_type_mdl');
var $update_ft_btn = $update_ft_mdl.find('.update-btn');

var $delete_ft_btn = $fuel_types.find('.delete-btn');


//ADD

$add_ft_mdl_btn.click(function () {
    $add_ft_mdl.modal();
});

$add_ft_btn.click(function () {
    var name = $add_ft_mdl.find('#name').val();
    var currency = $add_ft_mdl.find('#currency').val();
    var tariff = $add_ft_mdl.find('#tariff').val();

    ajax_add_fuel_type(name, currency, tariff, function (data) {
        alert(data);
        location.reload();
    });
});




//UPDATE

$update_ft_mdl_btn.click(function () {
    var $cell = $(this).closest('.cell');
    fuel_type_id = $cell.find('.id').html();
    var name = $cell.find('.name').html();
    var currency = $cell.find('.currency').html();
    var tariff = $cell.find('.tariff').find('span').html();

    $update_ft_mdl.find('#name').val(name);
    $update_ft_mdl.find('#currency').val(currency);
    $update_ft_mdl.find('#tariff').val(tariff);

    $update_ft_mdl.modal();
});

$update_ft_btn.click(function () {
    var name = $update_ft_mdl.find('#name').val();
    var currency = $update_ft_mdl.find('#currency').val();
    var tariff = $update_ft_mdl.find('#tariff').val();

    ajax_update_fuel_type(fuel_type_id, name, currency, tariff, function (data) {
        alert(data);
        location.reload();
    });
});

//DELETE

$delete_ft_btn.click(function () {
    var $cell = $(this).closest('.cell');
    var id = $cell.find('.id').html();
    ajax_delete_fuel_type(id, function (data) {
        $cell.remove();
        alert(data);
    });
});