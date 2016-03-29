/**
 * Created by Artem on 25.02.2016.
 */
var $add_service_container = $('.add-service');
var $services_container = $('.services-container');
var $service_add_btn = $add_service_container.find('.add-btn');
var $service_update_btn = $services_container.find('.update-btn');
var $service_delete_btn = $services_container.find('.delete-btn');

$service_add_btn.click(function () {
    var $cell = $(this).closest('.service');
    var name = $cell.find('.name').find('input').val();
    var type = $cell.find('.type').find('input').val();
    var density = $cell.find('.density').find('input').val();
    var price = $cell.find('.price').find('input').val();

    ajax_add_service(name, type, density, price, function (data) {
        location.reload();
    });
});

$service_update_btn.click(function () {
    var $cell = $(this).closest('.service');
    var id = $cell.attr('id');
    var name = $cell.find('.name').find('input').val();
    var type = $cell.find('.type').find('input').val();
    var density = $cell.find('.density').find('input').val();
    var price = $cell.find('.price').find('input').val();

    ajax_update_service(id, name, type, density, price, function (data) {
        alert(data);
    });
});

$service_delete_btn.click(function () {
    var $cell = $(this).closest('.service');
    ajax_delete_service(id, function (data) {
        alert(data);
        $cell.remove();
    })
});

$services_container.height($services_container.height() - 2);