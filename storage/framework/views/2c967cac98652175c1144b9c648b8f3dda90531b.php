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
            <form class="form-horizontal"  action="<?php echo e(route('admin.store.store')); ?>" method="POST">
              <?php echo e(csrf_field()); ?>


              <div class="form-group<?php echo e($errors->has('nama') ? ' has-error' : ''); ?>">
                <label for="nama" class="col-sm-2 control-label">Nama </label>

                <div class="col-sm-10">
                  <input id="nama" name="nama" type="text" class="form-control" placeholder="Name" value="<?php echo e(old('nama')); ?>" required>

                  <?php if($errors->has('nama')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('nama')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('alamat') ? ' has-error' : ''); ?>">
                <label for="alamat" class="col-sm-2 control-label">Alamat </label>

                <div class="col-sm-10">
                  <input id="alamat" name="alamat" type="text" class="form-control" placeholder="Alamat" value="<?php echo e(old('alamat')); ?>" required>

                  <?php if($errors->has('alamat')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('alamat')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('npwp') ? ' has-error' : ''); ?>">
                <label for="npwp" class="col-sm-2 control-label">NPWP</label>

                <div class="col-sm-10">
                  <input id="npwp" name="npwp" type="text" class="form-control" placeholder="NPWP" value="<?php echo e(old('npwp')); ?>" required>

                  <?php if($errors->has('npwp')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('npwp')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('status') ? ' has-error' : ''); ?>">
                <label for="status" class="col-sm-2 control-label">Status</label>

                <div class="col-sm-10">
                  <select class="form-control" name="status" id="status">
                    <option value="true">Aktif</option>
                    <option value="0">Inaktif</option>
                  </select>

                  <?php if($errors->has('status')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('status')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('keterangan') ? ' has-error' : ''); ?>">
                <label for="status" class="col-sm-2 control-label">Keterangan</label>

                <div class="col-sm-10">
                  <input id="keterangan" name="keterangan" type="text" class="form-control" placeholder="Keterangan" value="<?php echo e(old('keterangan')); ?>" required>
                  <input name="user_id" type="text" hidden value="<?php echo e(Auth::id()); ?>">

                  <?php if($errors->has('keterangan')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('keterangan')); ?></strong>
                      </span>
                  <?php endif; ?>
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