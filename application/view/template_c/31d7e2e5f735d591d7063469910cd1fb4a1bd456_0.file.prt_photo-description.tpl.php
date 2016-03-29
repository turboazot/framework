<?php /* Smarty version 3.1.27, created on 2016-02-25 15:37:35
         compiled from "D:\Ampps\www\sofiart\admin\application\view\templates\prt_photo-description.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3057356cf039fcfa406_53612608%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31d7e2e5f735d591d7063469910cd1fb4a1bd456' => 
    array (
      0 => 'D:\\Ampps\\www\\sofiart\\admin\\application\\view\\templates\\prt_photo-description.tpl',
      1 => 1456386317,
      2 => 'file',
    ),
    'e382139fc29f46f1ec08b0707f4d8be39ffb9b29' => 
    array (
      0 => 'D:\\Ampps\\www\\sofiart\\admin\\application\\view\\templates\\prt_panel-container.tpl',
      1 => 1452296466,
      2 => 'file',
    ),
    'e5af2126c5bc1bc36bef8960e1c50af9675dfdfa' => 
    array (
      0 => 'D:\\Ampps\\www\\sofiart\\admin\\application\\view\\templates\\tpl_index.tpl',
      1 => 1456400279,
      2 => 'file',
    ),
    '91e8ea57d0c3382fda1eb05efc40ae544d0bfe95' => 
    array (
      0 => '91e8ea57d0c3382fda1eb05efc40ae544d0bfe95',
      1 => 0,
      2 => 'string',
    ),
    '5c9dbe02e79c6b6d6c3abb4927d3a9b629864483' => 
    array (
      0 => 'D:\\Ampps\\www\\sofiart\\admin\\application\\view\\templates\\prt_sidebar.tpl',
      1 => 1456401239,
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
  'nocache_hash' => '3057356cf039fcfa406_53612608',
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
  'unifunc' => 'content_56cf039fe69757_45956407',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56cf039fe69757_45956407')) {
function content_56cf039fe69757_45956407 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3057356cf039fcfa406_53612608';
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
$_smarty_tpl->properties['nocache_hash'] = '3057356cf039fcfa406_53612608';
?>


    <?php /*  Call merged included template "prt_sidebar.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '920056cf039fe1b544_87863934', 'content_56cf039fe1b543_09752899');
/*  End of included template "prt_sidebar.tpl" */?>


    <div class="content">

        <?php /*  Call merged included template "prt_panel-header.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_panel-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1329456cf039fe2af45_85807448', 'content_56cf039fe2af43_94047427');
/*  End of included template "prt_panel-header.tpl" */?>


        <div class="main-content">

            
    <div class="main-content col-md-9">
        <div class="photo-description-container">
            <?php
$_from = $_smarty_tpl->tpl_vars['photo_set']->value['names'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['name']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
$foreach_name_Sav = $_smarty_tpl->tpl_vars['name'];
?>
                <div class="photo-description-cell">
                    <div class="photo-thumb-container">
                        <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/portfolio/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
-thumb.jpg" alt=""/>
                        <input class="photo_name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" type="hidden"/>
                    </div>
                    <div class="name-container">
                        <div class="name-label">
                            Название фото:
                        </div>
                        <input class="name_input" type="text"/>
                    </div>
                    <div class="description-container">
                        <div class="description-label">Описание фотографии:</div>
                        <textarea class="description_input" cols="100" rows="4" maxlength="200"></textarea>
                    </div>
                </div>
            <?php
$_smarty_tpl->tpl_vars['name'] = $foreach_name_Sav;
}
?>
        </div>
        <div class="add-description-panel">
            <a class="btn btn-primary" id="save_btn">Сохранить изменения</a>
            <a class="btn btn-primary" id="back_btn" href="javascript:history.back();">Вернуться на страницу портфолио</a>
        </div>
    </div>


            <?php /*  Call merged included template "prt_footer.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '386856cf039fe4e1d3_50959215', 'content_56cf039fe4a357_38312881');
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
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_path']->value;?>
service.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_path']->value;?>
about.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_path']->value;?>
header.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_path']->value;?>
contact.js"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("scr_ajax_functions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



</body></html>
<?php }
}
?><?php
/*%%SmartyHeaderCode:920056cf039fe1b544_87863934%%*/
if ($_valid && !is_callable('content_56cf039fe1b543_09752899')) {
function content_56cf039fe1b543_09752899 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '920056cf039fe1b544_87863934';
?>
<div class="sidebar-nav">
    <ul>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
header" class="nav-header"><i class="fa fa-user"></i> Главная</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
service" class="nav-header"><i class="fa fa-book"></i> Услуги и цены</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
portfolio" class="nav-header"><i class="fa fa-info-circle"></i> Портфолио</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
about" class="nav-header"><i class="fa fa-shopping-cart"></i> О нас</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
contact" class="nav-header"><i class="fa fa-graduation-cap"></i> Контакты</a></li>
    </ul>
</div><?php
/*/%%SmartyNocache:920056cf039fe1b544_87863934%%*/
}
}
?><?php
/*%%SmartyHeaderCode:1329456cf039fe2af45_85807448%%*/
if ($_valid && !is_callable('content_56cf039fe2af43_94047427')) {
function content_56cf039fe2af43_94047427 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1329456cf039fe2af45_85807448';
?>
<div class="header">
    <h1 class="page-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
</div><?php
/*/%%SmartyNocache:1329456cf039fe2af45_85807448%%*/
}
}
?><?php
/*%%SmartyHeaderCode:386856cf039fe4e1d3_50959215%%*/
if ($_valid && !is_callable('content_56cf039fe4a357_38312881')) {
function content_56cf039fe4a357_38312881 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '386856cf039fe4e1d3_50959215';
?>
<footer>
    <hr>
    <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
    <p>© 2016 <a href="http://absolute.org" target="_blank">ABSOLUTE</a></p>
</footer><?php
/*/%%SmartyNocache:386856cf039fe4e1d3_50959215%%*/
}
}
?>