<?php /* Smarty version 3.1.27, created on 2016-02-25 08:58:09
         compiled from "D:\Ampps\www\sofiart\admin\application\view\templates\prt_login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:498656cea601e6e055_96585432%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de9c56dbeafa231c1a6d76c10b34f80fc64a79d3' => 
    array (
      0 => 'D:\\Ampps\\www\\sofiart\\admin\\application\\view\\templates\\prt_login.tpl',
      1 => 1452285483,
      2 => 'file',
    ),
    'e5af2126c5bc1bc36bef8960e1c50af9675dfdfa' => 
    array (
      0 => 'D:\\Ampps\\www\\sofiart\\admin\\application\\view\\templates\\tpl_index.tpl',
      1 => 1456382911,
      2 => 'file',
    ),
    '0e1dab3dd57efc0120c50013cd67ddb5c06fe6ff' => 
    array (
      0 => '0e1dab3dd57efc0120c50013cd67ddb5c06fe6ff',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '498656cea601e6e055_96585432',
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
  'unifunc' => 'content_56cea602002a00_89862851',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56cea602002a00_89862851')) {
function content_56cea602002a00_89862851 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '498656cea601e6e055_96585432';
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
$_smarty_tpl->properties['nocache_hash'] = '498656cea601e6e055_96585432';
?>

    <div class="dialog">
        <div class="panel panel-default">
            <p class="panel-heading no-collapse">Вход</p>
            <div class="panel-body">
                <form action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
login" method="POST">
                    <div class="form-group">
                        <label>Имя пользователя</label>
                        <input type="text" name="user[login]" class="form-control span12">
                    </div>
                    <div class="form-group">
                        <label>Пароль</label>
                        <input type="password" name="user[password]" class="form-control span12 form-control">
                    </div>
                    <input type="submit" class="btn btn-primary pull-right" value="Войти">
                    <div class="clearfix"></div>
                </form>
            </div>
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
?>