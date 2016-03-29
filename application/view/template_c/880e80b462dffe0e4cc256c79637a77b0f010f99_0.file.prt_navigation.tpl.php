<?php /* Smarty version 3.1.27, created on 2016-02-26 20:10:00
         compiled from "D:\Ampps\www\chikotrans\admin\application\view\templates\prt_navigation.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2046056d094f8984799_49571442%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '880e80b462dffe0e4cc256c79637a77b0f010f99' => 
    array (
      0 => 'D:\\Ampps\\www\\chikotrans\\admin\\application\\view\\templates\\prt_navigation.tpl',
      1 => 1456149493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2046056d094f8984799_49571442',
  'variables' => 
  array (
    'user_id' => 0,
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d094f8998015_79807847',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d094f8998015_79807847')) {
function content_56d094f8998015_79807847 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2046056d094f8984799_49571442';
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