<?php /* Smarty version 3.1.27, created on 2016-01-09 21:43:08
         compiled from "D:\Ampps\www\absolute\admin\application\view\templates\prt_article-edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:32119569162ccb2f743_42399565%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eabf3d0f395888bef1e44bdf9ccfb0da202e073' => 
    array (
      0 => 'D:\\Ampps\\www\\absolute\\admin\\application\\view\\templates\\prt_article-edit.tpl',
      1 => 1452368577,
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
      1 => 1452367805,
      2 => 'file',
    ),
    'dc5b211a0b58b8ad7d54ffe9efa4eb8a0144ab45' => 
    array (
      0 => 'dc5b211a0b58b8ad7d54ffe9efa4eb8a0144ab45',
      1 => 0,
      2 => 'string',
    ),
    'eb950abda23738028c791a6071d258e39f5b0029' => 
    array (
      0 => 'D:\\Ampps\\www\\absolute\\admin\\application\\view\\templates\\prt_sidebar.tpl',
      1 => 1452296069,
      2 => 'file',
    ),
    'f561acd1cf310d48d15e95cdd9079cab5b1ad435' => 
    array (
      0 => 'D:\\Ampps\\www\\absolute\\admin\\application\\view\\templates\\prt_panel-header.tpl',
      1 => 1452296145,
      2 => 'file',
    ),
    'c1e18c914fad34520f7dd12a936fe1dc4ab15a18' => 
    array (
      0 => 'D:\\Ampps\\www\\absolute\\admin\\application\\view\\templates\\prt_footer.tpl',
      1 => 1452296361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32119569162ccb2f743_42399565',
  'variables' => 
  array (
    'css_libs_path' => 0,
    'js_libs_path' => 0,
    'css_path' => 0,
    'libs_path' => 0,
    'js_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_569162ccc25909_04622120',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569162ccc25909_04622120')) {
function content_569162ccc25909_04622120 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '32119569162ccb2f743_42399565';
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
    var libs_path = '<?php echo $_smarty_tpl->tpl_vars['libs_path']->value;?>
';
<?php echo '</script'; ?>
>
<?php
$_smarty_tpl->properties['nocache_hash'] = '32119569162ccb2f743_42399565';
?>


    <?php /*  Call merged included template "prt_sidebar.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '16642569162ccbdb575_53654267', 'content_569162ccbdb576_36110188');
/*  End of included template "prt_sidebar.tpl" */?>


    <div class="content">

        <?php /*  Call merged included template "prt_panel-header.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_panel-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '29776569162ccbf6af6_80193024', 'content_569162ccbf2c75_41527559');
/*  End of included template "prt_panel-header.tpl" */?>


        <div class="main-content">

            
    <div class="panel panel-default">
        <div class="header-input">
            <input class="header-value" placeholder="Название статьи" type="text"/>
        </div>
        <div class="text-editor-container col-md-9">
            <textarea class="text-editor">Easy! You should check out MoxieManager!</textarea>
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
            <div class="edit-info">
                <span class="field-label">Статус: </span><span class="status-value">Опубликован</span><br/>
                <span class="field-label">Последнее изменение: </span><span class="date-value">21.02.16</span>
            </div>
            <textarea placeholder="Краткое описание статьи" class="short-description" id="" cols="30" rows="10"></textarea>
            <div class="edit-buttons">
                <button class="btn btn-primary" id="public-article">Опубликовать</button>
                <button class="btn btn-default" id="save-article">Сохранить</button>
                <button class="btn btn-danger" id="delete-article">Удалить</button>
            </div>

        </div>
        <?php echo '<script'; ?>
 type="text/javascript">
            $('#public-article').click(function () {
                var title = $('.header-value').val();
                var short_description = $('.short-description').val();
                var content = tinymce.activeEditor.getContent();
                var status = 1;
                ajax_add_article(title, short_description, content, status, function (data) {
                    alert(data);
                });
            });

            $('#save-article').click(function () {
                var title = $('.header-value').val();
                var short_description = $('.short-description').val();
                var content = tinymce.activeEditor.getContent();
                var status = 0;
                ajax_add_article(title, short_description, content, status, function (data) {
                    alert(data);
                });
            });
        <?php echo '</script'; ?>
>
    </div>


            <?php /*  Call merged included template "prt_footer.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '27470569162ccc0e209_46835462', 'content_569162ccc0e209_62110530');
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
/*%%SmartyHeaderCode:16642569162ccbdb575_53654267%%*/
if ($_valid && !is_callable('content_569162ccbdb576_36110188')) {
function content_569162ccbdb576_36110188 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '16642569162ccbdb575_53654267';
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
/*/%%SmartyNocache:16642569162ccbdb575_53654267%%*/
}
}
?><?php
/*%%SmartyHeaderCode:29776569162ccbf6af6_80193024%%*/
if ($_valid && !is_callable('content_569162ccbf2c75_41527559')) {
function content_569162ccbf2c75_41527559 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '29776569162ccbf6af6_80193024';
?>
<div class="header">
    <div class="stats">
        <p class="stat"><span class="label label-info">5</span> Tickets</p>
        <p class="stat"><span class="label label-success">27</span> Tasks</p>
        <p class="stat"><span class="label label-danger">15</span> Overdue</p>
    </div>

    <h1 class="page-title">Добавить статью</h1>
    <ul class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li class="active">Dashboard</li>
    </ul>

</div><?php
/*/%%SmartyNocache:29776569162ccbf6af6_80193024%%*/
}
}
?><?php
/*%%SmartyHeaderCode:27470569162ccc0e209_46835462%%*/
if ($_valid && !is_callable('content_569162ccc0e209_62110530')) {
function content_569162ccc0e209_62110530 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '27470569162ccc0e209_46835462';
?>
<footer>
    <hr>

    <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
    <p class="pull-right">A <a href="http://www.portnine.com/bootstrap-themes" target="_blank">Free Bootstrap Theme</a> by <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
    <p>© 2014 <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
</footer><?php
/*/%%SmartyNocache:27470569162ccc0e209_46835462%%*/
}
}
?>