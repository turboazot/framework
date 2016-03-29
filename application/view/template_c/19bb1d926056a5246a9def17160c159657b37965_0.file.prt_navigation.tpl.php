<?php /* Smarty version 3.1.27, created on 2016-02-22 15:58:41
         compiled from "D:\Ampps\www\absolute\admin\application\view\templates\prt_navigation.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3029556cb141186f8c1_91916497%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19bb1d926056a5246a9def17160c159657b37965' => 
    array (
      0 => 'D:\\Ampps\\www\\absolute\\admin\\application\\view\\templates\\prt_navigation.tpl',
      1 => 1456149493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3029556cb141186f8c1_91916497',
  'variables' => 
  array (
    'user_id' => 0,
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56cb14118dced9_10997780',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56cb14118dced9_10997780')) {
function content_56cb14118dced9_10997780 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3029556cb141186f8c1_91916497';
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