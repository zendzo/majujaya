<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <?php echo $__env->make('profile.user_image', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <!-- /.box -->

          <!-- About Me Box -->
          <?php echo $__env->make('profile.user_about', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
              <li><a href="#store" data-toggle="tab">Data Toko</a></li>
            </ul>
            <div class="tab-content">

            <!-- user activity -->
            <?php echo $__env->make('profile.user_activity', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <!-- user setting -->
            <?php echo $__env->make('profile.user_setting', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <!-- user profile -->
            <?php echo $__env->make('profile.user_store', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>