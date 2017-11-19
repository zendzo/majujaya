<?php $__env->startSection('content'); ?>
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="/"><b><?php echo e(env('APP_NAME')); ?></b></a>
  </div>

    <div class="help-block text-center">
          <?php if($errors->has('email')): ?>
                <span class="help-block">
                    <strong style="color: #dd4b39"><?php echo e($errors->first('email')); ?></strong>
                </span>
            <?php endif; ?>
            <?php if(session('status')): ?>
                <span class="help-block">
                     <strong style="color: #00733e"><?php echo e(session('status')); ?></strong>
                </span>
            <?php endif; ?>
    </div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="<?php echo e(asset('AdminLTE//dist/img/user-avatar.png')); ?>" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials" method="POST" action="<?php echo e(route('password.email')); ?>">
    <?php echo e(csrf_field()); ?>

      <div class="input-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
        <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>"  placeholder="Email address">

        <div class="input-group-btn">
          <button type="submit" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    Enter your email to reset your pasword
  </div>
  <div class="text-center">
    <a href="<?php echo e(route('login')); ?>">Or sign in as a different user</a>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth_master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>