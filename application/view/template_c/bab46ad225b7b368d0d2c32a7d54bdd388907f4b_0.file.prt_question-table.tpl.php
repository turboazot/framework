<?php /* Smarty version 3.1.27, created on 2016-02-22 16:19:12
         compiled from "D:\Ampps\www\absolute\admin\application\view\templates\prt_question-table.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2238856cb18e0d33f77_43553223%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bab46ad225b7b368d0d2c32a7d54bdd388907f4b' => 
    array (
      0 => 'D:\\Ampps\\www\\absolute\\admin\\application\\view\\templates\\prt_question-table.tpl',
      1 => 1453304510,
      2 => 'file',
    ),
    '3b2c001786c29f1527bc51f55d9448359935077c' => 
    array (
      0 => 'D:\\Ampps\\www\\absolute\\admin\\application\\view\\templates\\prt_panel-container.tpl',
      1 => 1452296466,
      2 => 'file',
    ),
    'd5025d8cacd3f00674480e4e8d4a83c7b8fbf8e9' => 
    array (
      0 => 'D:\\Ampps\\www\\absolute\\admin\\application\\view\\templates\\tpl_index.tpl',
      1 => 1452385694,
      2 => 'file',
    ),
    '4638d0d976f75ae48cc6defa514c48ebe2f43d23' => 
    array (
      0 => '4638d0d976f75ae48cc6defa514c48ebe2f43d23',
      1 => 0,
      2 => 'string',
    ),
    'eb950abda23738028c791a6071d258e39f5b0029' => 
    array (
      0 => 'D:\\Ampps\\www\\absolute\\admin\\application\\view\\templates\\prt_sidebar.tpl',
      1 => 1456150706,
      2 => 'file',
    ),
    'f561acd1cf310d48d15e95cdd9079cab5b1ad435' => 
    array (
      0 => 'D:\\Ampps\\www\\absolute\\admin\\application\\view\\templates\\prt_panel-header.tpl',
      1 => 1456149198,
      2 => 'file',
    ),
    'c1e18c914fad34520f7dd12a936fe1dc4ab15a18' => 
    array (
      0 => 'D:\\Ampps\\www\\absolute\\admin\\application\\view\\templates\\prt_footer.tpl',
      1 => 1456150189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2238856cb18e0d33f77_43553223',
  'variables' => 
  array (
    'css_libs_path' => 0,
    'js_libs_path' => 0,
    'css_path' => 0,
    'site_url' => 0,
    'libs_path' => 0,
    'js_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56cb18e0ec26c7_49796409',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56cb18e0ec26c7_49796409')) {
function content_56cb18e0ec26c7_49796409 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2238856cb18e0d33f77_43553223';
?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Bootstrap Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css_libs_path']->value;?>
bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_libs_path']->value;?>
font-awesome/font-awesome.css">

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js_libs_path']->value;?>
jquery-1.11.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>


    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css_path']->value;?>
style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css_path']->value;?>
theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css_path']->value;?>
premium.css">

</head>
<body class=" theme-blue">

<!-- Demo page code -->

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="http://html5shim.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
<![endif]-->

<!-- Le fav and touch icons -->



<!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
<!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
<!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
<!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->

<!--<![endif]-->

<?php echo $_smarty_tpl->getSubTemplate ("prt_navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
 type="text/javascript">
    var site_url = '<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
';
    var libs_path = '<?php echo $_smarty_tpl->tpl_vars['libs_path']->value;?>
';
<?php echo '</script'; ?>
>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2238856cb18e0d33f77_43553223';
?>


    <?php /*  Call merged included template "prt_sidebar.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1149156cb18e0deb915_62082245', 'content_56cb18e0deb914_82511326');
/*  End of included template "prt_sidebar.tpl" */?>


    <div class="content">

        <?php /*  Call merged included template "prt_panel-header.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_panel-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '348156cb18e0e0eba3_00221115', 'content_56cb18e0e0eba0_95789038');
/*  End of included template "prt_panel-header.tpl" */?>


        <div class="main-content">

            
    <a class="btn btn-primary add-btn" role="button" data-toggle="modal" data-target="#editQuestionModal"><i class="fa fa-plus"></i> Добавить вопрос</a>
    <div class="panel panel-default">
        <table class="table table-bordered table-striped">
            <tr>
                <th>ID</th>
                <th>Номер</th>
                <th>Вопрос</th>
                <th>Метка</th>
                <th>Панель управления</th>
            </tr>
            <?php
$_from = $_smarty_tpl->tpl_vars['questions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['question'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['question']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
$foreach_question_Sav = $_smarty_tpl->tpl_vars['question'];
?>
                <tr>
                    <td id="id"><?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
</td>
                    <td id="seq_number"><?php echo $_smarty_tpl->tpl_vars['question']->value['seq_number'];?>
</td>
                    <td id="body"><?php echo $_smarty_tpl->tpl_vars['question']->value['body'];?>
</td>
                    <td id="label"><?php echo $_smarty_tpl->tpl_vars['question']->value['label'];?>
</td>
                    <td>
                        <a title="Изменить" id="update" role="button" data-toggle="modal" data-target="#editQuestionModal"><i class="fa fa-pencil"></i></a>
                        <a title="Удалить" href="#myModal" id="delete" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
            <?php
$_smarty_tpl->tpl_vars['question'] = $foreach_question_Sav;
}
?>
        </table>
        <div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">Подтверждение удаления</h3>
                    </div>
                    <div class="modal-body">
                        <p class="error-text"><i class="fa fa-warning modal-icon"></i>Вы уверены что хотите удалить этот вопрос?<br>Это действие нельзя будет отменить!</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Отменить</button>
                        <button class="btn btn-danger" id="delete_question" data-dismiss="modal">Удалить</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="editQuestionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"></h4>
                    </div>
                    <div class="modal-body">
                        <div class="add-question-field form-group">
                            <label for="q_body">Ваш вопрос</label>
                            <textarea class="form-control" id="q_body"></textarea>
                        </div>
                        <div class="add-question-field form-group">
                            <label for="q_label">Метка</label>
                            <input class="form-control" id="q_label" type="text"/>
                        </div>
                        <div class="add-question-field form-group">
                            <label for="q_number">Номер вопроса в анкете:</label><br/>
                            <span style="font-size: 10px;">Номер вопроса должен быть уникальным!</span>
                            <input class="form-control" id="q_number" type="text"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary q-edit" id="q_edit"></button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">закрыть</button>
                    </div>
                </div>
            </div>
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_libs_path']->value;?>
bootstrap/bootstrap-datetimepicker.min.css"/>
            <style type="text/css">
                #editQuestionModal .modal-dialog {
                    width: 550px;
                }

                #editQuestionModal #q_body {
                    width: 100%;
                    padding: 10px;
                    height: 100px;
                }
            </style>
        </div>
        <?php echo '<script'; ?>
 type="text/javascript">
            var step = <?php echo $_smarty_tpl->tpl_vars['step']->value;?>
;
            var question_id;
            var question_row;
            $("#q_number").keypress(function (e) {
                //if the letter is not digit then display error and don't type anything
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                    //display error message
                    return false;
                }
            });

            $(document).on('click', '#update', function () {
                var upd_btn = $(this);
                question_row = upd_btn.closest('tr');
                question_id = question_row.find('#id').html();
                var question_body = question_row.find('#body').html();
                var question_label = question_row.find('#label').html();
                var question_seq_number = question_row.find('#seq_number').html();
                $('#q_body').val(question_body);
                $('#q_label').val(question_label);
                $('#q_number').val(question_seq_number);
                $('#editQuestionModal .modal-header h4').html('Изменить вопрос');
                $('#q_edit').html('Изменить');
                $('#q_edit').attr('id', 'q_update');
            });

            $('.add-btn').click(function () {
                $('#editQuestionModal .modal-header h4').html('Добавить вопрос');
                $('#q_edit').html('Добавить');
                $('#q_edit').attr('id', 'q_add');
            });

            $(document).on('click', '#q_add', function () {
                var body = $('#q_body').val();
                var label = $('#q_label').val();
                var seq_number = $('#q_number').val();
                ajax_add_question(body, label, seq_number, step, function (data) {
                    console.log(data);
                    location.reload();
                });
            });

            $(document).on('click', '#q_update', function () {
                var id = question_id;
                var body = $('#q_body').val();
                var label = $('#q_label').val();
                var seq_number = $('#q_number').val();
                ajax_update_question(id, body, label, seq_number, step, function (data) {
                    console.log(data);
                    question_row.find('#body').html(body);
                    question_row.find('#label').html(label);
                    question_row.find('#seq_number').html(seq_number);
                    $('#editQuestionModal').modal('hide');
                });
            });

            $('#editQuestionModal').on('hidden.bs.modal', function () {
                $('#q_body').val('');
                $('#q_label').val('');
                $('#q_number').val('');
                $('.q-edit').attr('id', 'q_edit');
            });

            $(document).on('click', '#delete', function () {
                var del_btn = $(this);
                question_row = del_btn.closest('tr');
                question_id = question_row.find('#id').html();
            });

            $('#delete_question').click(function () {
                ajax_delete_question(question_id, function (data) {
                    console.log(data);
                    question_row.remove();
                });
            });
        <?php echo '</script'; ?>
>
    </div>


            <?php /*  Call merged included template "prt_footer.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1337556cb18e0e80031_99651968', 'content_56cb18e0e80037_20402475');
/*  End of included template "prt_footer.tpl" */?>

        </div>
    </div>




<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js_libs_path']->value;?>
bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_path']->value;?>
tooltip.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_path']->value;?>
theme-color.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_path']->value;?>
sidebar-nav.js"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("scr_ajax_functions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



</body></html>
<?php }
}
?><?php
/*%%SmartyHeaderCode:1149156cb18e0deb915_62082245%%*/
if ($_valid && !is_callable('content_56cb18e0deb914_82511326')) {
function content_56cb18e0deb914_82511326 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1149156cb18e0deb915_62082245';
?>
<div class="sidebar-nav">
    <ul>
        <li><a data-target=".users-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-user"></i> Пользователи</a></li>
        <li><ul class="users-menu nav nav-list collapse">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
profile-table"><span class="fa fa-caret-right"></span> Пользователи</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
trainer-table"><span class="fa fa-caret-right"></span> Тренера</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
ban-table"><span class="fa fa-caret-right"></span> Бан-лист</a></li>
            </ul></li>

        <li><a data-target=".articles-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-book"></i> Статьи</a></li>
        <li><ul class="articles-menu nav nav-list collapse">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
article-add"><span class="fa fa-caret-right"></span> Добавить статью</a></li>
                <li ><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
article-table"><span class="fa fa-caret-right"></span> Мои статьи</a></li>
            </ul></li>

        <li><a data-target=".news-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-info-circle"></i> Новости</a></li>
        <li><ul class="news-menu nav nav-list collapse">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
new-add"><span class="fa fa-caret-right"></span> Добавить новость</a></li>
                <li ><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
new-table"><span class="fa fa-caret-right"></span> Мои новости</a></li>
            </ul></li>

        <li><a data-target=".product-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-shopping-cart"></i> Товары</a></li>
        <li><ul class="product-menu nav nav-list collapse">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
product-add"><span class="fa fa-caret-right"></span> Добавить товар</a></li>
                <li ><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
product-table"><span class="fa fa-caret-right"></span> Мои товары</a></li>
                <li ><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
product-type-table"><span class="fa fa-caret-right"></span> Типы товаров</a></li>
            </ul></li>

        <li><a data-target=".questions-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-graduation-cap"></i> Анкета</a></li>
        <li><ul class="questions-menu nav nav-list collapse">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
questions-table/1"><span class="fa fa-caret-right"></span> Шаг 1</a></li>
                <li ><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
questions-table/2"><span class="fa fa-caret-right"></span> Шаг 2</a></li>
            </ul></li>
    </ul>
</div><?php
/*/%%SmartyNocache:1149156cb18e0deb915_62082245%%*/
}
}
?><?php
/*%%SmartyHeaderCode:348156cb18e0e0eba3_00221115%%*/
if ($_valid && !is_callable('content_56cb18e0e0eba0_95789038')) {
function content_56cb18e0e0eba0_95789038 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '348156cb18e0e0eba3_00221115';
?>
<div class="header">
    <h1 class="page-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
</div><?php
/*/%%SmartyNocache:348156cb18e0e0eba3_00221115%%*/
}
}
?><?php
/*%%SmartyHeaderCode:1337556cb18e0e80031_99651968%%*/
if ($_valid && !is_callable('content_56cb18e0e80037_20402475')) {
function content_56cb18e0e80037_20402475 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1337556cb18e0e80031_99651968';
?>
<footer>
    <hr>
    <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
    <p>© 2016 <a href="http://absolute.org" target="_blank">ABSOLUTE</a></p>
</footer><?php
/*/%%SmartyNocache:1337556cb18e0e80031_99651968%%*/
}
}
?>