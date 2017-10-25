<?php $__env->startSection('content'); ?>
<div class="login-box">
  <div class="login-logo">
    <a href="/"><?php echo e(config('app.name')); ?></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form method="POST" action="<?php echo e(route('login')); ?>">
    <?php echo e(csrf_field()); ?>

    <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
        <input id="email" name="email" value="<?php echo e(old('email')); ?>" type="email" class="form-control" placeholder="Email" required autofocus>
        <?php if($errors->has('email')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('email')); ?></strong>
            </span>
        <?php endif; ?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
        <input  id="password" name="password" type="password" class="form-control" placeholder="Password" required>
        <?php if($errors->has('password')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('password')); ?></strong>
            </span>
        <?php endif; ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?> > Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="<?php echo e(route('password.request')); ?>">I forgot my password</a><br>
    <a href="<?php echo e(route('register')); ?>" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth_master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>