<?php /* Smarty version 3.1.27, created on 2016-02-22 16:30:56
         compiled from "D:\Ampps\www\absolute\admin\application\view\templates\prt_profile-table.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2160456cb1ba0463100_00704203%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f930281ded875516196af4b651e9ffaf6c23d35' => 
    array (
      0 => 'D:\\Ampps\\www\\absolute\\admin\\application\\view\\templates\\prt_profile-table.tpl',
      1 => 1453151147,
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
    'ba61fccd94137574ca8876e18390a1530b8b7151' => 
    array (
      0 => 'ba61fccd94137574ca8876e18390a1530b8b7151',
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
  'nocache_hash' => '2160456cb1ba0463100_00704203',
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
  'unifunc' => 'content_56cb1ba05b3050_65705923',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56cb1ba05b3050_65705923')) {
function content_56cb1ba05b3050_65705923 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2160456cb1ba0463100_00704203';
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
$_smarty_tpl->properties['nocache_hash'] = '2160456cb1ba0463100_00704203';
?>


    <?php /*  Call merged included template "prt_sidebar.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1704356cb1ba050b0a2_36501868', 'content_56cb1ba0507227_72212223');
/*  End of included template "prt_sidebar.tpl" */?>


    <div class="content">

        <?php /*  Call merged included template "prt_panel-header.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_panel-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '2119356cb1ba052a4b9_96746401', 'content_56cb1ba052a4b3_60047226');
/*  End of included template "prt_panel-header.tpl" */?>


        <div class="main-content">

            
    <?php echo $_smarty_tpl->tpl_vars['filter_form']->value;?>

    <div class="panel panel-default">
        <table class="table profile-table">
            <thead>
            <tr>
                <th>#</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>E-mail@</th>
                <th>Статус</th>
                <th>Состояние</th>
                <th style="width: 10em;"></th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->tpl_vars['profiles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['profile'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['profile']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['profile']->value) {
$_smarty_tpl->tpl_vars['profile']->_loop = true;
$foreach_profile_Sav = $_smarty_tpl->tpl_vars['profile'];
?>
                <tr>
                    <td id="profile_id"><?php echo $_smarty_tpl->tpl_vars['profile']->value['id'];?>
</td>
                    <td id="first_name"><?php echo $_smarty_tpl->tpl_vars['profile']->value['first_name'];?>
</td>
                    <td id="last_name"><?php echo $_smarty_tpl->tpl_vars['profile']->value['last_name'];?>
</td>
                    <td id="email"><?php echo $_smarty_tpl->tpl_vars['profile']->value['email'];?>
</td>
                    <td><?php if ($_smarty_tpl->tpl_vars['profile']->value['status']) {?>В сети<?php } else { ?>Не в сети<?php }?></td>
                    <td><?php if ($_smarty_tpl->tpl_vars['profile']->value['ban']) {?>Забанен<?php } else { ?>Не забанен<?php }?></td>
                    <td class="row-panel">
                        <a title="Перейти" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['url'];?>
"><i class="fa fa-eye"></i></a>
                        <?php if (!$_smarty_tpl->tpl_vars['profile']->value['trainer']) {?>
                            <a title="Сделать тренером" id="set_trainer" href=""><i class="fa fa-magic"></i></a>
                            <a title="Убрать статус тренера" id="delete_trainer" href="" style="display: none;"><i class="fa fa-check"></i></a>
                        <?php } else { ?>
                            <a title="Убрать статус тренера" id="delete_trainer" href=""><i class="fa fa-check"></i></a>
                            <a title="Сделать тренером" id="set_trainer" href="" style="display: none;"><i class="fa fa-magic"></i></a>
                        <?php }?>

                        <?php if (!$_smarty_tpl->tpl_vars['profile']->value['ban']) {?>
                            <a title="Забанить" class="ban-btn"><i class="fa fa-ban"></i></a>
                        <?php }?>
                        <a title="Удалить" href="#myModal" id="pre_delete_user" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
            <?php
$_smarty_tpl->tpl_vars['profile'] = $foreach_profile_Sav;
}
?>
            </tbody>
        </table>
        <?php if (($_smarty_tpl->tpl_vars['profiles_count']->value > $_smarty_tpl->tpl_vars['profiles_limit']->value) && !$_smarty_tpl->tpl_vars['s_first_name']->value && !$_smarty_tpl->tpl_vars['s_last_name']->value) {?>
            <a class="load-more">показать ещё 10 пользователей</a>
        <?php }?>
        <div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">Подтверждение удаления</h3>
                    </div>
                    <div class="modal-body">
                        <p class="error-text"><i class="fa fa-warning modal-icon"></i>Вы уверены что хотите удалить этого пользователя?<br>Это действие нельзя будет отменить!</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Отменить</button>
                        <button class="btn btn-danger" id="delete_user" data-dismiss="modal">Удалить</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="setBanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Забанить</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="dtp_input1" class="col-md-4 control-label">Забанить до:</label>
                            <div class="input-group date form_datetime col-md-8" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                                <input class="form-control" size="16" type="text" value="" readonly>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                            </div>
                            <input type="hidden" id="dtp_input1" value="" /><br/>
                        </div>

                        <div class="reason-field form-group">
                            <label class="col-md-4" for="reason_input">Причина бана:</label>
                            <div class="reason-input col-md-8">
                                <input type="text" class="form-control" name="reason_input" id="reason_input"/>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">закрыть</button>
                        <button type="button" class="btn btn-primary" id="ban_user">забанить</button>
                    </div>
                </div>
            </div>
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_libs_path']->value;?>
bootstrap/bootstrap-datetimepicker.min.css"/>
            <style type="text/css">
                #setBanModal .modal-dialog {
                    width: 550px;
                }
                .reason-input {
                    padding-left: 0;
                    padding-right: 0;
                }
            </style>
            <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_libs_path']->value;?>
bootstrap-datetimepicker.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_libs_path']->value;?>
bootstrap-datetimepicker.ru.js"><?php echo '</script'; ?>
>
        </div>
        <div class="modal fade" id="setTrainerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Забанить</h4>
                    </div>
                    <div class="modal-body">
                        <textarea placeholder="краткое описание тренера" id="trainer_description" cols="30" rows="10"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">закрыть</button>
                        <button type="button" class="btn btn-primary" id="add_trainer">добавить тренера</button>
                    </div>
                </div>
            </div>
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_libs_path']->value;?>
bootstrap/bootstrap-datetimepicker.min.css"/>
            <style type="text/css">
                #setTrainerModal .modal-dialog {
                    width: 550px;
                }

                #setTrainerModal #trainer_description {
                    width: 100%;
                    padding: 10px;
                    height: 100px;
                }
            </style>
        </div>
        <?php echo '<script'; ?>
 type="text/javascript">
            var s_first_name = '<?php echo $_smarty_tpl->tpl_vars['s_first_name']->value;?>
';
            var s_last_name = '<?php echo $_smarty_tpl->tpl_vars['s_last_name']->value;?>
';

            var profiles_count = <?php echo $_smarty_tpl->tpl_vars['profiles_count']->value;?>
;
            var profiles_limit = <?php echo $_smarty_tpl->tpl_vars['profiles_limit']->value;?>
;
            var profiles_cur_limit = <?php echo $_smarty_tpl->tpl_vars['profiles_limit']->value;?>
;
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_path']->value;?>
profile-table.js"><?php echo '</script'; ?>
>
    </div>


            <?php /*  Call merged included template "prt_footer.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '2993556cb1ba058fdc7_95202390', 'content_56cb1ba058bf41_90478922');
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
/*%%SmartyHeaderCode:1704356cb1ba050b0a2_36501868%%*/
if ($_valid && !is_callable('content_56cb1ba0507227_72212223')) {
function content_56cb1ba0507227_72212223 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1704356cb1ba050b0a2_36501868';
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
/*/%%SmartyNocache:1704356cb1ba050b0a2_36501868%%*/
}
}
?><?php
/*%%SmartyHeaderCode:2119356cb1ba052a4b9_96746401%%*/
if ($_valid && !is_callable('content_56cb1ba052a4b3_60047226')) {
function content_56cb1ba052a4b3_60047226 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2119356cb1ba052a4b9_96746401';
?>
<div class="header">
    <h1 class="page-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
</div><?php
/*/%%SmartyNocache:2119356cb1ba052a4b9_96746401%%*/
}
}
?><?php
/*%%SmartyHeaderCode:2993556cb1ba058fdc7_95202390%%*/
if ($_valid && !is_callable('content_56cb1ba058bf41_90478922')) {
function content_56cb1ba058bf41_90478922 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2993556cb1ba058fdc7_95202390';
?>
<footer>
    <hr>
    <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
    <p>© 2016 <a href="http://absolute.org" target="_blank">ABSOLUTE</a></p>
</footer><?php
/*/%%SmartyNocache:2993556cb1ba058fdc7_95202390%%*/
}
}
?>