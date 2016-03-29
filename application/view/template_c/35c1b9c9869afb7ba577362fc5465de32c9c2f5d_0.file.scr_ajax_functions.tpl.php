<?php /* Smarty version 3.1.27, created on 2016-02-25 10:19:03
         compiled from "D:\Ampps\www\sofiart\admin\application\view\templates\scr_ajax_functions.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2352456ceb8f75583b8_57356185%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35c1b9c9869afb7ba577362fc5465de32c9c2f5d' => 
    array (
      0 => 'D:\\Ampps\\www\\sofiart\\admin\\application\\view\\templates\\scr_ajax_functions.tpl',
      1 => 1456388341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2352456ceb8f75583b8_57356185',
  'variables' => 
  array (
    'ajax' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ceb8f75aa456_89542738',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ceb8f75aa456_89542738')) {
function content_56ceb8f75aa456_89542738 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2352456ceb8f75583b8_57356185';
?>
<?php echo '<script'; ?>
 type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['ajax']->value;?>

<?php echo '</script'; ?>
><?php }
}
?>