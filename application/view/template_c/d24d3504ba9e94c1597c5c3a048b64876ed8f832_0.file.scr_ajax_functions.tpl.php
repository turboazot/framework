<?php /* Smarty version 3.1.27, created on 2016-02-26 20:10:00
         compiled from "D:\Ampps\www\chikotrans\admin\application\view\templates\scr_ajax_functions.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:811756d094f89caca7_58959082%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd24d3504ba9e94c1597c5c3a048b64876ed8f832' => 
    array (
      0 => 'D:\\Ampps\\www\\chikotrans\\admin\\application\\view\\templates\\scr_ajax_functions.tpl',
      1 => 1456388341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '811756d094f89caca7_58959082',
  'variables' => 
  array (
    'ajax' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d094f89d29a8_52836275',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d094f89d29a8_52836275')) {
function content_56d094f89d29a8_52836275 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '811756d094f89caca7_58959082';
?>
<?php echo '<script'; ?>
 type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['ajax']->value;?>

<?php echo '</script'; ?>
><?php }
}
?>