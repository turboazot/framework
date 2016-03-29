<?php /* Smarty version 3.1.27, created on 2016-03-07 11:11:20
         compiled from "D:\Ampps\www\chikotrans\admin\application\view\templates\prt_worker.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:198856dd45b819c205_01718814%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '240ad83d1d99d4b176a86425409e10b23f223657' => 
    array (
      0 => 'D:\\Ampps\\www\\chikotrans\\admin\\application\\view\\templates\\prt_worker.tpl',
      1 => 1457298323,
      2 => 'file',
    ),
    'fb3db0d43d72c7d22c8c5d4597b6d2545ff0d6dd' => 
    array (
      0 => 'D:\\Ampps\\www\\chikotrans\\admin\\application\\view\\templates\\prt_content.tpl',
      1 => 1457333548,
      2 => 'file',
    ),
    '9db2fff2e0567f81f7d7d4cd812b03eec14771a9' => 
    array (
      0 => 'D:\\Ampps\\www\\chikotrans\\admin\\application\\view\\templates\\tpl_index.tpl',
      1 => 1457341836,
      2 => 'file',
    ),
    '3b76ff37655a8b4af726bdef8071d75c6883baab' => 
    array (
      0 => '3b76ff37655a8b4af726bdef8071d75c6883baab',
      1 => 0,
      2 => 'string',
    ),
    '31542914bf84ca8fe96566ecc2a1748166d0b0e0' => 
    array (
      0 => 'D:\\Ampps\\www\\chikotrans\\admin\\application\\view\\templates\\mdl_add-worker.tpl',
      1 => 1457336755,
      2 => 'file',
    ),
    '6f9912f090b622da34fdeb01a481e4ac6856c6b0' => 
    array (
      0 => 'D:\\Ampps\\www\\chikotrans\\admin\\application\\view\\templates\\mdl_update-worker.tpl',
      1 => 1457337011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198856dd45b819c205_01718814',
  'variables' => 
  array (
    'bootstrap_path' => 0,
    'dist_path' => 0,
    'plugins_path' => 0,
    'css_path' => 0,
    'current_id' => 0,
    'ajax' => 0,
    'js_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56dd45b8351a73_77326586',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56dd45b8351a73_77326586')) {
function content_56dd45b8351a73_77326586 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '198856dd45b819c205_01718814';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <!-- <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> -->
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

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_path']->value;?>
font-face.css"/>

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

    <?php
$_smarty_tpl->properties['nocache_hash'] = '198856dd45b819c205_01718814';
?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                <small>preview of simple tables</small>
            </h1>
            <form action="" method="POST" class="filter-form">
                <a class="btn btn-primary filter-btn">Фильтр</a>
                <select class="form-control" id="partner" name="filter[partner]">
                    <?php
$_from = $_smarty_tpl->tpl_vars['partners']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['partner'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['partner']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['partner']->value) {
$_smarty_tpl->tpl_vars['partner']->_loop = true;
$foreach_partner_Sav = $_smarty_tpl->tpl_vars['partner'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['partner']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['partner']->value['first_name'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['partner'] = $foreach_partner_Sav;
}
?>
                </select>
                <select class="form-control" id="month" name="filter[month]">
                    <option value="1">январь</option>
                    <option value="2">февраль</option>
                    <option value="3">март</option>
                    <option value="4">апрель</option>
                    <option value="5">май</option>
                    <option value="6">июнь</option>
                    <option value="7">июль</option>
                    <option value="8">август</option>
                    <option value="9">сентябрь</option>
                    <option value="10">октябрь</option>
                    <option value="11">ноябрь</option>
                    <option value="12">декабрь</option>
                </select>
                <select class="form-control" name="filter[year]" id="year">
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                </select>
            </form>
        </section>

        <!-- Main content -->
        <section class="content">
            
    <div class="row">
        <div class="col-md-6">
            <div class="box workers">
                <div class="box-header with-border">
                    <h3 class="box-title">Сотрудники</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Имя</th>
                            <th>Фамилия</th>
                            <th>Отчество</th>
                            <th>Тип</th>
                            <th>Работодатель</th>
                            <th>Телефон</th>
                            <th style="width: 60px;">Панель</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->tpl_vars['workers']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['worker'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['worker']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['worker']->value) {
$_smarty_tpl->tpl_vars['worker']->_loop = true;
$foreach_worker_Sav = $_smarty_tpl->tpl_vars['worker'];
?>
                            <tr id="<?php echo $_smarty_tpl->tpl_vars['worker']->value['id'];?>
" class="cell">
                                <td class="first-name"><?php echo $_smarty_tpl->tpl_vars['worker']->value['first_name'];?>
</td>
                                <td class="last-name"><?php echo $_smarty_tpl->tpl_vars['worker']->value['last_name'];?>
</td>
                                <td class="fath-name"><?php echo $_smarty_tpl->tpl_vars['worker']->value['fath_name'];?>
</td>
                                <td class="type"><?php echo $_smarty_tpl->tpl_vars['worker']->value['type'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['worker']->value['owner_name'];?>
</td>
                                <td class="phone"><?php echo $_smarty_tpl->tpl_vars['worker']->value['phone'];?>
</td>
                                <td>
                                    <a class="panel-btn update-mdl-btn"><i class="fa fa-fw fa-pencil"></i></a>
                                    <a class="panel-btn delete-btn"><i class="fa fa-fw fa-close"></i></a>
                                </td>
                                <input value="<?php echo $_smarty_tpl->tpl_vars['worker']->value['owner'];?>
" class="owner" type="hidden"/>
                            </tr>
                        <?php
$_smarty_tpl->tpl_vars['worker'] = $foreach_worker_Sav;
}
?>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <div class="filter">
                        <button type="button" class="btn btn-block btn-primary btn-sm add-w-mdl-btn">Добавить</button>
                    </div>
                </div>
            </div>
            <?php /*  Call merged included template "mdl_add-worker.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("mdl_add-worker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '549156dd45b82ccd55_18393591', 'content_56dd45b82ccd56_92577014');
/*  End of included template "mdl_add-worker.tpl" */?>

            <?php /*  Call merged included template "mdl_update-worker.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("mdl_update-worker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '426556dd45b82e82d4_93038887', 'content_56dd45b82e82d3_92646221');
/*  End of included template "mdl_update-worker.tpl" */?>

            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <?php echo '<script'; ?>
>
        /*var fuel_type_id = 0;
         var fuel = {
         limit : <?php echo $_smarty_tpl->tpl_vars['fuel_set']->value['limit'];?>
,
         start_from : <?php echo $_smarty_tpl->tpl_vars['fuel_set']->value['limit'];?>
,
         load : true,
         current_id : 0,
         vehicle : null
         }*/
        var worker_id = 0;
    <?php echo '</script'; ?>
>
    <style>
        .add-w-mdl-btn {
            width: 200px;
            float: right;
        }
    </style>

        </section>
        <!-- /.content -->
    </div>
    <style>
        a.panel-btn {
            float: left;
            width: 18px;
        }


        .filter-form {
            width: 570px;
            float: right;
        }

        .filter-form .form-control {
            float: right;
            width: 150px;
            margin-right: 10px;
        }
        .filter-btn {
            float: right;
        }
    </style>
    <?php echo '<script'; ?>
>
        var month = <?php echo $_smarty_tpl->tpl_vars['filter']->value['month'];?>
;
        var partner = <?php echo $_smarty_tpl->tpl_vars['filter']->value['partner'];?>
;
        var year = <?php echo $_smarty_tpl->tpl_vars['filter']->value['year'];?>
;
    <?php echo '</script'; ?>
>

    <?php echo $_smarty_tpl->getSubTemplate ("prt_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php echo $_smarty_tpl->getSubTemplate ("prt_control-sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
<!-- ./wrapper -->
<?php echo '<script'; ?>
>
    var current_id = <?php echo $_smarty_tpl->tpl_vars['current_id']->value;?>
;
<?php echo '</script'; ?>
>
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
<!-- InputMask -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['plugins_path']->value;?>
input-mask/jquery.inputmask.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['plugins_path']->value;?>
input-mask/jquery.inputmask.date.extensions.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['plugins_path']->value;?>
input-mask/jquery.inputmask.extensions.js"><?php echo '</script'; ?>
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
>
    <?php echo $_smarty_tpl->tpl_vars['ajax']->value;?>

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dist_path']->value;?>
js/demo.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js_path']->value;?>
custom.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js_path']->value;?>
cost.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js_path']->value;?>
fuel-type.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js_path']->value;?>
fuel.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js_path']->value;?>
registry.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js_path']->value;?>
vehicle.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js_path']->value;?>
worker.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?><?php
/*%%SmartyHeaderCode:549156dd45b82ccd55_18393591%%*/
if ($_valid && !is_callable('content_56dd45b82ccd56_92577014')) {
function content_56dd45b82ccd56_92577014 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '549156dd45b82ccd55_18393591';
?>
<div class="modal fade" id="add_worker_mdl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Добавить сотрудника</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Имя <span>*</span></label>
                    <input id="first_name" type="text" class="form-control required">
                </div>
                <div class="form-group">
                    <label>Фамилия <span>*</span></label>
                    <input id="last_name" type="text" class="form-control required">
                </div>
                <div class="form-group">
                    <label>Отчество <span>*</span></label>
                    <input id="fath_name" type="text" class="form-control required">
                </div>
                <div class="form-group">
                    <label>Тип <span>*</span></label>
                    <input id="type" type="text" class="form-control required">
                </div>
                <div class="form-group">
                    <label>Работодатель</label>
                    <select class="form-control" id="owner">
                        <?php
$_from = $_smarty_tpl->tpl_vars['partners']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['partner'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['partner']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['partner']->value) {
$_smarty_tpl->tpl_vars['partner']->_loop = true;
$foreach_partner_Sav = $_smarty_tpl->tpl_vars['partner'];
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['partner']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['partner']->value['first_name'];?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['partner'] = $foreach_partner_Sav;
}
?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Телефон</label>
                    <input id="phone" type="text" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary add-btn">Добавить</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div><?php
/*/%%SmartyNocache:549156dd45b82ccd55_18393591%%*/
}
}
?><?php
/*%%SmartyHeaderCode:426556dd45b82e82d4_93038887%%*/
if ($_valid && !is_callable('content_56dd45b82e82d3_92646221')) {
function content_56dd45b82e82d3_92646221 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '426556dd45b82e82d4_93038887';
?>
<div class="modal fade" id="update_worker_mdl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Изменить сотрудника</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Имя <span>*</span></label>
                    <input id="first_name" type="text" class="form-control required">
                </div>
                <div class="form-group">
                    <label>Фамилия <span>*</span></label>
                    <input id="last_name" type="text" class="form-control required">
                </div>
                <div class="form-group">
                    <label>Отчество <span>*</span></label>
                    <input id="fath_name" type="text" class="form-control required">
                </div>
                <div class="form-group">
                    <label>Тип <span>*</span></label>
                    <input id="type" type="text" class="form-control required">
                </div>
                <div class="form-group">
                    <label>Работодатель</label>
                    <select class="form-control" id="owner">
                        <?php
$_from = $_smarty_tpl->tpl_vars['partners']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['partner'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['partner']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['partner']->value) {
$_smarty_tpl->tpl_vars['partner']->_loop = true;
$foreach_partner_Sav = $_smarty_tpl->tpl_vars['partner'];
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['partner']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['partner']->value['first_name'];?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['partner'] = $foreach_partner_Sav;
}
?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Телефон</label>
                    <input id="phone" type="text" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary update-btn">Добавить</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div><?php
/*/%%SmartyNocache:426556dd45b82e82d4_93038887%%*/
}
}
?>