<?php /* Smarty version 3.1.27, created on 2016-02-25 08:58:07
         compiled from "D:\Ampps\www\sofiart\admin\application\view\templates\prt_panel-container.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1265556cea5ff8e76e8_56049822%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e382139fc29f46f1ec08b0707f4d8be39ffb9b29' => 
    array (
      0 => 'D:\\Ampps\\www\\sofiart\\admin\\application\\view\\templates\\prt_panel-container.tpl',
      1 => 1452296466,
      2 => 'file',
    ),
    'e5af2126c5bc1bc36bef8960e1c50af9675dfdfa' => 
    array (
      0 => 'D:\\Ampps\\www\\sofiart\\admin\\application\\view\\templates\\tpl_index.tpl',
      1 => 1456382911,
      2 => 'file',
    ),
    'f03549dc5317d368c2db98f3314ceb4968b78c0a' => 
    array (
      0 => 'f03549dc5317d368c2db98f3314ceb4968b78c0a',
      1 => 0,
      2 => 'string',
    ),
    '5c9dbe02e79c6b6d6c3abb4927d3a9b629864483' => 
    array (
      0 => 'D:\\Ampps\\www\\sofiart\\admin\\application\\view\\templates\\prt_sidebar.tpl',
      1 => 1456347981,
      2 => 'file',
    ),
    '3b6a9481af89dc09ed97449209ab89502650ed6b' => 
    array (
      0 => 'D:\\Ampps\\www\\sofiart\\admin\\application\\view\\templates\\prt_panel-header.tpl',
      1 => 1456149198,
      2 => 'file',
    ),
    '866374f2311e85be7fd5c0fe2bd90e7224ff8be7' => 
    array (
      0 => 'D:\\Ampps\\www\\sofiart\\admin\\application\\view\\templates\\prt_footer.tpl',
      1 => 1456150189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1265556cea5ff8e76e8_56049822',
  'variables' => 
  array (
    'css_libs_path' => 0,
    'js_libs_path' => 0,
    'css_path' => 0,
    'site_url' => 0,
    'libs_path' => 0,
    'ajax_path' => 0,
    'js_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56cea5ff9dd893_85526215',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56cea5ff9dd893_85526215')) {
function content_56cea5ff9dd893_85526215 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1265556cea5ff8e76e8_56049822';
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
    var ajax_path = '<?php echo $_smarty_tpl->tpl_vars['ajax_path']->value;?>
';
<?php echo '</script'; ?>
>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1265556cea5ff8e76e8_56049822';
?>


    <?php /*  Call merged included template "prt_sidebar.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '802656cea5ff9aea85_48090035', 'content_56cea5ff9aea85_89277639');
/*  End of included template "prt_sidebar.tpl" */?>


    <div class="content">

        <?php /*  Call merged included template "prt_panel-header.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_panel-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '573656cea5ff9ba616_20472955', 'content_56cea5ff9ba619_20940949');
/*  End of included template "prt_panel-header.tpl" */?>


        <div class="main-content">

            
            

            <?php /*  Call merged included template "prt_footer.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '2231056cea5ff9ca016_00965316', 'content_56cea5ff9ca018_36678459');
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
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_path']->value;?>
portfolio.js"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("scr_ajax_functions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



</body></html>
<?php }
}
?><?php
/*%%SmartyHeaderCode:802656cea5ff9aea85_48090035%%*/
if ($_valid && !is_callable('content_56cea5ff9aea85_89277639')) {
function content_56cea5ff9aea85_89277639 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '802656cea5ff9aea85_48090035';
?>
<div class="sidebar-nav">
    <ul>
        <li><a class="nav-header" data-toggle="collapse"><i class="fa fa-user"></i> Главная</a></li>
        <li><a class="nav-header" data-toggle="collapse"><i class="fa fa-book"></i> Услуги и цены</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
portfolio" class="nav-header"><i class="fa fa-info-circle"></i> Портфолио</a></li>
        <li><a class="nav-header" data-toggle="collapse"><i class="fa fa-shopping-cart"></i> О нас</a></li>
        <li><a class="nav-header" data-toggle="collapse"><i class="fa fa-graduation-cap"></i> Контакты</a></li>
    </ul>
</div><?php
/*/%%SmartyNocache:802656cea5ff9aea85_48090035%%*/
}
}
?><?php
/*%%SmartyHeaderCode:573656cea5ff9ba616_20472955%%*/
if ($_valid && !is_callable('content_56cea5ff9ba619_20940949')) {
function content_56cea5ff9ba619_20940949 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '573656cea5ff9ba616_20472955';
?>
<div class="header">
    <h1 class="page-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
</div><?php
/*/%%SmartyNocache:573656cea5ff9ba616_20472955%%*/
}
}
?><?php
/*%%SmartyHeaderCode:2231056cea5ff9ca016_00965316%%*/
if ($_valid && !is_callable('content_56cea5ff9ca018_36678459')) {
function content_56cea5ff9ca018_36678459 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2231056cea5ff9ca016_00965316';
?>
<footer>
    <hr>
    <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
    <p>© 2016 <a href="http://absolute.org" target="_blank">ABSOLUTE</a></p>
</footer><?php
/*/%%SmartyNocache:2231056cea5ff9ca016_00965316%%*/
}
}
?>