/**
 * Created by Artem on 25.02.2016.
 */
var $advantage_container = $('.advantages-container');
var $advantage_update_btn = $advantage_container.find('.update-btn');

$advantage_update_btn.click(function () {
    var $cell = $(this).closest('.advantage');
    var id = $cell.attr('id');
    var name = $cell.find('.name').find('input').val();
    var icon = $cell.find('.icon').find('input').val();
    var description = $cell.find('.description').find('textarea').val();

    ajax_update_advantage(id, name, icon, description, function (data) {
        alert(data);
    });
});