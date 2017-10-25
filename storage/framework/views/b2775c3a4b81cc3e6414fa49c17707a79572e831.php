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


                <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                  <label for="name" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-8">
                    <input id="name" name="name" type="text" class="form-control" placeholder="first name" value="<?php echo e(old('name')); ?>">

                    <?php if($errors->has('name')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('name')); ?></strong>
                        </span>
                    <?php endif; ?>
                  </div>
                </div>


                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                  </div>
                </div>
              </form>

              <!-- box-body -->
            </div>           
          </div>
          <!-- /.box -->
          <!-- form start -->

  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>