/**
 * Created by Artem on 25.02.2016.
 */
var $add_photo_mdl = $('#add_photo_mdl');
var $add_photo_btn = $('.add-photo-btn');
var $photo_input = $add_photo_mdl.find('#photo_input');
var $temp_names_input = $add_photo_mdl.find('#temp_file_names');
var $photo_names_input = $add_photo_mdl.find('#photo_names');
var $form = $add_photo_mdl.find('#photo_upload_frm');
var $continue_btn = $add_photo_mdl.find('.continue');
var $description_panel = $('.add-description-panel');
var $back_description_btn = $description_panel.find('#back_btn');
var $photo_container = $('.photo-container');
var $photo_update_btn = $photo_container.find('.update-btn');
var $photo_delete_btn = $photo_container.find('.delete-btn');



$(document).ready(function () {
    $add_photo_btn.click(function () {
        $photo_input.click();
    });

    $photo_input.change(function () {
        var form_data = new FormData();
        var files = $photo_input[0].files;

        if(files.length > 1) {
            for(var i = 0; i < files.length; i++) {
                var file = files[i];
                form_data.append('files[]', file, file.name);
            }
        } else {
            form_data.append('files', files[0]);
        }

        $.ajax({
            url: ajax_path + 'portfolio/temp.php',
            type: 'POST',
            contentType: false,
            processData: false,
            data: form_data,
            xhr: function(){
                var xhr = $.ajaxSettings.xhr();
                xhr.upload.addEventListener('progress', function(evt){
                    if(evt.lengthComputable) {
                        var percentComplete = Math.ceil(evt.loaded / evt.total * 100);
                    }
                }, false);
                return xhr;
            },
            success: function(data){
                if(data.search('Ошибка:') == -1) {
                    $temp_names_input.val(data);
                    $add_photo_mdl.modal();
                } else {
                    alert(data);
                }

            }
        });
    });

    $add_photo_mdl.on('hidden.bs.modal', function () {
        $photo_input.val('');
        delete_temp();
    });

    $continue_btn.click(function () {
        $.ajax({
            type: "POST",
            url: ajax_path + "portfolio/upload.php",
            data: ({'file_names_str' : $temp_names_input.val()}),
            xhr: function(){
                var xhr = $.ajaxSettings.xhr();
                xhr.upload.addEventListener('progress', function(evt){
                    if(evt.lengthComputable) {
                        var percentComplete = Math.ceil(evt.loaded / evt.total * 100);
                        console.log(evt.loaded + ' ' + evt.total);
                    }
                }, false);
                return xhr;
            },
            success: function(data) {
                $photo_names_input.val(data);
                $form.submit();
            }
        });
    });

    $('#save_btn').click(function () {
        var form_data = new FormData();

        $('.photo_name').each(function () {
            form_data.append('picture[]', $(this).val());
        });

        $('.name_input').each(function () {
            form_data.append('name[]', $(this).val());
        });

        $('.description_input').each(function () {
            form_data.append('description[]', $(this).val());
        });

        $.ajax({
            type: "POST",
            url: ajax_path + "portfolio/description.php",
            contentType: false,
            processData: false,
            data: form_data,
            success: function(data) {
                window.location = $back_description_btn.attr('href');
            }
        });
    });

    $photo_update_btn.click(function () {
        var $cell = $(this).closest('.col-md-4');
        var article = $cell.find('.article').val();
        var name = $cell.find('.name').find('input').val();
        var description = $cell.find('.description').find('textarea').val();
        $.ajax({
            url: ajax_path + 'portfolio/update.php',
            type: 'POST',
            data: ({'article' : article, 'name' : name, 'description' : description}),
            success: function(data){
                alert(data);

            }
        });
    });

    $photo_delete_btn.click(function () {
        var $cell = $(this).closest('.col-md-4');
        var article = $cell.find('.article').val();
        $.ajax({
            url: ajax_path + 'portfolio/delete.php',
            type: 'POST',
            data: ({'article' : article}),
            success: function(data){
                alert(data);
                $cell.remove();

            }
        });
    });

    $photo_container.height($photo_container.height() - 2)
});

function delete_temp() {
    $.ajax({
        type: "POST",
        url: ajax_path + "directory/delete.php"
    });
    return false;
}