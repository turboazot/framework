<?php /* Smarty version 3.1.27, created on 2016-03-09 22:01:46
         compiled from "D:\Ampps\www\chikotrans\admin\application\view\templates\prt_fuel.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2948056e0812a536e36_69029465%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e94beae0b4dbaabb03dda8768e3771829846736' => 
    array (
      0 => 'D:\\Ampps\\www\\chikotrans\\admin\\application\\view\\templates\\prt_fuel.tpl',
      1 => 1457211107,
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
    'e28b18dc0ac4bb40ca655cc4f4c778da0c6f9223' => 
    array (
      0 => 'e28b18dc0ac4bb40ca655cc4f4c778da0c6f9223',
      1 => 0,
      2 => 'string',
    ),
    'e97a9d37eda6ef492dd1a3bd0753c1154fac630a' => 
    array (
      0 => 'D:\\Ampps\\www\\chikotrans\\admin\\application\\view\\templates\\mdl_add-fuel.tpl',
      1 => 1457336253,
      2 => 'file',
    ),
    '717af874153b09c039d10113eaabbcb30b83f187' => 
    array (
      0 => 'D:\\Ampps\\www\\chikotrans\\admin\\application\\view\\templates\\mdl_update-fuel.tpl',
      1 => 1457336877,
      2 => 'file',
    ),
    'a1678a25ce211bc2ff8dbe8b45b93633f93b5a5c' => 
    array (
      0 => 'D:\\Ampps\\www\\chikotrans\\admin\\application\\view\\templates\\mdl_add-fuel-type.tpl',
      1 => 1457336306,
      2 => 'file',
    ),
    '9d4a635b3b8f5d5e5dbcd7d7cba5908046d435c4' => 
    array (
      0 => 'D:\\Ampps\\www\\chikotrans\\admin\\application\\view\\templates\\mdl_update-fuel-type.tpl',
      1 => 1457336907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2948056e0812a536e36_69029465',
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
  'unifunc' => 'content_56e0812b00ad12_53577006',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e0812b00ad12_53577006')) {
function content_56e0812b00ad12_53577006 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2948056e0812a536e36_69029465';
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
$_smarty_tpl->properties['nocache_hash'] = '2948056e0812a536e36_69029465';
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
            <div class="box fuels">
                <div class="box-header with-border">
                    <h3 class="box-title">Оборот топлива</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 30px">Дата</th>
                            <th>Кол-во (л.)</th>
                            <th>Тип</th>
                            <th style="width: 120px">Машина</th>
                            <th style="width: 60px;">Панель</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->tpl_vars['fuel_set']->value['fuels'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['fuel'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['fuel']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['fuel']->value) {
$_smarty_tpl->tpl_vars['fuel']->_loop = true;
$foreach_fuel_Sav = $_smarty_tpl->tpl_vars['fuel'];
?>
                            <tr id="<?php echo $_smarty_tpl->tpl_vars['fuel']->value['id'];?>
" class="cell">
                                <td class="date"><?php echo $_smarty_tpl->tpl_vars['fuel']->value['date'];?>
</td>
                                <td class="amount"><?php if ($_smarty_tpl->tpl_vars['fuel']->value['vehicle']) {?>
                                        - <span><?php echo $_smarty_tpl->tpl_vars['fuel']->value['amount'];?>
</span>
                                    <?php } else { ?>
                                        + <span><?php echo $_smarty_tpl->tpl_vars['fuel']->value['amount'];?>
</span>
                                    <?php }?></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['fuel']->value['type_word'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['fuel']->value['vehicle_number'];?>
</td>
                                <td>
                                    <a class="panel-btn update-mdl-btn"><i class="fa fa-fw fa-pencil"></i></a>
                                    <a class="panel-btn delete-btn"><i class="fa fa-fw fa-close"></i></a>
                                </td>
                                <input value="<?php echo $_smarty_tpl->tpl_vars['fuel']->value['type'];?>
" class="type" type="hidden"/>
                                <input value="<?php echo $_smarty_tpl->tpl_vars['fuel']->value['vehicle'];?>
" class="vehicle" type="hidden"/>
                            </tr>
                        <?php
$_smarty_tpl->tpl_vars['fuel'] = $foreach_fuel_Sav;
}
?>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <div class="box-footer clearfix">
                        <div class="filter">
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
                            <button type="button" class="btn btn-block btn-primary btn-sm add-f-mdl-btn">Добавить</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php /*  Call merged included template "mdl_add-fuel.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("mdl_add-fuel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '2947956e0812ac91cf3_28560874', 'content_56e0812ac8de74_92029572');
/*  End of included template "mdl_add-fuel.tpl" */?>

            <?php /*  Call merged included template "mdl_update-fuel.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("mdl_update-fuel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1830156e0812ad45819_67567666', 'content_56e0812ad22595_75558120');
/*  End of included template "mdl_update-fuel.tpl" */?>

            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
            <div class="box fuel-types">
                <div class="box-header">
                    <h3 class="box-title">Заправки</h3>

                    <div class="box-tools">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table">
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th>Название</th>
                            <th>Валюта</th>
                            <th>Баланс</th>
                            <th>Тариф</th>
                            <th style="width: 60px">Панель</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->tpl_vars['fuel_types']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['fuel_type'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['fuel_type']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['fuel_type']->value) {
$_smarty_tpl->tpl_vars['fuel_type']->_loop = true;
$foreach_fuel_type_Sav = $_smarty_tpl->tpl_vars['fuel_type'];
?>
                            <tr class="cell">
                                <td class="id"><?php echo $_smarty_tpl->tpl_vars['fuel_type']->value['id'];?>
</td>
                                <td class="name"><?php echo $_smarty_tpl->tpl_vars['fuel_type']->value['name'];?>
</td>
                                <td class="currency"><?php echo $_smarty_tpl->tpl_vars['fuel_type']->value['currency'];?>
</td>
                                <td class="balance"><?php echo $_smarty_tpl->tpl_vars['fuel_type']->value['balance'];?>
</td>
                                <td class="tariff"><span class="badge bg-green"><?php echo $_smarty_tpl->tpl_vars['fuel_type']->value['tariff'];?>
</span></td>
                                <td>
                                    <a class="panel-btn update-mdl-btn"><i class="fa fa-fw fa-pencil"></i></a>
                                    <a class="panel-btn delete-btn"><i class="fa fa-fw fa-close"></i></a>
                                </td>
                            </tr>
                        <?php
$_smarty_tpl->tpl_vars['fuel_type'] = $foreach_fuel_type_Sav;
}
?>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <button type="button" class="btn btn-block btn-primary btn-sm add-ft-mdl-btn">Добавить</button>
                </div>
            </div>
            <?php /*  Call merged included template "mdl_add-fuel-type.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("mdl_add-fuel-type.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '685156e0812adf54c0_80914386', 'content_56e0812add9f32_86151671');
/*  End of included template "mdl_add-fuel-type.tpl" */?>

            <?php /*  Call merged included template "mdl_update-fuel-type.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("mdl_update-fuel-type.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '2418556e0812ae4b3d1_75443238', 'content_56e0812ae47556_98431646');
/*  End of included template "mdl_update-fuel-type.tpl" */?>

            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <?php echo '<script'; ?>
>
        var fuel_type_id = 0;
        var fuel = {
            limit : <?php echo $_smarty_tpl->tpl_vars['fuel_set']->value['limit'];?>
,
            start_from : <?php echo $_smarty_tpl->tpl_vars['fuel_set']->value['limit'];?>
,
            load : true,
            current_id : 0,
            vehicle : null
        }
    <?php echo '</script'; ?>
>
    <style>
        .add-ft-mdl-btn, .add-f-mdl-btn {
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
/*%%SmartyHeaderCode:2947956e0812ac91cf3_28560874%%*/
if ($_valid && !is_callable('content_56e0812ac8de74_92029572')) {
function content_56e0812ac8de74_92029572 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2947956e0812ac91cf3_28560874';
?>
<div class="modal fade" id="add_fuel_mdl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Топливо</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Количество <span>*</span></label>
                    <input id="amount" type="text" class="form-control float-control required">
                </div>
                <div class="form-group">
                    <label>Тип <span>*</span></label>
                    <select id="type" class="form-control required">
                        <option value="">-</option>
                        <option value="cash">наличными</option>
                        <?php
$_from = $_smarty_tpl->tpl_vars['fuel_types']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['fuel_type'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['fuel_type']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['fuel_type']->value) {
$_smarty_tpl->tpl_vars['fuel_type']->_loop = true;
$foreach_fuel_type_Sav = $_smarty_tpl->tpl_vars['fuel_type'];
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['fuel_type']->value['id'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['fuel_type']->value['name'];?>
 / <?php echo $_smarty_tpl->tpl_vars['fuel_type']->value['tariff'];?>
 <?php echo $_smarty_tpl->tpl_vars['fuel_type']->value['currency'];?>

                            </option>
                        <?php
$_smarty_tpl->tpl_vars['fuel_type'] = $foreach_fuel_type_Sav;
}
?>
                    </select>
                </div>
                <div class="form-group cash-field hidden-field">
                    <label>Цена за литр</label>
                    <input id="tariff" type="text" class="form-control float-control" maxlength="5">
                </div>
                <div class="form-group cash-field hidden-field">
                    <label for="currency">Валюта</label>
                    <select id="currency" class="form-control">
                        <option value="грн" selected>грн</option>
                        <option value="руб">руб</option>
                    </select>
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
                <div class="form-group">
                    <label>Машина</label>
                    <select id="vehicle" class="form-control">
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary add-btn">Добавить</button>
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
/*/%%SmartyNocache:2947956e0812ac91cf3_28560874%%*/
}
}
?><?php
/*%%SmartyHeaderCode:1830156e0812ad45819_67567666%%*/
if ($_valid && !is_callable('content_56e0812ad22595_75558120')) {
function content_56e0812ad22595_75558120 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1830156e0812ad45819_67567666';
?>
<div class="modal fade" id="update_fuel_mdl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Топливо</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Количество <span>*</span></label>
                    <input id="amount" type="text" class="form-control float-control required">
                </div>
                <div class="form-group">
                    <label>Тип <span>*</span></label>
                    <select id="type" class="form-control required">
                        <option value="">-</option>
                        <option value="cash">наличными</option>
                        <?php
$_from = $_smarty_tpl->tpl_vars['fuel_types']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['fuel_type'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['fuel_type']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['fuel_type']->value) {
$_smarty_tpl->tpl_vars['fuel_type']->_loop = true;
$foreach_fuel_type_Sav = $_smarty_tpl->tpl_vars['fuel_type'];
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['fuel_type']->value['id'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['fuel_type']->value['name'];?>
 / <?php echo $_smarty_tpl->tpl_vars['fuel_type']->value['tariff'];?>
 <?php echo $_smarty_tpl->tpl_vars['fuel_type']->value['currency'];?>

                            </option>
                        <?php
$_smarty_tpl->tpl_vars['fuel_type'] = $foreach_fuel_type_Sav;
}
?>
                    </select>
                </div>
                <div class="form-group cash-field hidden-field">
                    <label>Цена за литр</label>
                    <input id="tariff" type="text" class="form-control float-control" maxlength="5">
                </div>
                <div class="form-group cash-field hidden-field">
                    <label for="currency">Валюта</label>
                    <select id="currency" class="form-control">
                        <option value="грн" selected>грн</option>
                        <option value="руб">руб</option>
                    </select>
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
                <div class="form-group">
                    <label>Машина</label>
                    <select id="vehicle" class="form-control">
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
/*/%%SmartyNocache:1830156e0812ad45819_67567666%%*/
}
}
?><?php
/*%%SmartyHeaderCode:685156e0812adf54c0_80914386%%*/
if ($_valid && !is_callable('content_56e0812add9f32_86151671')) {
function content_56e0812add9f32_86151671 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '685156e0812adf54c0_80914386';
?>
<div class="modal fade" id="add_fuel_type_mdl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Добавить заправку</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Название <span>*</span></label>
                    <input id="name" type="text" class="form-control required">
                </div>
                <div class="form-group">
                    <label for="currency">Валюта</label>
                    <select id="currency" class="form-control">
                        <option value="грн" selected>грн</option>
                        <option value="руб">руб</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Тарифф <span>*</span></label>
                    <input id="tariff" type="text" class="form-control float-control required" maxlength="5">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary add-btn">Добавить</button>
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
/*/%%SmartyNocache:685156e0812adf54c0_80914386%%*/
}
}
?><?php
/*%%SmartyHeaderCode:2418556e0812ae4b3d1_75443238%%*/
if ($_valid && !is_callable('content_56e0812ae47556_98431646')) {
function content_56e0812ae47556_98431646 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2418556e0812ae4b3d1_75443238';
?>
<div class="modal fade" id="update_fuel_type_mdl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Изменить заправку</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Название <span>*</span></label>
                    <input id="name" type="text" class="form-control required">
                </div>
                <div class="form-group">
                    <label for="currency">Валюта</label>
                    <select id="currency" class="form-control">
                        <option value="грн" selected>грн</option>
                        <option value="руб">руб</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Тарифф <span>*</span></label>
                    <input id="tariff" type="text" class="form-control float-control required" maxlength="5">
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
/*/%%SmartyNocache:2418556e0812ae4b3d1_75443238%%*/
}
}
?>