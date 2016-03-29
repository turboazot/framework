/**
 * Created by Artem on 25.02.2016.
 */
var $header_btn = $('.header-submit');

$header_btn.click(function () {
    var hero = $('.hero').find('input').val();
    var sub_hero = $('.sub-hero').find('input').val();
    ajax_update_config('hero', hero, function (data) {
        alert(data);
    });
    ajax_update_config('sub_hero', sub_hero, function () {
    });
});