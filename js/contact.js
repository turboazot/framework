/**
 * Created by Artem on 25.02.2016.
 */
var $contact_btn = $('.contact-submit');

$contact_btn.click(function () {
    var phone = $('.phone').find('input').val();
    var mail = $('.mail').find('input').val();
    var address = $('.address').find('input').val();
    ajax_update_config('phone', phone, function (data) {
        alert(data);
    });
    ajax_update_config('mail', mail, function () {
    });
    ajax_update_config('address', address, function () {
    });
});