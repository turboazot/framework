<?php /* Smarty version 3.1.27, created on 2016-02-22 15:47:47
         compiled from "D:\Ampps\www\absolute\admin\application\view\templates\prt_course-table.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:932056cb1183149ba1_66605897%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcadaa9e7796d8d5c20f7f233568e72c4b590e6b' => 
    array (
      0 => 'D:\\Ampps\\www\\absolute\\admin\\application\\view\\templates\\prt_course-table.tpl',
      1 => 1452432352,
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
    '053d2fe03f568d3d4c80255604d7063b37ff6a38' => 
    array (
      0 => '053d2fe03f568d3d4c80255604d7063b37ff6a38',
      1 => 0,
      2 => 'string',
    ),
    'eb950abda23738028c791a6071d258e39f5b0029' => 
    array (
      0 => 'D:\\Ampps\\www\\absolute\\admin\\application\\view\\templates\\prt_sidebar.tpl',
      1 => 1453424223,
      2 => 'file',
    ),
    'f561acd1cf310d48d15e95cdd9079cab5b1ad435' => 
    array (
      0 => 'D:\\Ampps\\www\\absolute\\admin\\application\\view\\templates\\prt_panel-header.tpl',
      1 => 1452427382,
      2 => 'file',
    ),
    'c1e18c914fad34520f7dd12a936fe1dc4ab15a18' => 
    array (
      0 => 'D:\\Ampps\\www\\absolute\\admin\\application\\view\\templates\\prt_footer.tpl',
      1 => 1452296361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '932056cb1183149ba1_66605897',
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
  'unifunc' => 'content_56cb1183987394_89164424',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56cb1183987394_89164424')) {
function content_56cb1183987394_89164424 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '932056cb1183149ba1_66605897';
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
$_smarty_tpl->properties['nocache_hash'] = '932056cb1183149ba1_66605897';
?>


    <?php /*  Call merged included template "prt_sidebar.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1776756cb118381bec4_96192377', 'content_56cb118381bec8_33902493');
/*  End of included template "prt_sidebar.tpl" */?>


    <div class="content">

        <?php /*  Call merged included template "prt_panel-header.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_panel-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '95756cb11838bffe0_10427553', 'content_56cb11838bc165_72396469');
/*  End of included template "prt_panel-header.tpl" */?>


        <div class="main-content">

            
    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
course-add" class="btn btn-primary add-btn"><i class="fa fa-plus"></i> Добавить курс</a>
    <div class="panel panel-default">
        <table class="table table-bordered table-striped">
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Стоимость($)</th>
                <th>Статус</th>
                <th>Панель управления</th>
            </tr>
            <?php
$_from = $_smarty_tpl->tpl_vars['courses']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['course'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['course']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['course']->value) {
$_smarty_tpl->tpl_vars['course']->_loop = true;
$foreach_course_Sav = $_smarty_tpl->tpl_vars['course'];
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['course']->value['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['course']->value['title'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['course']->value['price'];?>
</td>
                    <td><?php if ($_smarty_tpl->tpl_vars['course']->value['status']) {?>Опубликовано<?php } else { ?>Черновик<?php }?></td>
                    <td>
                        <a class="edit-button" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
course-edit/<?php echo $_smarty_tpl->tpl_vars['course']->value['id'];?>
">Изменить</a>
                        <a class="delete-button" href="#" id="<?php echo $_smarty_tpl->tpl_vars['course']->value['id'];?>
">Удалить</a>
                    </td>
                </tr>
            <?php
$_smarty_tpl->tpl_vars['course'] = $foreach_course_Sav;
}
?>

        </table>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_path']->value;?>
delete-course.js"><?php echo '</script'; ?>
>
    </div>


            <?php /*  Call merged included template "prt_footer.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '2073956cb1183973b18_79964655', 'content_56cb118396fc98_33844654');
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
/*%%SmartyHeaderCode:1776756cb118381bec4_96192377%%*/
if ($_valid && !is_callable('content_56cb118381bec8_33902493')) {
function content_56cb118381bec8_33902493 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1776756cb118381bec4_96192377';
?>
<div class="sidebar-nav">
    <ul>
        <li><a data-target=".users-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-user"></i> Пользователи<i class="fa fa-collapse"></i></a></li>
        <li><ul class="users-menu nav nav-list collapse">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
profile-table"><span class="fa fa-caret-right"></span> Пользователи</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
trainer-table"><span class="fa fa-caret-right"></span> Тренера</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
ban-table"><span class="fa fa-caret-right"></span> Бан-лист</a></li>
            </ul></li>

        <li><a href="#" data-target=".articles-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-book"></i> Статьи<i class="fa fa-collapse"></i></a></li>
        <li><ul class="articles-menu nav nav-list collapse">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
article-add"><span class="fa fa-caret-right"></span> Добавить статью</a></li>
                <li ><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
article-table"><span class="fa fa-caret-right"></span> Мои статьи</a></li>
            </ul></li>

        <li><a href="#" data-target=".news-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-info-circle"></i> Новости<i class="fa fa-collapse"></i></a></li>
        <li><ul class="news-menu nav nav-list collapse">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
new-add"><span class="fa fa-caret-right"></span> Добавить новость</a></li>
                <li ><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
new-table"><span class="fa fa-caret-right"></span> Мои новости</a></li>
            </ul></li>

        <li><a href="#" data-target=".courses-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-graduation-cap"></i> Курсы<i class="fa fa-collapse"></i></a></li>
        <li><ul class="courses-menu nav nav-list collapse">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
course-add"><span class="fa fa-caret-right"></span> Добавить курс</a></li>
                <li ><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
course-table"><span class="fa fa-caret-right"></span> Мои курсы</a></li>
            </ul></li>

        <li><a data-target=".product-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-shopping-cart"></i> Товары<i class="fa fa-collapse"></i></a></li>
        <li><ul class="product-menu nav nav-list collapse">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
product-add"><span class="fa fa-caret-right"></span> Добавить товар</a></li>
                <li ><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
product-table"><span class="fa fa-caret-right"></span> Мои товары</a></li>
                <li ><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
product-type-table"><span class="fa fa-caret-right"></span> Типы товаров</a></li>
            </ul></li>

        <li><a href="#" data-target=".questions-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-graduation-cap"></i> Анкета<i class="fa fa-collapse"></i></a></li>
        <li><ul class="questions-menu nav nav-list collapse">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
questions-table/1"><span class="fa fa-caret-right"></span> Шаг 1</a></li>
                <li ><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
questions-table/2"><span class="fa fa-caret-right"></span> Шаг 2</a></li>
            </ul></li>
    </ul>
</div><?php
/*/%%SmartyNocache:1776756cb118381bec4_96192377%%*/
}
}
?><?php
/*%%SmartyHeaderCode:95756cb11838bffe0_10427553%%*/
if ($_valid && !is_callable('content_56cb11838bc165_72396469')) {
function content_56cb11838bc165_72396469 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '95756cb11838bffe0_10427553';
?>
<div class="header">
    <div class="stats">
        <p class="stat"><span class="label label-info">5</span> Tickets</p>
        <p class="stat"><span class="label label-success">27</span> Tasks</p>
        <p class="stat"><span class="label label-danger">15</span> Overdue</p>
    </div>

    <h1 class="page-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
    <ul class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li class="active">Dashboard</li>
    </ul>

</div><?php
/*/%%SmartyNocache:95756cb11838bffe0_10427553%%*/
}
}
?><?php
/*%%SmartyHeaderCode:2073956cb1183973b18_79964655%%*/
if ($_valid && !is_callable('content_56cb118396fc98_33844654')) {
function content_56cb118396fc98_33844654 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2073956cb1183973b18_79964655';
?>
<footer>
    <hr>

    <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
    <p class="pull-right">A <a href="http://www.portnine.com/bootstrap-themes" target="_blank">Free Bootstrap Theme</a> by <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
    <p>© 2014 <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
</footer><?php
/*/%%SmartyNocache:2073956cb1183973b18_79964655%%*/
}
}
?>