<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo e(isset($page_title) ? $page_title : config('app.name')); ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo e(asset("AdminLTE/bootstrap/css/bootstrap.min.css")); ?>" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo e(asset("AdminLTE/dist/css/AdminLTE.min.css")); ?>" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="<?php echo e(asset("AdminLTE/dist/css/skins/skin-blue.min.css")); ?>" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <?php echo $__env->yieldContent('cssPlugins'); ?>
  </head>
  <body class="skin-blue">
    <div class="wrapper">

      <!-- Header -->
      <?php echo $__env->make('layouts.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <!-- Sidebar -->
      <?php echo $__env->make('layouts.partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php echo e(isset($page_title) ? $page_title : "Page Title"); ?>

            <small><?php echo e(isset($page_description) ? $page_description : null); ?></small>
          </h1>
          <!-- You can dynamically generate breadcrumbs here -->
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">          
          <!-- Your Page Content Here -->
          <?php echo $__env->yieldContent('content'); ?>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Footer -->

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.3 -->
    <script src="<?php echo e(asset ('AdminLTE/plugins/jQuery/jquery-2.2.3.min.js')); ?>"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo e(asset ('AdminLTE/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo e(asset ('AdminLTE/dist/js/app.min.js')); ?>" type="text/javascript"></script>
    <!-- alert -->
    <script src="<?php echo e(asset ('AdminLTE/dist/js/sweetalert.min.js')); ?>" type="text/javascript"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins. 
          Both of these plugins are recommended to enhance the 
          user experience -->
    <?php echo $__env->yieldContent('jsPlugins'); ?>
    <!-- flash_message -->
    <?php echo $__env->make('layouts.flash.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </body>
</html>