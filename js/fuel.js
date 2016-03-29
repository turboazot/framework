/**
 * Created by Artem on 05.03.2016.
 */
/**
 * Created by Artem on 29.02.2016.
 */

var $fuels = $('.fuels');

var $add_f_mdl_btn = $fuels.find('.add-f-mdl-btn');
var $add_f_mdl = $('#add_fuel_mdl');
var $add_f_btn = $add_f_mdl.find('.add-btn');

var $add_f_type_select = $add_f_mdl.find('#type');


var $update_f_mdl = $('#update_fuel_mdl');
var $update_f_btn = $update_f_mdl.find('.update-btn');

var $update_f_type_select = $update_f_mdl.find('#type');

var $fuel_filter = $fuels.find('.filter');

/*$costs.change(function () {
    ajax_get_cost_total(cost.filter_id, cost.filter_type, month, function (data) {
        $costs.find('.total').find('span').html(data);
    });
});*/

$add_f_type_select.change(function () {
    var value = $(this).val();
    var $hidden_fields = $('.hidden-field');
    $hidden_fields.hide();
    if(value == 'cash') {
        $('.' + value + '-field').show();
    }
});

$update_f_type_select.change(function () {
    var value = $(this).val();
    var $hidden_fields = $('.hidden-field');
    $hidden_fields.hide();
    if(value == 'cash') {
        $('.' + value + '-field').show();
    }
});

$fuels.find('.box-body').scroll(function () {
    if(fuel.load) {
        var $container = $(this);
        if($container.scrollTop() > $container[0].scrollHeight - 400) {
            //alert(fuel.limit + ' ' + fuel.start_from);
            ajax_get_fuel(fuel.limit, fuel.start_from, fuel.vehicle, month, year, function (data) {
                if(data) {
                    $container.find('table>tbody').append(data);
                    fuel.start_from += fuel.limit;
                    fuel.load = true;
                } else {
                    fuel.load = false;
                }
            });
        }
    }
});

/*$(document).on('click', '.show-children-btn', function () {
    var $cell = $(this).closest('.cell');
    var $table = $cell.next();
    var $i = $(this).find('i');
    if($i.hasClass('fa-arrow-down')) {
        $i.removeClass('fa-arrow-down').addClass('fa-arrow-up');
    } else {
        $i.removeClass('fa-arrow-up').addClass('fa-arrow-down');
    }
    $table.toggle();
});*/


//FILTER

$fuel_filter.find('.form-control').change(function () {
    fuel.start_from = 0;
    fuel.vehicle = $(this).val();
    fuel.load = true;
    var $container = $fuels.find('table').find('tbody');
    var $this = $(this);

    ajax_get_fuel(fuel.limit,fuel.start_from, fuel.vehicle, month, year, function (data) {
        if(data) {
            $fuels.find('.cell').remove();
            $container.append(data);
            fuel.start_from += fuel.limit;
            $fuels.find('.box-body').scrollTop(0);
            //alert(cost.filter_id + ' ' + cost.filter_type);
        } else {
            alert('Нету записей');
            $this.find('option[value=""]').attr('selected', true);
        }
    });
});




//ADD

$add_f_mdl_btn.click(function () {
    $add_f_mdl.modal();
});

$add_f_btn.click(function () {
    var amount = $add_f_mdl.find('#amount').val();
    var tariff = $add_f_mdl.find('#tariff').val();
    var currency = $add_f_mdl.find('#currency').val();
    var vehicle = $add_f_mdl.find('#vehicle').val();
    var date = $add_f_mdl.find('#date').val();
    var type = $add_f_mdl.find('#type').val();

    if(validate($add_f_mdl)) {
        ajax_add_fuel(amount, tariff, currency, vehicle, date, type, function (data) {
            alert(data);
            location.reload();
        });
    } else {
        alert('Заполните все нужные поля!');
    }
});





//UPDATE

$(document).on('click', '.fuels .update-mdl-btn', function () {
    var $cell = $(this).closest('.cell');
    fuel.current_id = $cell.attr('id');
    var amount = $cell.find('.amount').find('span').html();
    var vehicle = $cell.find('.vehicle').val();
    var date = $cell.find('.date').html();
    var type = $cell.find('.type').val();

    $update_f_mdl.find('#amount').val(amount);
    $update_f_mdl.find('#vehicle').find('option[value="' + vehicle + '"]').attr('selected', true);
    $update_f_mdl.find('#date').val(date);

    $update_f_mdl.modal();
});

$update_f_btn.click(function () {
    var id = fuel.current_id;
    var amount = $update_f_mdl.find('#amount').val();
    var tariff = $update_f_mdl.find('#tariff').val();
    var currency = $update_f_mdl.find('#currency').val();
    var vehicle = $update_f_mdl.find('#vehicle').val();
    var date = $update_f_mdl.find('#date').val();
    var type = $update_f_mdl.find('#type').val();

    if(validate($update_f_mdl)) {
        ajax_update_fuel(id, amount, tariff, currency, vehicle, date, type, function (data) {
            alert(data);
            location.reload();
        });
    } else {
        alert('Заполните все нужные поля!');
    }

});





//DELETE

$(document).on('click', '.fuels .delete-btn', function () {
    var $cell = $(this).closest('.cell');
    var id = $cell.attr('id');
    ajax_delete_fuel(id, function (data) {
        alert(data);
        $cell.remove();
        if($cell.next().attr('class') == 'children') {
            $cell.next().remove();
        }
    });
});
