<?php /* Smarty version 3.1.27, created on 2016-02-24 22:43:10
         compiled from "D:\Ampps\www\sofiart\admin\application\view\templates\prt_navigation.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1860456ce15de3f2d74_28614010%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f53e8e84377db9d4556e2cba7bed1d1bc816bb6' => 
    array (
      0 => 'D:\\Ampps\\www\\sofiart\\admin\\application\\view\\templates\\prt_navigation.tpl',
      1 => 1456149493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1860456ce15de3f2d74_28614010',
  'variables' => 
  array (
    'user_id' => 0,
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ce15de439288_80718383',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ce15de439288_80718383')) {
function content_56ce15de439288_80718383 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1860456ce15de3f2d74_28614010';
if ($_smarty_tpl->tpl_vars['user_id']->value) {?>
    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> ABSOLUTE</span></a>
        </div>
    </div>
<?php }

}
}
?>