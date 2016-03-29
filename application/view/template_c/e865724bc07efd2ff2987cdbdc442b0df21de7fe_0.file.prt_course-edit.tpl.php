<?php /* Smarty version 3.1.27, created on 2016-01-10 15:50:10
         compiled from "D:\Ampps\www\absolute\admin\application\view\templates\prt_course-edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1286556926192657288_13202529%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e865724bc07efd2ff2987cdbdc442b0df21de7fe' => 
    array (
      0 => 'D:\\Ampps\\www\\absolute\\admin\\application\\view\\templates\\prt_course-edit.tpl',
      1 => 1452426403,
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
    '3b0119465d9a618a64755a3975a6d1276ca6543d' => 
    array (
      0 => '3b0119465d9a618a64755a3975a6d1276ca6543d',
      1 => 0,
      2 => 'string',
    ),
    'eb950abda23738028c791a6071d258e39f5b0029' => 
    array (
      0 => 'D:\\Ampps\\www\\absolute\\admin\\application\\view\\templates\\prt_sidebar.tpl',
      1 => 1452433690,
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
  'nocache_hash' => '1286556926192657288_13202529',
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
  'unifunc' => 'content_569261927706c8_88123942',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569261927706c8_88123942')) {
function content_569261927706c8_88123942 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1286556926192657288_13202529';
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
$_smarty_tpl->properties['nocache_hash'] = '1286556926192657288_13202529';
?>


    <?php /*  Call merged included template "prt_sidebar.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '27604569261926ef821_37124392', 'content_569261926ef820_35154104');
/*  End of included template "prt_sidebar.tpl" */?>


    <div class="content">

        <?php /*  Call merged included template "prt_panel-header.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_panel-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '226425692619271e636_20979444', 'content_5692619271e630_87830822');
/*  End of included template "prt_panel-header.tpl" */?>


        <div class="main-content">

            
    <div class="alert">

    </div>
    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
course-table" class="btn btn-default btn-table">Список курсов</a>
    <div class="panel panel-default">
        <div class="header-input">
            <input class="header-value" placeholder="Название курса" type="text" value="<?php echo $_smarty_tpl->tpl_vars['course']->value['title'];?>
"/>
        </div>
        <div class="text-editor-container col-md-9">
            <textarea class="text-editor"><?php echo $_smarty_tpl->tpl_vars['course']->value['content'];?>
</textarea>
        </div>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['libs_path']->value;?>
tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_path']->value;?>
tinymce-init.js"><?php echo '</script'; ?>
>
        <div class="col-md-3 edit-sidebar">
            <?php if ($_smarty_tpl->tpl_vars['course_id']->value) {?>
                <div class="edit-info">
                    <span class="field-label">Статус: </span><span class="status-value"><?php if ($_smarty_tpl->tpl_vars['course']->value['status']) {?>Опубликован<?php } else { ?>Черновик<?php }?></span><br/>
                </div>
            <?php }?>
            <textarea placeholder="Краткое описание курса" class="short-description" id="" cols="30" rows="10"><?php echo $_smarty_tpl->tpl_vars['course']->value['short_description'];?>
</textarea>
            <input type="text" placeholder="Цена" class="post-price" value="<?php echo $_smarty_tpl->tpl_vars['course']->value['price'];?>
"/>
            <div class="edit-buttons">
                <button class="btn btn-primary" id="public-course">Опубликовать</button>
                <button class="btn btn-default" id="save-course">Сохранить</button>
                <button class="btn btn-danger" id="delete-course">Удалить</button>
            </div>
        </div>
        <?php if (!$_smarty_tpl->tpl_vars['course_id']->value) {?>
            <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_path']->value;?>
add-course.js"><?php echo '</script'; ?>
>
        <?php } else { ?>
            <?php echo '<script'; ?>
 type="text/javascript">
                var course_id = <?php echo $_smarty_tpl->tpl_vars['course_id']->value;?>
;
            <?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_path']->value;?>
update-course.js"><?php echo '</script'; ?>
>
        <?php }?>
    </div>


            <?php /*  Call merged included template "prt_footer.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '2899256926192758fb8_31965732', 'content_56926192758fb4_10315708');
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
/*%%SmartyHeaderCode:27604569261926ef821_37124392%%*/
if ($_valid && !is_callable('content_569261926ef820_35154104')) {
function content_569261926ef820_35154104 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '27604569261926ef821_37124392';
?>
<div class="sidebar-nav">
    <ul>
        <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-dashboard"></i> Dashboard<i class="fa fa-collapse"></i></a></li>
        <li><ul class="dashboard-menu nav nav-list collapse in">
                <li><a href="index.html"><span class="fa fa-caret-right"></span> Main</a></li>
                <li ><a href="users.html"><span class="fa fa-caret-right"></span> User List</a></li>
                <li ><a href="user.html"><span class="fa fa-caret-right"></span> User Profile</a></li>
                <li ><a href="media.html"><span class="fa fa-caret-right"></span> Media</a></li>
                <li ><a href="calendar.html"><span class="fa fa-caret-right"></span> Calendar</a></li>
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

        <li><a href="#" data-target=".product-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-shopping-cart"></i> Товары<i class="fa fa-collapse"></i></a></li>
        <li><ul class="product-menu nav nav-list collapse">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
product-add"><span class="fa fa-caret-right"></span> Добавить товар</a></li>
                <li ><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
product-table"><span class="fa fa-caret-right"></span> Мои товары</a></li>
            </ul></li>

        <li data-popover="true" data-content="Items in this group require a <strong><a href='http://portnine.com/bootstrap-themes/aircraft' target='blank'>premium license</a><strong>." rel="popover" data-placement="right"><a href="#" data-target=".premium-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-fighter-jet"></i> Premium Features<i class="fa fa-collapse"></i></a></li>
        <li><ul class="premium-menu nav nav-list collapse">
                <li class="visible-xs visible-sm"><a href="#">- Premium features require a license -</a></span>
                <li ><a href="premium-profile.html"><span class="fa fa-caret-right"></span> Enhanced Profile</a></li>
                <li ><a href="premium-blog.html"><span class="fa fa-caret-right"></span> Blog</a></li>
                <li ><a href="premium-blog-item.html"><span class="fa fa-caret-right"></span> Blog Page</a></li>
                <li ><a href="premium-pricing-tables.html"><span class="fa fa-caret-right"></span> Pricing Tables</a></li>
                <li ><a href="premium-upgrade-account.html"><span class="fa fa-caret-right"></span> Upgrade Account</a></li>
                <li ><a href="premium-widgets.html"><span class="fa fa-caret-right"></span> Widgets</a></li>
                <li ><a href="premium-timeline.html"><span class="fa fa-caret-right"></span> Activity Timeline</a></li>
                <li ><a href="premium-users.html"><span class="fa fa-caret-right"></span> Enhanced Users List</a></li>
                <li ><a href="premium-media.html"><span class="fa fa-caret-right"></span> Enhanced Media</a></li>
                <li ><a href="premium-invoice.html"><span class="fa fa-caret-right"></span> Invoice</a></li>
                <li ><a href="premium-build.html"><span class="fa fa-caret-right"></span> Advanced Tools</a></li>
                <li ><a href="premium-colors.html"><span class="fa fa-caret-right"></span> Additional Color Themes</a></li>
            </ul></li>

        <li><a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-briefcase"></i> Account <span class="label label-info">+3</span></a></li>
        <li><ul class="accounts-menu nav nav-list collapse">
                <li ><a href="sign-in.html"><span class="fa fa-caret-right"></span> Sign In</a></li>
                <li ><a href="sign-up.html"><span class="fa fa-caret-right"></span> Sign Up</a></li>
                <li ><a href="reset-password.html"><span class="fa fa-caret-right"></span> Reset Password</a></li>
            </ul></li>

        <li><a href="#" data-target=".legal-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-legal"></i> Legal<i class="fa fa-collapse"></i></a></li>
        <li><ul class="legal-menu nav nav-list collapse">
                <li ><a href="privacy-policy.html"><span class="fa fa-caret-right"></span> Privacy Policy</a></li>
                <li ><a href="terms-and-conditions.html"><span class="fa fa-caret-right"></span> Terms and Conditions</a></li>
            </ul></li>

        <li><a href="help.html" class="nav-header"><i class="fa fa-fw fa-question-circle"></i> Help</a></li>
        <li><a href="faq.html" class="nav-header"><i class="fa fa-fw fa-comment"></i> Faq</a></li>
        <li><a href="http://portnine.com/bootstrap-themes/aircraft" class="nav-header" target="blank"><i class="fa fa-fw fa-heart"></i> Get Premium</a></li>
    </ul>
</div><?php
/*/%%SmartyNocache:27604569261926ef821_37124392%%*/
}
}
?><?php
/*%%SmartyHeaderCode:226425692619271e636_20979444%%*/
if ($_valid && !is_callable('content_5692619271e630_87830822')) {
function content_5692619271e630_87830822 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '226425692619271e636_20979444';
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
/*/%%SmartyNocache:226425692619271e636_20979444%%*/
}
}
?><?php
/*%%SmartyHeaderCode:2899256926192758fb8_31965732%%*/
if ($_valid && !is_callable('content_56926192758fb4_10315708')) {
function content_56926192758fb4_10315708 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2899256926192758fb8_31965732';
?>
<footer>
    <hr>

    <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
    <p class="pull-right">A <a href="http://www.portnine.com/bootstrap-themes" target="_blank">Free Bootstrap Theme</a> by <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
    <p>© 2014 <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
</footer><?php
/*/%%SmartyNocache:2899256926192758fb8_31965732%%*/
}
}
?>