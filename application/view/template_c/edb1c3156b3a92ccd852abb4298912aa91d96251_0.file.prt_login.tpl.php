<?php /* Smarty version 3.1.27, created on 2016-03-07 00:13:27
         compiled from "D:\Ampps\www\chikotrans\admin\application\view\templates\prt_login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1962856dcab872306b5_32018486%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edb1c3156b3a92ccd852abb4298912aa91d96251' => 
    array (
      0 => 'D:\\Ampps\\www\\chikotrans\\admin\\application\\view\\templates\\prt_login.tpl',
      1 => 1457302405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1962856dcab872306b5_32018486',
  'variables' => 
  array (
    'bootstrap_path' => 0,
    'dist_path' => 0,
    'plugins_path' => 0,
    'admin_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56dcab872a59d2_81596614',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56dcab872a59d2_81596614')) {
function content_56dcab872a59d2_81596614 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1962856dcab872306b5_32018486';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['bootstrap_path']->value;?>
css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['dist_path']->value;?>
css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['plugins_path']->value;?>
iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Для начала работы необходимо авторизироваться</p>

        <form action="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
login" method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" name="user[login]" placeholder="Логин">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="user[password]" placeholder="Пароль">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">

                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Войти</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.0 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['plugins_path']->value;?>
jQuery/jQuery-2.2.0.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap 3.3.5 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['bootstrap_path']->value;?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- iCheck -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['plugins_path']->value;?>
iCheck/icheck.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>