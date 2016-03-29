<?php /* Smarty version 3.1.27, created on 2016-03-13 19:25:05
         compiled from "D:\Ampps\www\chikotrans\admin\application\view\templates\prt_registry.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2753056e5a271080a29_11951805%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd63f1fe9bf6ff6b8a8bd9c50ec45877633b98cda' => 
    array (
      0 => 'D:\\Ampps\\www\\chikotrans\\admin\\application\\view\\templates\\prt_registry.tpl',
      1 => 1457889885,
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
    '5fd70e7c0e2f7fafb5b86d8fc5008667615ac57d' => 
    array (
      0 => '5fd70e7c0e2f7fafb5b86d8fc5008667615ac57d',
      1 => 0,
      2 => 'string',
    ),
    '8121a280baa42c8d74553f22419890af1ff00d6c' => 
    array (
      0 => 'D:\\Ampps\\www\\chikotrans\\admin\\application\\view\\templates\\mdl_add-registry.tpl',
      1 => 1457555603,
      2 => 'file',
    ),
    '307b272c0e8a6311a55c8b798266884972c43634' => 
    array (
      0 => 'D:\\Ampps\\www\\chikotrans\\admin\\application\\view\\templates\\mdl_update-registry.tpl',
      1 => 1457557241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2753056e5a271080a29_11951805',
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
  'unifunc' => 'content_56e5a2712c2cb6_00198961',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e5a2712c2cb6_00198961')) {
function content_56e5a2712c2cb6_00198961 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2753056e5a271080a29_11951805';
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
$_smarty_tpl->properties['nocache_hash'] = '2753056e5a271080a29_11951805';
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
            <div class="box registry">
                <div class="box-header with-border">
                    <h3 class="box-title">Реестр</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="parents table table-bordered">
                        <tr>
                            <th style="width: 80px">Дата</th>
                            <th style="width: 120px">Авто</th>
                            <th style="width: 80px">Водитель</th>
                            <th>Клиент</th>
                            <th>Обьём выполненных работ</th>
                            <th>Валовый доход</th>
                            <th>Д/Т расход</th>
                            <th>Зарплата</th>
                            <th>Чистый доход</th>
                            <th style="width: 100px">Панель</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->tpl_vars['registry_set']->value['rows'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
                            <tr id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="cell" tabindex="0" role="button" data-content="
                                                        <div class='pop-container'>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Дата:</div>
                                                                <div class='pop-value'><?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Авто:</div>
                                                                <div class='pop-value'><?php echo $_smarty_tpl->tpl_vars['row']->value['vehicle_number'];?>
</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Водитель:</div>
                                                                <div class='pop-value'><?php echo $_smarty_tpl->tpl_vars['row']->value['driver_name'];?>
</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Клиент:</div>
                                                                <div class='pop-value'><?php echo $_smarty_tpl->tpl_vars['row']->value['client'];?>
</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Спидометр (до):</div>
                                                                <div class='pop-value'><?php echo $_smarty_tpl->tpl_vars['row']->value['sp_before'];?>
 км</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Спидометр (после):</div>
                                                                <div class='pop-value'><?php echo $_smarty_tpl->tpl_vars['row']->value['sp_after'];?>
 км</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Километраж:</div>
                                                                <div class='pop-value'><?php echo $_smarty_tpl->tpl_vars['row']->value['km'];?>
 км</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Д/Т заправка:</div>
                                                                <div class='pop-value'><?php echo $_smarty_tpl->tpl_vars['row']->value['fuel_get'];?>
 л.</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Д/Т до:</div>
                                                                <div class='pop-value'><?php echo $_smarty_tpl->tpl_vars['row']->value['fuel_before'];?>
 л.</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Д/Т после:</div>
                                                                <div class='pop-value'><?php echo $_smarty_tpl->tpl_vars['row']->value['fuel_after'];?>
 л.</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Материал:</div>
                                                                <div class='pop-value'><?php echo $_smarty_tpl->tpl_vars['row']->value['material'];?>
</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Тип:</div>
                                                                <div class='pop-value'><?php echo $_smarty_tpl->tpl_vars['row']->value['tariff_type'];?>
</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Количество:</div>
                                                                <div class='pop-value'><?php echo $_smarty_tpl->tpl_vars['row']->value['quantity'];?>
</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Тариф:</div>
                                                                <div class='pop-value'><?php echo $_smarty_tpl->tpl_vars['row']->value['tariff'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['currency'];?>
</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Дополнительная ходка:</div>
                                                                <div class='pop-value'><?php echo $_smarty_tpl->tpl_vars['row']->value['partial'];?>
</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Описание:</div>
                                                                <div class='pop-value'><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Валовый доход:</div>
                                                                <div class='pop-value'><?php echo $_smarty_tpl->tpl_vars['row']->value['dirty_gain'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['currency'];?>
</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Зарплата:</div>
                                                                <div class='pop-value'><?php echo $_smarty_tpl->tpl_vars['row']->value['salary'];?>
</div>
                                                            </div>
                                                            <div class='pop-row'>
                                                                <div class='pop-field'>Чистый доход:</div>
                                                                <div class='pop-value'><?php echo $_smarty_tpl->tpl_vars['row']->value['clear_gain'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['currency'];?>
</div>
                                                            </div>
                                                        </div>
                        ">
                                <td class="date"><?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
</td>
                                <td class="vehicle_number"><?php echo $_smarty_tpl->tpl_vars['row']->value['vehicle_number'];?>
</td>
                                <td class="driver_name"><?php echo $_smarty_tpl->tpl_vars['row']->value['driver_name'];?>
</td>
                                <td class="client"><?php echo $_smarty_tpl->tpl_vars['row']->value['client'];?>
</td>
                                <td class="short_description">
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['quantity'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['tariff_type'];?>
 по <?php echo $_smarty_tpl->tpl_vars['row']->value['tariff'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['currency'];?>
 <?php if ($_smarty_tpl->tpl_vars['row']->value['partial']) {?>+ <?php echo $_smarty_tpl->tpl_vars['row']->value['partial'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['currency'];
}?>
                                </td>
                                <td class="dirty_gain">
                                    <span><?php echo $_smarty_tpl->tpl_vars['row']->value['dirty_gain'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['currency'];?>
</span>
                                </td>
                                <td class="fuel_lost_liter"><?php echo $_smarty_tpl->tpl_vars['row']->value['fuel_lost'];?>
 л.</td>
                                <td class="salary_total">
                                    <span><?php echo $_smarty_tpl->tpl_vars['row']->value['salary'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['currency'];?>
</span>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['clear_gain'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['currency'];?>
</td>
                                <td>
                                    <a class="panel-btn update-mdl-btn"><i class="fa fa-fw fa-pencil"></i></a>
                                    <a class="panel-btn delete-btn"><i class="fa fa-fw fa-close"></i></a>
                                </td>
                                <input type="hidden" class="vehicle" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['vehicle'];?>
"/>
                                <input type="hidden" class="driver" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['driver'];?>
"/>
                                <input type="hidden" class="sp_before" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['sp_before'];?>
"/>
                                <input type="hidden" class="sp_after" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['sp_after'];?>
"/>
                                <input type="hidden" class="fuel_get" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['fuel_get'];?>
"/>
                                <input type="hidden" class="fuel_before" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['fuel_before'];?>
"/>
                                <input type="hidden" class="fuel_after" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['fuel_after'];?>
"/>
                                <input type="hidden" class="fuel_type" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['fuel_type'];?>
"/>
                                <input type="hidden" class="fuel_lost" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['fuel_lost'];?>
"/>
                                <input type="hidden" class="material" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['material'];?>
"/>
                                <input type="hidden" class="quantity" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['quantity'];?>
"/>
                                <input type="hidden" class="tariff" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['tariff'];?>
"/>
                                <input type="hidden" class="currency" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['currency'];?>
"/>
                                <input type="hidden" class="tariff_type" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['tariff_type'];?>
"/>
                                <input type="hidden" class="partial" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['partial'];?>
"/>
                                <input type="hidden" class="salary" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['salary'];?>
"/>
                                <input type="hidden" class="description" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
"/>
                                <input type="hidden" class="salary_cost_id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['salary_cost_id'];?>
"/>
                            </tr>
                        <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <div class="total">
                        Итого: <span>Валовый - <?php echo $_smarty_tpl->tpl_vars['registry_set']->value['total']['dirty'];?>
; Чистый - <?php echo $_smarty_tpl->tpl_vars['registry_set']->value['total']['clear'];?>
</span>
                    </div>
                    <hr/>
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
                        <button type="button" class="btn btn-block btn-primary btn-sm add-reg-mdl-btn">Добавить</button>
                    </div>
                </div>
            </div>
            <?php /*  Call merged included template "mdl_add-registry.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("mdl_add-registry.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '216156e5a2711efd88_52393405', 'content_56e5a2711efd86_50144789');
/*  End of included template "mdl_add-registry.tpl" */?>

            <?php /*  Call merged included template "mdl_update-registry.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("mdl_update-registry.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '175156e5a27122a702_89123659', 'content_56e5a271226887_02254148');
/*  End of included template "mdl_update-registry.tpl" */?>

        </div>
    </div>
    <?php echo '<script'; ?>
>
        var registry = {
            limit : <?php echo $_smarty_tpl->tpl_vars['registry_set']->value['limit'];?>
,
            start_from : <?php echo $_smarty_tpl->tpl_vars['registry_set']->value['limit'];?>
,
            load : true,
            current_id : 0,
            salary_cost_id : 0,
            fuel_lost : 0,
            vehicle : null
        }
    <?php echo '</script'; ?>
>
    <style>
        .registry .add-reg-mdl-btn {
            width: 200px;
            float: right;
        }

        .pop-row {
            clear: both;
        }
        .pop-field {
            float: left;
            font-weight: bold;
            margin-right: 10px;
        }

        .popover {
            width: 500px;
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
/*%%SmartyHeaderCode:216156e5a2711efd88_52393405%%*/
if ($_valid && !is_callable('content_56e5a2711efd86_50144789')) {
function content_56e5a2711efd86_50144789 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '216156e5a2711efd88_52393405';
?>
<div class="modal fade" id="add_registry_mdl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Добавить строку</h4>
            </div>
            <div class="modal-body">
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
                    <label>Машина <span>*</span></label>
                    <select id="vehicle" class="form-control required">
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
                <div class="form-group">
                    <label>Клиент <span>*</span></label>
                    <input id="client" type="text" class="form-control required">
                </div>
                <div class="form-group">
                    <label>Спидометр <span>*</span></label>
                    <input id="sp_before" type="text" class="form-control required" maxlength="6" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="до">
                    <input id="sp_after" type="text" class="form-control required" maxlength="6" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="после">
                </div>
                <div class="form-group">
                    <label for="currency">Валюта</label>
                    <select id="currency" class="form-control">
                        <option value="грн" selected>грн</option>
                        <option value="руб">руб</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Топливо <span>*</span></label>
                    <select id="fuel_type" class="form-control required">
                        <option value="">выберите заправку</option>
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
                    <input id="fuel_tariff" type="text" class="form-control float-control cash-field hidden-field"
                           maxlength="5" placeholder="Цена за литр">
                    <input id="fuel_get" type="text" class="form-control float-control" placeholder="Д/Т заправка">
                    <input id="fuel_before" type="text" class="form-control float-control required" placeholder="Д/Т до *">
                    <input id="fuel_after" type="text" class="form-control float-control required" placeholder="Д/Т после *">
                </div>
                <div class="form-group">
                    <label>Материал</label>
                    <input id="material" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Объём выполненных работ <span>*</span></label>
                    <select id="tariff_type" class="form-control">
                        <option value="ход" selected>ход</option>
                        <option value="км">км</option>
                        <option value="т/км">т/км</option>
                        <option value="т">т</option>
                        <option value="ч">ч</option>
                    </select>
                    <input id="quantity" type="text" class="form-control float-control required" placeholder="Количество *">
                    <input id="tariff" type="text" class="form-control float-control required" placeholder="Тариф *">
                    <input id="weight" type="text" class="form-control float-control hidden-field" placeholder="Вес">
                    <input id="partial" type="text" class="form-control float-control" placeholder="Неполная ходка (сумма)">
                    <input id="salary_tariff" type="text" class="form-control float-control" placeholder="Зарплата за ед.">
                    <input id="salary" type="text" class="form-control float-control hidden-field" placeholder="Зарплата">
                </div>
                <div class="form-group">
                    <label>Описание</label>
                    <textarea id="description" class="form-control" rows="3"></textarea>
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
    #add_registry_mdl .form-control, #add_registry_mdl select {
        margin-bottom: 20px;
    }

    #date {
        margin: 0!important;
    }
</style><?php
/*/%%SmartyNocache:216156e5a2711efd88_52393405%%*/
}
}
?><?php
/*%%SmartyHeaderCode:175156e5a27122a702_89123659%%*/
if ($_valid && !is_callable('content_56e5a271226887_02254148')) {
function content_56e5a271226887_02254148 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '175156e5a27122a702_89123659';
?>
<div class="modal fade" id="update_registry_mdl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Изменить строку</h4>
            </div>
            <div class="modal-body">
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
                    <label>Машина <span>*</span></label>
                    <select id="vehicle" class="form-control required">
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
                <div class="form-group">
                    <label>Клиент <span>*</span></label>
                    <input id="client" type="text" class="form-control required">
                </div>
                <div class="form-group">
                    <label>Спидометр <span>*</span></label>
                    <input id="sp_before" type="text" class="form-control required" maxlength="6" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="до">
                    <input id="sp_after" type="text" class="form-control required" maxlength="6" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="после">
                </div>
                <div class="form-group">
                    <label for="currency">Валюта</label>
                    <select id="currency" class="form-control">
                        <option value="грн" selected>грн</option>
                        <option value="руб">руб</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Топливо <span>*</span></label>
                    <select id="fuel_type" class="form-control required">
                        <option value="">выберите заправку</option>
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
                    <input id="fuel_tariff" type="text" class="form-control float-control cash-field hidden-field"
                           maxlength="5" placeholder="Цена за литр">
                    <input id="fuel_get" type="text" class="form-control float-control" placeholder="Д/Т заправка">
                    <input id="fuel_before" type="text" class="form-control float-control required" placeholder="Д/Т до *">
                    <input id="fuel_after" type="text" class="form-control float-control required" placeholder="Д/Т после *">
                </div>
                <div class="form-group">
                    <label>Материал</label>
                    <input id="material" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Объём выполненных работ <span>*</span></label>
                    <select id="tariff_type" class="form-control">
                        <option value="ход" selected>ход</option>
                        <option value="км">км</option>
                        <option value="т/км">т/км</option>
                        <option value="т">т</option>
                        <option value="ч">ч</option>
                    </select>
                    <input id="quantity" type="text" class="form-control float-control required" placeholder="Количество *">
                    <input id="tariff" type="text" class="form-control float-control required" placeholder="Тариф *">
                    <input id="weight" type="text" class="form-control float-control hidden-field" placeholder="Вес">
                    <input id="partial" type="text" class="form-control float-control" placeholder="Неполная ходка (сумма)">
                    <input id="salary_tariff" type="text" class="form-control float-control" placeholder="Зарплата за ед.">
                    <input id="salary" type="text" class="form-control float-control hidden-field" placeholder="Зарплата">
                </div>
                <div class="form-group">
                    <label>Описание</label>
                    <textarea id="description" class="form-control" rows="3"></textarea>
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
    #update_registry_mdl .form-control, #add_registry_mdl select {
        margin-bottom: 20px;
    }

    #date {
        margin: 0!important;
    }
</style><?php
/*/%%SmartyNocache:175156e5a27122a702_89123659%%*/
}
}
?>