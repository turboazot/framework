/**
 * Created by Artem on 06.03.2016.
 */

var $registry = $('.registry');

var $add_reg_mdl_btn = $('.add-reg-mdl-btn');
var $add_reg_mdl = $('#add_registry_mdl');
var $add_reg_btn = $add_reg_mdl.find('.add-btn');

var $add_reg_f_type_select = $add_reg_mdl.find('#fuel_type');
var $add_reg_t_type_select = $add_reg_mdl.find('#tariff_type');

var $update_reg_mdl = $('#update_registry_mdl');
var $update_reg_btn = $update_reg_mdl.find('.update-btn');

var $update_reg_f_type_select = $update_reg_mdl.find('#fuel_type');
var $update_reg_t_type_select = $update_reg_mdl.find('#tariff_type');

var $reg_filter = $registry.find('.filter');






$registry.change(function () {
    ajax_get_registry_total(registry.vehicle, month, year, partner, function (data) {
        $registry.find('.total').find('span').html(data);
    });
});



$add_reg_f_type_select.change(function () {
    var value = $(this).val();
    var $hidden_fields = $('.hidden-field');
    $hidden_fields.hide();
    if(value == 'cash') {
        $('.' + value + '-field').show();
    }
});

$add_reg_t_type_select.change(function () {
    var value = $(this).val();
    $add_reg_mdl.find('#salary_tariff').show();
    $add_reg_mdl.find('#salary').hide();
    $add_reg_mdl.find('#partial').hide();
    $add_reg_mdl.find('#weight').hide();
    $add_reg_mdl.find('#quantity').attr('placeholder', 'Кол-во ' + value + ' *');
    if(value == 'ход') {
        $add_reg_mdl.find('#partial').show();
    } else if(value == 'т'){
        $add_reg_mdl.find('#salary_tariff').hide();
        $add_reg_mdl.find('#salary').show();
    } else if(value == 'т/км'){
        $add_reg_mdl.find('#weight').show();
        $add_reg_mdl.find('#salary_tariff').hide();
        $add_reg_mdl.find('#salary').show();
        $add_reg_mdl.find('#quantity').attr('placeholder', 'Кол-во км *');
    }


});

$update_reg_f_type_select.change(function () {
    var value = $(this).val();
    var $hidden_fields = $('.hidden-field');
    $hidden_fields.hide();
    if(value == 'cash') {
        $('.' + value + '-field').show();
    }
});

$update_reg_t_type_select.change(function () {
    var value = $(this).val();
    $update_reg_mdl.find('#salary_tariff').show();
    $update_reg_mdl.find('#salary').hide();
    $update_reg_mdl.find('#partial').hide();
    $update_reg_mdl.find('#weight').hide();
    $update_reg_mdl.find('#quantity').attr('placeholder', 'Кол-во ' + value + ' *');
    if(value == 'ход') {
        $update_reg_mdl.find('#partial').show();
    } else if(value == 'т'){
        $update_reg_mdl.find('#salary_tariff').hide();
        $update_reg_mdl.find('#salary').show();
    } else if(value == 'т/км'){
        $update_reg_mdl.find('#weight').show();
        $update_reg_mdl.find('#salary_tariff').hide();
        $update_reg_mdl.find('#salary').show();
        $update_reg_mdl.find('#quantity').attr('placeholder', 'Кол-во км *');
    }
});


$registry.find('.box-body').scroll(function () {
    if(registry.load) {
        var $container = $(this);
        if($container.scrollTop() > $container[0].scrollHeight - 400) {
            //alert(fuel.limit + ' ' + fuel.start_from);
            ajax_get_registry(registry.limit, registry.start_from, registry.vehicle, month, year, partner, function (data) {
                if(data) {
                    $container.find('table>tbody').append(data);
                    //alert(data);
                    registry.start_from += registry.limit;
                    registry.load = true;
                    init_popover($registry.find('.cell'));
                } else {
                    registry.load = false;
                }
            });
        }
    }
});

//FILTER

$reg_filter.find('.form-control').change(function () {
    registry.start_from = 0;
    registry.vehicle = $(this).val();
    registry.load = true;
    var $container = $registry.find('table').find('tbody');
    var $this = $(this);

    ajax_get_registry(registry.limit, registry.start_from, registry.vehicle, month, year, partner, function (data) {
        if(data) {
            $registry.find('.cell').remove();
            $container.append(data);
            registry.start_from += registry.limit;
            $registry.find('.box-body').scrollTop(0);
            //alert(cost.filter_id + ' ' + cost.filter_type);
        } else {
            alert('Нету записей');
            $this.find('option[value=""]').attr('selected', true);
        }
    });
});



//ADD

$add_reg_mdl_btn.click(function () {
    $add_reg_mdl.modal();
});

$add_reg_btn.click(function () {
    var date = $add_reg_mdl.find('#date').val();
    var vehicle = $add_reg_mdl.find('#vehicle').val();
    var client = $add_reg_mdl.find('#client').val();
    var sp_before = $add_reg_mdl.find('#sp_before').val();
    var sp_after = $add_reg_mdl.find('#sp_after').val();
    var currency = $add_reg_mdl.find('#currency').val();
    var fuel_type = $add_reg_mdl.find('#fuel_type').val();
    var fuel_tariff = $add_reg_mdl.find('#fuel_tariff').val();
    var fuel_get = $add_reg_mdl.find('#fuel_get').val();
    var fuel_before = $add_reg_mdl.find('#fuel_before').val();
    var fuel_after = $add_reg_mdl.find('#fuel_after').val();
    var material = $add_reg_mdl.find('#material').val();
    var tariff_type = $add_reg_mdl.find('#tariff_type').val();
    var quantity = $add_reg_mdl.find('#quantity').val();
    var tariff = $add_reg_mdl.find('#tariff').val();
    var weight = $add_reg_mdl.find('#weight').val();
    var partial = $add_reg_mdl.find('#partial').val();
    var salary_tariff = $add_reg_mdl.find('#salary_tariff').val();
    var salary = $add_reg_mdl.find('#salary').val();
    var description = $add_reg_mdl.find('#description').val();

    if(validate($add_reg_mdl)) {
        ajax_add_registry(date, vehicle, client, sp_before, sp_after, currency,
            fuel_type, fuel_tariff, fuel_get, fuel_before, fuel_after, material, tariff_type,
            quantity, tariff, weight, partial, salary_tariff, salary, description, function (data) {
                alert(data);
                location.reload();
            });
    } else {
        alert('Заполните все нужные поля!');
    }

});




//UPDATE

$(document).on('click', '.registry .update-mdl-btn', function () {
    var $cell = $(this).closest('.cell');
    registry.current_id = $cell.attr('id');

    var date = $cell.find('.date').html();
    var vehicle = $cell.find('.vehicle').val();
    var client = $cell.find('.client').html();
    var sp_before = $cell.find('.sp_before').val();
    var sp_after = $cell.find('.sp_after').val();
    var currency = $cell.find('.currency').val();
    var fuel_type = $cell.find('.fuel_type').val();
    var fuel_tariff = $cell.find('.fuel_tariff').val();
    var fuel_get = $cell.find('.fuel_get').val();
    var fuel_before = $cell.find('.fuel_before').val();
    var fuel_after = $cell.find('.fuel_after').val();
    registry.fuel_lost = $cell.find('.fuel_lost').val();
    var material = $cell.find('.material').val();
    var tariff_type = $cell.find('.tariff_type').val();
    var quantity = $cell.find('.quantity').val();
    var tariff = $cell.find('.tariff').val();
    var partial = $cell.find('.partial').val();
    var salary = $cell.find('salary').val();
    var description = $cell.find('.description').val();
    registry.salary_cost_id = $cell.find('.salary_cost_id').val();


    $update_reg_mdl.find('#date').val(date);
    $update_reg_mdl.find('#vehicle').find('option[value="' + vehicle + '"]').attr('selected', true);
    $update_reg_mdl.find('#client').val(client);
    $update_reg_mdl.find('#sp_before').val(sp_before);
    $update_reg_mdl.find('#sp_after').val(sp_after);
    $update_reg_mdl.find('#currency').find('option[value="' + currency + '"]').attr('selected', true);
    $update_reg_mdl.find('#fuel_type').find('option[value="' + fuel_type + '"]').attr('selected', true);
    $update_reg_mdl.find('#fuel_tariff').val(fuel_tariff);
    $update_reg_mdl.find('#fuel_get').val(fuel_get);
    $update_reg_mdl.find('#fuel_before').val(fuel_before);
    $update_reg_mdl.find('#fuel_after').val(fuel_after);
    $update_reg_mdl.find('#material').val(material);
    $update_reg_mdl.find('#tariff_type').find('option[value="' + tariff_type + '"]').attr('selected', true);
    $update_reg_mdl.find('#quantity').val(quantity);
    $update_reg_mdl.find('#tariff').val(tariff);
    $update_reg_mdl.find('#partial').val(partial);
    $update_reg_mdl.find('#salary').val(salary);
    $update_reg_mdl.find('#description').val(description);

    $update_reg_mdl.find('#salary_tariff').show();
    $update_reg_mdl.find('#salary').hide();
    $update_reg_mdl.find('#partial').hide();
    $update_reg_mdl.find('#weight').hide();

    $update_reg_mdl.find('#quantity').attr('placeholder', 'Кол-во ' + tariff_type + ' *');
    if(tariff_type == 'ход') {
        $update_reg_mdl.find('#partial').show();
    } else if(tariff_type == 'т'){
        $update_reg_mdl.find('#salary_tariff').hide();
        $update_reg_mdl.find('#salary').show();
    } else if(tariff_type == 'т/км'){
        $update_reg_mdl.find('#weight').show();
        $update_reg_mdl.find('#salary_tariff').hide();
        $update_reg_mdl.find('#salary').show();
        $update_reg_mdl.find('#quantity').attr('placeholder', 'Кол-во км *');
    }

    if(fuel_type == 'cash') {
        $('.' + fuel_type + '-field').show();
    }

    $update_reg_mdl.modal();
});

$update_reg_btn.click(function () {
    var id = registry.current_id;
    var date = $update_reg_mdl.find('#date').val();
    var vehicle = $update_reg_mdl.find('#vehicle').val();
    var client = $update_reg_mdl.find('#client').val();
    var sp_before = $update_reg_mdl.find('#sp_before').val();
    var sp_after = $update_reg_mdl.find('#sp_after').val();
    var currency = $update_reg_mdl.find('#currency').val();
    var fuel_type = $update_reg_mdl.find('#fuel_type').val();
    var fuel_tariff = $update_reg_mdl.find('#fuel_tariff').val();
    var fuel_get = $update_reg_mdl.find('#fuel_get').val();
    var fuel_before = $update_reg_mdl.find('#fuel_before').val();
    var fuel_after = $update_reg_mdl.find('#fuel_after').val();
    var material = $update_reg_mdl.find('#material').val();
    var tariff_type = $update_reg_mdl.find('#tariff_type').val();
    var quantity = $update_reg_mdl.find('#quantity').val();
    var tariff = $update_reg_mdl.find('#tariff').val();
    var shoulder = $update_reg_mdl.find('#shoulder').val();
    var weight = $update_reg_mdl.find('#weight').val();
    var partial = $update_reg_mdl.find('#partial').val();
    var salary_tariff = $update_reg_mdl.find('#salary_tariff').val();
    var salary = $update_reg_mdl.find('#salary').val();
    var description = $update_reg_mdl.find('#description').val();

    if(validate($update_reg_mdl)) {
        ajax_update_registry(id, date, vehicle, client, sp_before, sp_after, currency,
            fuel_type, fuel_tariff, fuel_get, fuel_before, fuel_after, registry.fuel_lost, material, tariff_type,
            quantity, tariff, weight, partial, salary_tariff, salary, description, registry.salary_cost_id, function (data) {
                alert(data);
                location.reload();
            });
    } else {
        alert('Заполните все нужные поля!');
    }
});


//DELETE

$(document).on('click', '.registry .delete-btn', function () {
    var $cell = $(this).closest('.cell');
    var id = $cell.attr('id');
    ajax_delete_registry(id, function (data) {
        alert(data);
        $cell.remove();
    });
});



















init_popover($registry.find('.cell'));

function init_popover($elem) {
    $elem.each(function () {
        $elem.popover({
            toggle : 'popover',
            trigger : 'focus',
            placement : 'bottom',
            html : 'true'
        })
    });
}