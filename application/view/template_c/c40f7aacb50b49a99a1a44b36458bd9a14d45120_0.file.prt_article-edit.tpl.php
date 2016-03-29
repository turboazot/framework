<?php /* Smarty version 3.1.27, created on 2016-02-22 16:45:40
         compiled from "D:\Ampps\www\absolute\admin\application\view\templates\prt_article-edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3097056cb1f141fff14_78962042%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c40f7aacb50b49a99a1a44b36458bd9a14d45120' => 
    array (
      0 => 'D:\\Ampps\\www\\absolute\\admin\\application\\view\\templates\\prt_article-edit.tpl',
      1 => 1456152282,
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
    '27b2d6818febf8d1ad9fb02e664b0be3290cd693' => 
    array (
      0 => '27b2d6818febf8d1ad9fb02e664b0be3290cd693',
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
  'nocache_hash' => '3097056cb1f141fff14_78962042',
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
  'unifunc' => 'content_56cb1f1436b3e0_45930907',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56cb1f1436b3e0_45930907')) {
function content_56cb1f1436b3e0_45930907 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3097056cb1f141fff14_78962042';
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
$_smarty_tpl->properties['nocache_hash'] = '3097056cb1f141fff14_78962042';
?>


    <?php /*  Call merged included template "prt_sidebar.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1859356cb1f142a01b4_86687607', 'content_56cb1f1429c339_07318226');
/*  End of included template "prt_sidebar.tpl" */?>


    <div class="content">

        <?php /*  Call merged included template "prt_panel-header.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_panel-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1498356cb1f142cefc9_94588803', 'content_56cb1f142cefc0_11724914');
/*  End of included template "prt_panel-header.tpl" */?>


        <div class="main-content">

            
    <div class="alert">

    </div>
    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
article-table" class="btn btn-default btn-table">Список статей</a>
    <div class="panel panel-default">
        <div class="header-input">
            <input class="header-value" placeholder="Название статьи" type="text" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
"/>
        </div>
        <div class="text-editor-container col-md-9">
            <textarea class="text-editor"><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
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
            <?php if ($_smarty_tpl->tpl_vars['article_id']->value) {?>
            <div class="edit-info">
                <span class="field-label">Статус: </span><span class="status-value"><?php if ($_smarty_tpl->tpl_vars['article']->value['status']) {?>Опубликован<?php } else { ?>Черновик<?php }?></span><br/>
                <span class="field-label">Последнее изменение: </span><span class="date-value"><?php echo $_smarty_tpl->tpl_vars['article']->value['date_today'];?>
</span>
            </div>
            <?php }?>
            <textarea placeholder="Краткое описание статьи" class="short-description" id="" cols="30" rows="10"><?php echo $_smarty_tpl->tpl_vars['article']->value['short_description'];?>
</textarea>
            <div class="edit-buttons">
                <button class="btn btn-primary" id="public-product">Опубликовать</button>
                <br/>
                <button class="btn btn-default" id="save-product">Сохранить</button>
                <br/>
                <button class="btn btn-danger" id="delete-product">Удалить</button>
            </div>
        </div>
        <?php if (!$_smarty_tpl->tpl_vars['article_id']->value) {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_path']->value;?>
add-article.js"><?php echo '</script'; ?>
>
        <?php } else { ?>
            <?php echo '<script'; ?>
 type="text/javascript">
                var article_id = <?php echo $_smarty_tpl->tpl_vars['article_id']->value;?>
;
            <?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_path']->value;?>
update-article.js"><?php echo '</script'; ?>
>
        <?php }?>
    </div>


            <?php /*  Call merged included template "prt_footer.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("prt_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1993356cb1f1433c5e7_35165120', 'content_56cb1f1433c5e6_56049556');
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
/*%%SmartyHeaderCode:1859356cb1f142a01b4_86687607%%*/
if ($_valid && !is_callable('content_56cb1f1429c339_07318226')) {
function content_56cb1f1429c339_07318226 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1859356cb1f142a01b4_86687607';
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
/*/%%SmartyNocache:1859356cb1f142a01b4_86687607%%*/
}
}
?><?php
/*%%SmartyHeaderCode:1498356cb1f142cefc9_94588803%%*/
if ($_valid && !is_callable('content_56cb1f142cefc0_11724914')) {
function content_56cb1f142cefc0_11724914 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1498356cb1f142cefc9_94588803';
?>
<div class="header">
    <h1 class="page-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
</div><?php
/*/%%SmartyNocache:1498356cb1f142cefc9_94588803%%*/
}
}
?><?php
/*%%SmartyHeaderCode:1993356cb1f1433c5e7_35165120%%*/
if ($_valid && !is_callable('content_56cb1f1433c5e6_56049556')) {
function content_56cb1f1433c5e6_56049556 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1993356cb1f1433c5e7_35165120';
?>
<footer>
    <hr>
    <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
    <p>© 2016 <a href="http://absolute.org" target="_blank">ABSOLUTE</a></p>
</footer><?php
/*/%%SmartyNocache:1993356cb1f1433c5e7_35165120%%*/
}
}
?>