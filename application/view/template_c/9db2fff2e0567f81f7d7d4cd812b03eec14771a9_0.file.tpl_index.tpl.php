<?php /* Smarty version 3.1.27, created on 2016-02-27 06:56:29
         compiled from "D:\Ampps\www\chikotrans\admin\application\view\templates\tpl_index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:965256d12c7d6005a1_40820331%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9db2fff2e0567f81f7d7d4cd812b03eec14771a9' => 
    array (
      0 => 'D:\\Ampps\\www\\chikotrans\\admin\\application\\view\\templates\\tpl_index.tpl',
      1 => 1456548594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '965256d12c7d6005a1_40820331',
  'variables' => 
  array (
    'bootstrap_path' => 0,
    'dist_path' => 0,
    'plugins_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d12c7d6a46d8_28683771',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d12c7d6a46d8_28683771')) {
function content_56d12c7d6a46d8_28683771 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '965256d12c7d6005a1_40820331';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
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
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['dist_path']->value;?>
css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['plugins_path']->value;?>
iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['plugins_path']->value;?>
morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['plugins_path']->value;?>
jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['plugins_path']->value;?>
datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['plugins_path']->value;?>
daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['plugins_path']->value;?>
bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

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
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php echo $_smarty_tpl->getSubTemplate ("prt_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php echo $_smarty_tpl->getSubTemplate ("prt_main-sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    

    
    <?php echo $_smarty_tpl->getSubTemplate ("prt_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php echo $_smarty_tpl->getSubTemplate ("prt_control-sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['plugins_path']->value;?>
jQuery/jQuery-2.2.0.min.js"><?php echo '</script'; ?>
>
<!-- jQuery UI 1.11.4 -->
<?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"><?php echo '</script'; ?>
>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<?php echo '<script'; ?>
>
    $.widget.bridge('uibutton', $.ui.button);
<?php echo '</script'; ?>
>
<!-- Bootstrap 3.3.5 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['bootstrap_path']->value;?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- Morris.js charts -->
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['plugins_path']->value;?>
morris/morris.min.js"><?php echo '</script'; ?>
>
<!-- Sparkline -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['plugins_path']->value;?>
sparkline/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
<!-- jvectormap -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['plugins_path']->value;?>
jvectormap/jquery-jvectormap-1.2.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['plugins_path']->value;?>
jvectormap/jquery-jvectormap-world-mill-en.js"><?php echo '</script'; ?>
>
<!-- jQuery Knob Chart -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['plugins_path']->value;?>
knob/jquery.knob.js"><?php echo '</script'; ?>
>
<!-- daterangepicker -->
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['plugins_path']->value;?>
daterangepicker/daterangepicker.js"><?php echo '</script'; ?>
>
<!-- datepicker -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['plugins_path']->value;?>
datepicker/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
<!-- Bootstrap WYSIHTML5 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['plugins_path']->value;?>
bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"><?php echo '</script'; ?>
>
<!-- Slimscroll -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['plugins_path']->value;?>
slimScroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
<!-- FastClick -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['plugins_path']->value;?>
fastclick/fastclick.js"><?php echo '</script'; ?>
>
<!-- AdminLTE App -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dist_path']->value;?>
js/app.min.js"><?php echo '</script'; ?>
>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dist_path']->value;?>
js/pages/dashboard.js"><?php echo '</script'; ?>
>
<!-- AdminLTE for demo purposes -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dist_path']->value;?>
js/demo.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>