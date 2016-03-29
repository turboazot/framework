/**
 * Created by Artem on 29.02.2016.
 */

var $costs = $('.costs');
var $type_select = $('.modal').find('#parent_type');

var $cost_mdl_btn = $costs.find('.cost-mdl-btn');
var $add_cost_mdl = $('#add_cost_mdl');
var $cost_add_btn = $add_cost_mdl.find('.add-btn');

var $add_child_cost_mdl = $('#add_child_cost_mdl');
var $child_cost_add_btn = $add_child_cost_mdl.find('.add-btn');

var $update_cost_mdl = $('#update_cost_mdl');
var $cost_update_btn = $update_cost_mdl.find('.update-btn');

var $update_child_cost_mdl = $('#update_child_cost_mdl');
var $update_child_cost_btn = $update_child_cost_mdl.find('.update-btn');

var $cost_filter = $costs.find('.filter');

$costs.change(function () {
    ajax_get_cost_total(cost.filter_id, cost.filter_type, month, year, partner, function (data) {
        $costs.find('.total').find('span').html(data);
    });
});

$type_select.change(function () {
    var value = $(this).val();
    var $hidden_fields = $('.hidden-field');
    $hidden_fields.hide();
    if(value == 'vehicle' || value == 'worker' || value == 'fuel') {
        $('.' + value + '-field').show();
    }
});

$costs.find('.box-body').scroll(function () {
    if(cost.load) {
        var $container = $(this);
        console.log($container.scrollTop() + ' ' + $container[0].scrollHeight);
        if($container.scrollTop() > $container[0].scrollHeight - 600) {
            ajax_get_costs(cost.limit, cost.start_from, cost.filter_id, cost.filter_type, month, year, partner, function (data) {
                if(data) {
                    $container.find('table.parents>tbody').append(data);
                    cost.start_from += cost.limit;
                    cost.load = true;
                } else {
                    cost.load = false;
                }
            });
        }
    }
});

$(document).on('click', '.show-children-btn', function () {
    var $cell = $(this).closest('.cell');
    var $table = $cell.next();
    var $i = $(this).find('i');
    if($i.hasClass('fa-arrow-down')) {
        $i.removeClass('fa-arrow-down').addClass('fa-arrow-up');
    } else {
        $i.removeClass('fa-arrow-up').addClass('fa-arrow-down');
    }
    $table.toggle();
});


//FILTER

$cost_filter.find('.form-control').change(function () {
    cost.start_from = 0;
    cost.filter_type = $(this).attr('id');
    cost.filter_id = $(this).val();
    cost.load = true;
    var $container = $costs.find('table.parents').find('tbody');
    var $this = $(this);
    $this.siblings('.form-control').find('option[value=""]').attr('selected', true);

    ajax_get_costs(cost.limit,cost.start_from, cost.filter_id, cost.filter_type, month, year, function (data) {
        if(data) {
            $('.cell').remove();
            $container.append(data);
            cost.start_from += cost.limit;
            //alert(cost.filter_id + ' ' + cost.filter_type);
        } else {
            alert('Нету записей');
            $this.find('option[value=""]').attr('selected', true);
        }
    });
});




//ADD

$cost_mdl_btn.click(function () {
    $add_cost_mdl.modal();
});

$cost_add_btn.click(function () {
    var amount = $add_cost_mdl.find('#amount').val();
    var currency = $add_cost_mdl.find('#currency').val();
    var description = $add_cost_mdl.find('#description').val();
    var parent_type = $add_cost_mdl.find('#parent_type').val();
    var parent_id = $add_cost_mdl.find('.' + parent_type + '-field #parent_id').val();
    var sp = $add_cost_mdl.find('#sp').val();
    var date = $add_cost_mdl.find('#date').val();

    if(validate($add_cost_mdl)) {
        ajax_add_cost(amount, currency, description, parent_id, parent_type, sp, date, function (data) {
            location.reload();
        });
    } else {
        alert('Заполните все нужные поля!');
    }

});





//ADD CHILD

$(document).on('click', '.costs .child-mdl-btn', function () {
    var $cell = $(this).closest('.cell');
    cost.current_id = $cell.attr('id');
    $add_child_cost_mdl.modal();
});

$child_cost_add_btn.click(function () {
    var amount = $add_child_cost_mdl.find('#amount').val();
    var currency = '';
    var description = $add_child_cost_mdl.find('#description').val();
    var parent_id = cost.current_id;
    var parent_type = 'cost';
    var sp = '';
    var date = $add_child_cost_mdl.find('#date').val();

    if(validate($add_child_cost_mdl)) {
        ajax_add_cost(amount, currency, description, parent_id, parent_type, sp, date, function (data) {
            location.reload();
        });
    } else {
        alert('Заполните все нужные поля!');
    }

});





//UPDATE

$(document).on('click', '.costs .update-mdl-btn', function () {
    var $cell = $(this).closest('.cell');
    cost.current_id = $cell.attr('id');
    var amount = $cell.find('.amount').html();
    var currency = $cell.find('.currency').html();
    var description = '';
    var parent_id = $cell.find('.parent-id').val();
    var parent_type = $cell.find('.parent-type').val();
    var sp = $cell.find('.sp').val();
    var date = $cell.find('.date').html();

    $update_cost_mdl.find('.' + parent_type + '-field').show();

    if(parent_type == 'vehicle') {
        $update_cost_mdl.find('#sp').val(sp);
        $update_cost_mdl.find('.vehicle-field #parent_id').find('option[value="' + parent_id + '"]').attr('selected', true);
    } else if(parent_type == 'worker') {
        $update_cost_mdl.find('.worker-field #parent_id').find('option[value="' + parent_id + '"]').attr('selected', true);
    }
    $update_cost_mdl.find('#parent_type').find('option[value="' + parent_type + '"]').attr('selected', true);

    $update_cost_mdl.find('#amount').val(amount);
    $update_cost_mdl.find('#currency').find('option[value="' + currency + '"]').attr('selected', true);
    $update_cost_mdl.find('#description').val(description);
    $update_cost_mdl.find('#date').val(date);

    $update_cost_mdl.modal();
});

$cost_update_btn.click(function () {
    var id = cost.current_id;
    var amount = $update_cost_mdl.find('#amount').val();
    var currency = $update_cost_mdl.find('#currency').val();
    var description = $update_cost_mdl.find('#description').val();
    var parent_type = $update_cost_mdl.find('#parent_type').val();
    var parent_id = $update_cost_mdl.find('.' + parent_type + '-field #parent_id').val();
    var sp = $update_cost_mdl.find('#sp').val();
    var date = $update_cost_mdl.find('#date').val();

    if(validate($update_cost_mdl)) {
        ajax_update_cost(id, amount, currency, description, parent_id, parent_type, sp, date, function (data) {
            alert(data);
            location.reload();
        });
    } else {
        alert('Заполните все нужные поля!');
    }
});






//UPDATE CHILD

$(document).on('click', '.costs .update-child-btn', function () {
    var $cell = $(this).closest('.cell');
    cost.current_id = $cell.attr('id');
    cost.parent_id = $cell.find('.parent-id').val();
    var amount = $cell.find('.amount').html();
    var currency = $cell.find('.currency').html();
    var description = $cell.find('.description').html();
    var date = $cell.find('.date').html();
    //var parent_type = 'cost';

    $update_child_cost_mdl.find('#amount').val(amount);
    $update_child_cost_mdl.find('#description').val(description);
    $update_child_cost_mdl.find('#date').val(date);
    $update_child_cost_mdl.find('#currency').find('option[value="' + currency + '"]').attr('selected', true);

    $update_child_cost_mdl.modal();
});

$update_child_cost_btn.click(function () {
    var id = cost.current_id;
    var amount = $update_child_cost_mdl.find('#amount').val();
    var currency = $update_child_cost_mdl.find('#currency').val();
    var description = $update_child_cost_mdl.find('#description').val();
    var parent_type = 'cost';
    var parent_id = cost.parent_id;
    var sp = '';
    var date = $update_child_cost_mdl.find('#date').val();

    if(validate($update_child_cost_mdl)) {
        ajax_update_cost(id, amount, currency, description, parent_id, parent_type, sp, date, function (data) {
            alert(data);
            location.reload();
        });
    } else {
        alert('Заполните все нужные поля!');
    }
});



//DELETE

$(document).on('click', '.costs .delete-btn', function () {
    var $cell = $(this).closest('.cell');
    var id = $cell.attr('id');
    ajax_delete_cost(id, function (data) {
        alert(data);
        $cell.remove();
        if($cell.next().attr('class') == 'children') {
            $cell.next().remove();
        }
    });
});
