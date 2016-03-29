<?php /* Smarty version 3.1.27, created on 2016-03-07 11:10:38
         compiled from "D:\Ampps\www\chikotrans\admin\application\view\templates\prt_cost.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:28556dd458e5869c4_87877220%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '019703652651d74dab26106cf390eeef79fd6355' => 
    array (
      0 => 'D:\\Ampps\\www\\chikotrans\\admin\\application\\view\\templates\\prt_cost.tpl',
      1 => 1457187619,
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
    '34523783948871a7c2541117d3c970b8670685a3' => 
    array (
      0 => '34523783948871a7c2541117d3c970b8670685a3',
      1 => 0,
      2 => 'string',
    ),
    '46beaede4115499dc73d308abfaa2b4294b4f3e0' => 
    array (
      0 => 'D:\\Ampps\\www\\chikotrans\\admin\\application\\view\\templates\\mdl_add-cost.tpl',
      1 => 1457335361,
      2 => 'file',
    ),
    '6349bca2640ac4fa39c8bedc055356a221cce64d' => 
    array (
      0 => 'D:\\Ampps\\www\\chikotrans\\admin\\application\\view\\templates\\mdl_add_child_cost.tpl',
      1 => 1457336806,
      2 => 'file',
    ),
    'e66a4321578af91d9d5c9f308f6738aa8e6f42d7' => 
    array (
      0 => 'D:\\Ampps\\www\\chikotrans\\admin\\application\\view\\templates\\mdl_update_cost.tpl',
      1 => 1457337038,
      2 => 'file',
    ),
    '5e8ed598c75bd8ce13843f22e974aa72e95df53e' => 
    array (
      0 => 'D:\\Ampps\\www\\chikotrans\\admin\\application\\view\\templates\\mdl_update-child-cost.tpl',
      1 => 1457336833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28556dd458e5869c4_87877220',
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
  'unifunc' => 'content_56dd458e80f161_75576036',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56dd458e80f161_75576036')) {
function content_56dd458e80f161_75576036 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '28556dd458e5869c4_87877220';
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
$_smarty_tpl->properties['nocache_hash'] = '28556dd458e5869c4_87877220';
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
        <div class="col-xs-12">
            <div class="box costs">
                <div class="box-header with-border">
                    <h3 class="box-title">Таблица расходов</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="parents table table-bordered">
                        <tr>
                            <th style="width: 80px">Дата</th>
                            <th style="width: 80px">Сумма</th>
                            <th style="width: 40px">Валюта</th>
                            <th>Описание</th>
                            <th>Тип</th>
                            <th style="width: 100px">Панель</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->tpl_vars['cost_set']->value['costs'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cost'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cost']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cost']->value) {
$_smarty_tpl->tpl_vars['cost']->_loop = true;
$foreach_cost_Sav = $_smarty_tpl->tpl_vars['cost'];
?>
                            <tr id="<?php echo $_smarty_tpl->tpl_vars['cost']->value['id'];?>
" class="cell">
                                <td class="date"><?php echo $_smarty_tpl->tpl_vars['cost']->value['date'];?>
</td>
                                <td class="amount"><?php echo $_smarty_tpl->tpl_vars['cost']->value['amount'];?>
</td>
                                <td class="currency"><?php echo $_smarty_tpl->tpl_vars['cost']->value['currency'];?>
</td>
                                <td class="description">
                                    <?php echo $_smarty_tpl->tpl_vars['cost']->value['description'];?>

                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['cost']->value['parent_type_word'];?>

                                </td>
                                <td>
                                    <?php if (count($_smarty_tpl->tpl_vars['cost']->value['children'])) {?>
                                        <a class="panel-btn show-children-btn"><i class="fa fa-fw fa-arrow-down"></i></a>
                                    <?php }?>
                                    <a class="panel-btn update-mdl-btn"><i class="fa fa-fw fa-pencil"></i></a>
                                    <a class="panel-btn child-mdl-btn"><i class="fa fa-fw fa-plus"></i></a>
                                    <a class="panel-btn delete-btn"><i class="fa fa-fw fa-close"></i></a>
                                </td>
                                <input class="parent-id" value="<?php echo $_smarty_tpl->tpl_vars['cost']->value['parent_id'];?>
" type="hidden"/>
                                <input class="parent-type" value="<?php echo $_smarty_tpl->tpl_vars['cost']->value['parent_type'];?>
" type="hidden"/>
                                <input class="sp" value="<?php echo $_smarty_tpl->tpl_vars['cost']->value['sp'];?>
" type="hidden"/>
                            </tr>
                            <?php if (count($_smarty_tpl->tpl_vars['cost']->value['children'])) {?>
                                <tr class="children" style="display:none;">
                                    <td colspan="6">
                                        <table class="table table-bordered table-striped" style="margin-bottom: 0">
                                            <?php
$_from = $_smarty_tpl->tpl_vars['cost']->value['children'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['child'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['child']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
$foreach_child_Sav = $_smarty_tpl->tpl_vars['child'];
?>
                                                <tr id="<?php echo $_smarty_tpl->tpl_vars['child']->value['id'];?>
" class="cell">
                                                    <td class="date" style="width: 80px"><?php echo $_smarty_tpl->tpl_vars['child']->value['date'];?>
</td>
                                                    <td class="amount" style="width: 80px"><?php echo $_smarty_tpl->tpl_vars['child']->value['amount'];?>
</td>
                                                    <td class="description" colspan="2"><?php echo $_smarty_tpl->tpl_vars['child']->value['description'];?>
</td>
                                                    <td style="width: 100px">
                                                        <a class="panel-btn update-child-btn"><i class="fa fa-fw fa-pencil"></i></a>
                                                        <a class="panel-btn delete-btn"><i class="fa fa-fw fa-close"></i></a>
                                                    </td>
                                                    <input class="parent-id" value="<?php echo $_smarty_tpl->tpl_vars['child']->value['parent_id'];?>
" type="hidden"/>
                                                </tr>
                                            <?php
$_smarty_tpl->tpl_vars['child'] = $foreach_child_Sav;
}
?>
                                            <tr class="balance">
                                                <td colspan="5">Остаток: <?php echo $_smarty_tpl->tpl_vars['cost']->value['balance'];?>
</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['cost'] = $foreach_cost_Sav;
}
?>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <div class="filter">
                        <div class="total">
                            Итого: <span><?php echo $_smarty_tpl->tpl_vars['cost_set']->value['total']['grn'];?>
 грн <?php echo $_smarty_tpl->tpl_vars['cost_set']->value['total']['rub'];?>
 руб</span>
                        </div>
                        <hr/>
                        <select class="form-control" id="vehicle">
                            <option value="" selected>выберите машину</option>
                            <?php
$_from = $_smarty_tpl->tpl_vars['vehicles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vehicle'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vehicle']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vehicle']->value) {
$_smarty_tpl->tpl_vars['vehicle']->_loop = true;
$foreach_vehicle_Sav = $_smarty_tpl->tpl_vars['vehicle'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['vehicle']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['vehicle']->value['registration_number'];?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['vehicle'] = $foreach_vehicle_Sav;
}
?>
                        </select>
                        <select class="form-control" id="worker">
                            <option value="" selected>выберите работника</option>
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
                                <option value="<?php echo $_smarty_tpl->tpl_vars['worker']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['worker']->value['last_name'];?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['worker'] = $foreach_worker_Sav;
}
?>
                        </select>
                        <button type="button" class="btn btn-block btn-primary btn-sm cost-mdl-btn">Добавить</button>
                    </div>
                    <hr/>

                </div>
            </div>
        </div>
    </div>
    <?php /*  Call merged included template "mdl_add-cost.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("mdl_add-cost.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1571256dd458e6a7b02_64371446', 'content_56dd458e6a7b07_50862188');
/*  End of included template "mdl_add-cost.tpl" */?>

    <?php /*  Call merged included template "mdl_add_child_cost.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("mdl_add_child_cost.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '73456dd458e6f9ba4_50041027', 'content_56dd458e6f5d11_90502085');
/*  End of included template "mdl_add_child_cost.tpl" */?>

    <?php /*  Call merged included template "mdl_update_cost.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("mdl_update_cost.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '2036456dd458e7112a2_05059846', 'content_56dd458e70d429_63907405');
/*  End of included template "mdl_update_cost.tpl" */?>

    <?php /*  Call merged included template "mdl_update-child-cost.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("mdl_update-child-cost.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '2839456dd458e75b632_37409577', 'content_56dd458e75b634_00124473');
/*  End of included template "mdl_update-child-cost.tpl" */?>

    <?php echo '<script'; ?>
>
        var cost = {
            limit : <?php echo $_smarty_tpl->tpl_vars['cost_set']->value['limit'];?>
,
            start_from : <?php echo $_smarty_tpl->tpl_vars['cost_set']->value['limit'];?>
,
            load : true,
            current_id : 0,
            parent_id : 0,
            filter_type : null,
            filter_id : null
        }
    <?php echo '</script'; ?>
>
    <style>
        .costs .cost-mdl-btn {
            width: 200px;
            float: right;
            margin-right: 30px;
        }
    </style>
    <!-- /.box -->

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
/*%%SmartyHeaderCode:1571256dd458e6a7b02_64371446%%*/
if ($_valid && !is_callable('content_56dd458e6a7b07_50862188')) {
function content_56dd458e6a7b07_50862188 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1571256dd458e6a7b02_64371446';
?>
<div class="modal fade" id="add_cost_mdl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Добавить расход</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Сумма <span>*</span></label>
                    <input id="amount" type="text" class="form-control float-control required">
                </div>
                <div class="form-group">
                    <label for="currency">Валюта</label>
                    <select id="currency" class="form-control">
                        <option value="грн" selected>грн</option>
                        <option value="руб">руб</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Тип <span>*</span></label>
                    <select id="parent_type" class="form-control required">
                        <option value="" selected>-</option>
                        <option value="worker">зарплата</option>
                        <option value="vehicle">ремонт</option>
                        <option value="fuel">топливо</option>
                        <option value="box">бокс</option>
                        <option value="dues">налоги</option>
                        <option value="other">другие</option>
                    </select>
                </div>
                <div class="form-group worker-field hidden-field">
                    <label>Работник</label>
                    <select id="parent_id" class="form-control">
                        <option value="" selected>-</option>
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
                            <option value="<?php echo $_smarty_tpl->tpl_vars['worker']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['worker']->value['last_name'];?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['worker'] = $foreach_worker_Sav;
}
?>
                    </select>
                </div>
                <div class="form-group vehicle-field fuel-field hidden-field">
                    <label>Машина</label>
                    <select id="parent_id" class="form-control">
                        <option value="" selected>-</option>
                        <?php
$_from = $_smarty_tpl->tpl_vars['vehicles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vehicle'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vehicle']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vehicle']->value) {
$_smarty_tpl->tpl_vars['vehicle']->_loop = true;
$foreach_vehicle_Sav = $_smarty_tpl->tpl_vars['vehicle'];
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['vehicle']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['vehicle']->value['registration_number'];?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['vehicle'] = $foreach_vehicle_Sav;
}
?>
                    </select>
                </div>
                <div class="form-group vehicle-field hidden-field">
                    <label>Спидометр</label>
                    <input id="sp" type="text" class="form-control" maxlength="6" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="Enter ...">
                </div>
                <div class="form-group">
                    <label>Описание</label>
                    <textarea id="description" class="form-control" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label>Дата <span>*</span></label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input id="date" type="text" class="date-control form-control required">
                    </div>
                    <!-- /.input group -->
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
/*/%%SmartyNocache:1571256dd458e6a7b02_64371446%%*/
}
}
?><?php
/*%%SmartyHeaderCode:73456dd458e6f9ba4_50041027%%*/
if ($_valid && !is_callable('content_56dd458e6f5d11_90502085')) {
function content_56dd458e6f5d11_90502085 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '73456dd458e6f9ba4_50041027';
?>
<div class="modal fade" id="add_child_cost_mdl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Добавить расход</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Сумма <span>*</span></label>
                    <input id="amount" type="text" class="form-control float-control required">
                </div>
                <div class="form-group">
                    <label>Описание <span>*</span></label>
                    <textarea id="description" class="form-control required" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Дата <span>*</span></label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input id="date" type="text" class="date-control form-control required">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary add-btn">Добавить</button>
            </div>
        </div>
    </div>
</div><?php
/*/%%SmartyNocache:73456dd458e6f9ba4_50041027%%*/
}
}
?><?php
/*%%SmartyHeaderCode:2036456dd458e7112a2_05059846%%*/
if ($_valid && !is_callable('content_56dd458e70d429_63907405')) {
function content_56dd458e70d429_63907405 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2036456dd458e7112a2_05059846';
?>
<div class="modal fade" id="update_cost_mdl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Изменить расход</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Сумма <span>*</span></label>
                    <input id="amount" type="text" class="form-control float-control required">
                </div>
                <div class="form-group">
                    <label for="currency">Валюта</label>
                    <select id="currency" class="form-control">
                        <option value="грн" selected>грн</option>
                        <option value="руб">руб</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Тип <span>*</span></label>
                    <select id="parent_type" class="form-control required">
                        <option value="" selected>-</option>
                        <option value="worker">зарплата</option>
                        <option value="vehicle">ремонт</option>
                        <option value="fuel">топливо</option>
                        <option value="box">бокс</option>
                        <option value="dues">налоги</option>
                        <option value="other">другие</option>
                    </select>
                </div>
                <div class="form-group worker-field hidden-field">
                    <label>Работник</label>
                    <select id="parent_id" class="form-control">
                        <option value="" selected>-</option>
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
                            <option value="<?php echo $_smarty_tpl->tpl_vars['worker']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['worker']->value['last_name'];?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['worker'] = $foreach_worker_Sav;
}
?>
                    </select>
                </div>
                <div class="form-group vehicle-field fuel-field hidden-field">
                    <label>Машина</label>
                    <select id="parent_id" class="form-control">
                        <option value="" selected>-</option>
                        <?php
$_from = $_smarty_tpl->tpl_vars['vehicles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vehicle'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vehicle']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vehicle']->value) {
$_smarty_tpl->tpl_vars['vehicle']->_loop = true;
$foreach_vehicle_Sav = $_smarty_tpl->tpl_vars['vehicle'];
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['vehicle']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['vehicle']->value['registration_number'];?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['vehicle'] = $foreach_vehicle_Sav;
}
?>
                    </select>
                </div>
                <div class="form-group vehicle-field hidden-field">
                    <label>Спидометр</label>
                    <input id="sp" type="text" class="form-control" maxlength="6" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="Enter ...">
                </div>
                <div class="form-group">
                    <label>Описание</label>
                    <textarea id="description" class="form-control" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label>Дата <span>*</span></label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input id="date" type="text" class="date-control form-control required">
                    </div>
                    <!-- /.input group -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary update-btn">Изменить</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>

<style>
    .vehicle-field, .worker-field {
        display: none;
    }
</style><?php
/*/%%SmartyNocache:2036456dd458e7112a2_05059846%%*/
}
}
?><?php
/*%%SmartyHeaderCode:2839456dd458e75b632_37409577%%*/
if ($_valid && !is_callable('content_56dd458e75b634_00124473')) {
function content_56dd458e75b634_00124473 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2839456dd458e75b632_37409577';
?>
<div class="modal fade" id="update_child_cost_mdl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Изменить расход</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Сумма <span>*</span></label>
                    <input id="amount" type="text" class="form-control float-control required">
                </div>
                <div class="form-group">
                    <label>Описание <span>*</span></label>
                    <textarea id="description" class="form-control required" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Дата <span>*</span></label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input id="date" type="text" class="date-control form-control required">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary update-btn">Изменить</button>
            </div>
        </div>
    </div>
</div><?php
/*/%%SmartyNocache:2839456dd458e75b632_37409577%%*/
}
}
?>