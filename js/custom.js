/**
 * Created by Artem on 27.02.2016.
 */
var $filter_form = $('.filter-form');
var $month_sel = $filter_form.find('#month');
var $partner_sel = $filter_form.find('#partner');
var $year_sel = $filter_form.find('#year');

$(".date-control").inputmask("dd.mm.yyyy", {"placeholder": "dd.mm.yyyy"});
$('.float-control').keypress(function(event) {
    if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
        event.preventDefault();
    }
});

$month_sel.find('option[value="' + month + '"]').attr('selected', true);
$partner_sel.find('option[value="' + partner + '"]').attr('selected', true);
$year_sel.find('option[value="' + year + '"]').attr('selected', true);

$filter_form.find('.filter-btn').click(function () {
    $filter_form.submit();
});


function validate($modal) {
    var $req_fields = $modal.find('.required');
    var empty = 1;
    $req_fields.each(function () {
        if($(this).val() == '') {
            console.log($(this).attr('id'));
            empty = 0;
        }
    });
    return empty;
}