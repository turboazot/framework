<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <!-- <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> -->
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{$bootstrap_path}css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{$dist_path}css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{$dist_path}css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{$plugins_path}iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{$plugins_path}morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{$plugins_path}jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{$plugins_path}datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{$plugins_path}daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{$plugins_path}bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <link rel="stylesheet" href="{$css_path}font-face.css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    {include file="prt_header.tpl"}
    {include file="prt_main-sidebar.tpl"}
    {block name="main-content"}

    {/block}
    {include file="prt_footer.tpl"}
    {include file="prt_control-sidebar.tpl"}
</div>
<!-- ./wrapper -->
<script>
    var current_id = {$current_id};
</script>
<!-- jQuery 2.2.0 -->
<script src="{$plugins_path}jQuery/jQuery-2.2.0.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="{$bootstrap_path}js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{$plugins_path}morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="{$plugins_path}sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{$plugins_path}jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{$plugins_path}jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="{$plugins_path}knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script src="{$plugins_path}daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{$plugins_path}datepicker/bootstrap-datepicker.js"></script>
<!-- InputMask -->
<script src="{$plugins_path}input-mask/jquery.inputmask.js"></script>
<script src="{$plugins_path}input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="{$plugins_path}input-mask/jquery.inputmask.extensions.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{$plugins_path}bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{$plugins_path}slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{$plugins_path}fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{$dist_path}js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{$dist_path}js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script>
    {$ajax}
</script>

<script src="{$dist_path}js/demo.js"></script>
<script src="{$js_path}custom.js"></script>
<script src="{$js_path}cost.js"></script>
<script src="{$js_path}fuel-type.js"></script>
<script src="{$js_path}fuel.js"></script>
<script src="{$js_path}registry.js"></script>
<script src="{$js_path}vehicle.js"></script>
<script src="{$js_path}worker.js"></script>
</body>
</html>
