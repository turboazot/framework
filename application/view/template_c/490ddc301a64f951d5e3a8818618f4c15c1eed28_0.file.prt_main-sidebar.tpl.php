<?php /* Smarty version 3.1.27, created on 2016-03-07 00:42:24
         compiled from "D:\Ampps\www\chikotrans\admin\application\view\templates\prt_main-sidebar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:386656dcb25001b903_66875385%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '490ddc301a64f951d5e3a8818618f4c15c1eed28' => 
    array (
      0 => 'D:\\Ampps\\www\\chikotrans\\admin\\application\\view\\templates\\prt_main-sidebar.tpl',
      1 => 1457304142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '386656dcb25001b903_66875385',
  'variables' => 
  array (
    'img_path' => 0,
    'current_id' => 0,
    'user_first_name' => 0,
    'user_last_name' => 0,
    'admin_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56dcb250075692_30953170',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56dcb250075692_30953170')) {
function content_56dcb250075692_30953170 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '386656dcb25001b903_66875385';
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['current_id']->value;?>
.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $_smarty_tpl->tpl_vars['user_first_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['user_last_name']->value;?>
</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">ОСНОВНОЕ МЕНЮ</li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
registry">
                    <i class="fa fa-th"></i> <span>Реестр</span>
                </a>
            </li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
panel">
                    <i class="fa fa-th"></i> <span>Расходы</span>
                </a>
            </li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
fuel">
                    <i class="fa fa-th"></i> <span>Топливо</span>
                </a>
            </li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
vehicle">
                    <i class="fa fa-th"></i> <span>Машины</span>
                </a>
            </li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
worker">
                    <i class="fa fa-th"></i> <span>Водители</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<?php }
}
?>