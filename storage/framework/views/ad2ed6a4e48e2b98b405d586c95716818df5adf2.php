<?php $__env->startSection('cssPlugins'); ?>
<!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE/plugins/datepicker/datepicker3.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('jsPlugins'); ?>

<!-- bootstrap datepicker -->
<script src="<?php echo e(asset('AdminLTE/plugins/datepicker/bootstrap-datepicker.js')); ?>"></script>

<script>
 $(function() {
     //Date picker
    $('#datepicker3').datepicker();
 })
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="register-box">
  <div class="register-logo">
    <a href="/"><?php echo e(config('app.name')); ?></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form method="POST" action="<?php echo e(route('register')); ?>">
    <?php echo e(csrf_field()); ?>

      <div class="form-group<?php echo e($errors->has('first_name') ? ' has-error' : ''); ?>">
        <input id="first_name" name="first_name" type="text" class="form-control" value="<?php echo e(old('first_name')); ?>" placeholder="first name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

        <?php if($errors->has('first_name')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('first_name')); ?></strong>
            </span>
        <?php endif; ?>
      </div>

      <div class="form-group<?php echo e($errors->has('last_name') ? ' has-error' : ''); ?>">
        <input id="last_name" name="last_name" type="text" class="form-control" value="<?php echo e(old('last_name')); ?>" placeholder="last name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

        <?php if($errors->has('last_name')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('last_name')); ?></strong>
            </span>
        <?php endif; ?>
      </div>

      <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
        <input id="email" name="email" type="email" class="form-control" value="<?php echo e(old('email')); ?>" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

        <?php if($errors->has('email')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('email')); ?></strong>
            </span>
        <?php endif; ?>
      </div>

      <div class="form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
        <input id="phone" name="phone" class="form-control" value="<?php echo e(old('phone')); ?>" placeholder="Phone">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

        <?php if($errors->has('phone')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('phone')); ?></strong>
            </span>
        <?php endif; ?>
      </div>
      <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
        <input id="password" name="password" type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

        <?php if($errors->has('password')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('password')); ?></strong>
            </span>
        <?php endif; ?>
      </div>
      <div class="form-group has-feedback">
       <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Retype Password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="<?php echo e(route('login')); ?>" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth_master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>