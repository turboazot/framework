<?php /* Smarty version 3.1.27, created on 2016-03-07 00:54:57
         compiled from "D:\Ampps\www\chikotrans\admin\application\view\templates\prt_header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1184656dcb54134c496_62541443%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1a7414cea8fbf7bb34f2ba7c8bff18f8049ae04' => 
    array (
      0 => 'D:\\Ampps\\www\\chikotrans\\admin\\application\\view\\templates\\prt_header.tpl',
      1 => 1457304882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1184656dcb54134c496_62541443',
  'variables' => 
  array (
    'admin_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56dcb54139e527_92542275',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56dcb54139e527_92542275')) {
function content_56dcb54139e527_92542275 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1184656dcb54134c496_62541443';
?>
<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <div class="logo-img"></div>
        <span class="logo-lg"><b>Panel</b>CHIKO</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header><?php }
}
?>