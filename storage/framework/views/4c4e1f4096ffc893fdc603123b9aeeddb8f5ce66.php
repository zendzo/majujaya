<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
    <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo e($page_title); ?></h3>
            </div>
            <!-- /.box-header --> 
          <div class="box-body">
            <form class="form-horizontal"  action="<?php echo e(route('admin.pengguna.store')); ?>" method="POST">
              <?php echo e(csrf_field()); ?>


              <div class="form-group<?php echo e($errors->has('first_name') ? ' has-error' : ''); ?>">
                <label for="first_name" class="col-sm-2 control-label">Nama Depan</label>

                <div class="col-sm-10">
                  <input id="first_name" name="first_name" type="text" class="form-control" placeholder="first name" value="<?php echo e(old('first_name')); ?>">

                  <?php if($errors->has('first_name')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('first_name')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('last_name') ? ' has-error' : ''); ?>">
                <label for="last_name" class="col-sm-2 control-label">Nama Belakang</label>

                <div class="col-sm-10">
                 <input id="last_name" name="last_name" type="text" class="form-control" placeholder="last name" value="<?php echo e(old('last_name')); ?>">

                  <?php if($errors->has('last_name')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('last_name')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                <label for="email" class="col-sm-2 control-label">Email</label>

                <div class="col-sm-10">
                 <input id="email" name="email" type="text" class="form-control" placeholder="email" value="<?php echo e(old('email')); ?>">

                  <?php if($errors->has('email')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('email')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                <label for="email" class="col-sm-2 control-label">Phone</label>

                <div class="col-sm-10">
                 <input id="phone" name="phone" type="text" class="form-control" placeholder="phone" value="<?php echo e(old('phone')); ?>">

                  <?php if($errors->has('phone')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('phone')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                <label for="password" class="col-sm-2 control-label">password</label>

                <div class="col-sm-10">
                 <input id="password" name="password" type="password" class="form-control" placeholder="password">

                  <?php if($errors->has('password')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('password')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                <label for="password-confirmation" class="col-sm-2 control-label">password</label>

                <div class="col-sm-10">
                 <input id="password-confirmation" name="password_confirmation" type="password" class="form-control" placeholder="Retype password">

                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> Save</button>
                </div>
              </div>
            </form>
          </div>           
          </div>
          <!-- /.box -->
          <!-- form start -->

  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>