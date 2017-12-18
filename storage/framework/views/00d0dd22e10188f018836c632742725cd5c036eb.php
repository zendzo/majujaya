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
            <form class="form-horizontal"  action="<?php echo e(route('admin.remainder-days.update',$remainder_days->id)); ?>" method="POST">
              <?php echo e(csrf_field()); ?>

              <?php echo e(method_field('PATCH')); ?>


              <div class="form-group<?php echo e($errors->has('max_days') ? ' has-error' : ''); ?>">
                <label for="max_days" class="col-sm-2 control-label">Hari : </label>

                <div class="col-sm-8">
                  <input id="max_days" name="max_days" type="text" class="form-control" placeholder="max_days" value="<?php echo e($remainder_days->max_days); ?>">

                  <?php if($errors->has('max_days')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('max_days')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                  <button type="reset" class="btn btn-primary"><i class="fa fa-trash-o"></i> Cancel</button>
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