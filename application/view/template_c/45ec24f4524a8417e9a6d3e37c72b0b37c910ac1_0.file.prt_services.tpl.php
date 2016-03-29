<?php /* Smarty version 3.1.27, created on 2016-02-25 13:55:10
         compiled from "D:\Ampps\www\sofiart\admin\application\view\templates\prt_services.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1679956ceeb9ec7f4c4_98500709%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45ec24f4524a8417e9a6d3e37c72b0b37c910ac1' => 
    array (
      0 => 'D:\\Ampps\\www\\sofiart\\admin\\application\\view\\templates\\prt_services.tpl',
      1 => 1456396192,
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
    '980974bb94b017ae721be12927e62d9a853e074f' => 
    array (
      0 => '980974bb94b017ae721be12927e62d9a853e074f',
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
  'nocache_hash' => '1679956ceeb9ec7f4c4_98500709',
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
  'unifunc' => 'content_56ceeb9ed69b03_29669905',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ceeb9ed69b03_29669905')) {
function content_56ceeb9ed69b03_29669905 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1679956ceeb9ec7f4c4_98500709';
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
$_smarty_tpl->properties['nocache_hash'] = '1679956ceeb9ec7f4c4_98500709';
?>


    <?php /*  Call merged included template "prt_sidebar.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '2081056ceeb9ed08068_27107735', 'content_56ceeb9ed08062_37040085');
/*  End of included template "prt_sidebar.tpl" */?>


    <div class="content">

        <?php /*  Call merged included template "prt_panel-header.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_panel-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '2914456ceeb9ed17a63_87730279', 'content_56ceeb9ed17a61_83856632');
/*  End of included template "prt_panel-header.tpl" */?>


        <div class="main-content">

            
    <div class="add-service">
        <div class="service">
            <div class="name">
                <div class="field-label">Название:</div>
                <input type="text"/>
            </div>
            <div class="type">
                <div class="field-label">Тип:</div>
                <input type="text"/>
            </div>
            <div class="density">
                <div class="field-label">Плотность:</div>
                <input type="text"/>
            </div>
            <div class="price">
                <div class="field-label">Цена:</div>
                <input type="text"/>
            </div>
            <a class="btn btn-primary add-btn">Добавить услугу</a>
        </div>
    </div>
    <div class="services-container">
        <?php
$_from = $_smarty_tpl->tpl_vars['services']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['service'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['service']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->_loop = true;
$foreach_service_Sav = $_smarty_tpl->tpl_vars['service'];
?>
            <div id="<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
" class="service col-md-3">
                <div class="name">
                    <div class="field-label">Название:</div>
                    <input value="<?php echo $_smarty_tpl->tpl_vars['service']->value['name'];?>
" type="text"/>
                </div>
                <div class="type">
                    <div class="field-label">Тип:</div>
                    <input value="<?php echo $_smarty_tpl->tpl_vars['service']->value['type'];?>
" type="text"/>
                </div>
                <div class="density">
                    <div class="field-label">Плотность:</div>
                    <input value="<?php echo $_smarty_tpl->tpl_vars['service']->value['density'];?>
" type="text"/>
                </div>
                <div class="price">
                    <div class="field-label">Цена:</div>
                    <input value="<?php echo $_smarty_tpl->tpl_vars['service']->value['price'];?>
" type="text"/>
                </div>
                <a class="btn btn-primary update-btn">Изменить</a>
                <a class="btn btn-primary delete-btn">Удалить</a>
            </div>
        <?php
$_smarty_tpl->tpl_vars['service'] = $foreach_service_Sav;
}
?>
    </div>
    <style>
        .add-service {
            overflow: hidden;
        }

        .add-service .service input {
            width: 400px;
        }

        .add-service .service .name, .add-service .service .type, .add-service .service .density, .add-service .service .price {
            margin-bottom: 20px;
        }

        .add-service .service .field-label {
            margin-bottom: 10px;
        }

        .services-container {
            overflow: hidden;
        }

        .services-container .service {
            display: inline-block;
            text-align: center;
            border-bottom: 1px solid #d7d7d7;
            border-right: 1px solid #d7d7d7;
            padding: 50px 0;
        }

        .services-container .service:nth-child(4n) {
            border-right: none;
        }

        .services-container .service:last-child {
            border-right: none;
        }

        .services-container .service .name, .services-container .service .type, .services-container .service .density, .services-container .service .price {
            margin-bottom: 20px;
        }

        .services-container .service .field-label {
            margin-bottom: 10px;
        }
    </style>


            <?php /*  Call merged included template "prt_footer.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1435856ceeb9ed46872_73322754', 'content_56ceeb9ed46879_18817622');
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
/*%%SmartyHeaderCode:2081056ceeb9ed08068_27107735%%*/
if ($_valid && !is_callable('content_56ceeb9ed08062_37040085')) {
function content_56ceeb9ed08062_37040085 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2081056ceeb9ed08068_27107735';
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
/*/%%SmartyNocache:2081056ceeb9ed08068_27107735%%*/
}
}
?><?php
/*%%SmartyHeaderCode:2914456ceeb9ed17a63_87730279%%*/
if ($_valid && !is_callable('content_56ceeb9ed17a61_83856632')) {
function content_56ceeb9ed17a61_83856632 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2914456ceeb9ed17a63_87730279';
?>
<div class="header">
    <h1 class="page-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
</div><?php
/*/%%SmartyNocache:2914456ceeb9ed17a63_87730279%%*/
}
}
?><?php
/*%%SmartyHeaderCode:1435856ceeb9ed46872_73322754%%*/
if ($_valid && !is_callable('content_56ceeb9ed46879_18817622')) {
function content_56ceeb9ed46879_18817622 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1435856ceeb9ed46872_73322754';
?>
<footer>
    <hr>
    <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
    <p>© 2016 <a href="http://absolute.org" target="_blank">ABSOLUTE</a></p>
</footer><?php
/*/%%SmartyNocache:1435856ceeb9ed46872_73322754%%*/
}
}
?>