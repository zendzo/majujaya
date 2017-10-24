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

              <div class="form-group<?php echo e($errors->has('alamat') ? ' has-error' : ''); ?>">
                <label for="alamat" class="col-sm-2 control-label">Alamat</label>

                <div class="col-sm-8">
                  <textarea class="form-control" name="alamat" value="<?php echo e(old('alamat')); ?>"></textarea>

                  <?php if($errors->has('alamat')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('alamat')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('kota') ? ' has-error' : ''); ?>">
                <label for="kota" class="col-sm-2 control-label">Kota</label>

                <div class="col-sm-8">
                  <input id="kota" name="kota" type="text" class="form-control" placeholder="Kota" value="<?php echo e(old('kota')); ?>">

                  <?php if($errors->has('kota')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('kota')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('telp') ? ' has-error' : ''); ?>">
                <label for="telp" class="col-sm-2 control-label">Telp</label>

                <div class="col-sm-8">
                  <input id="telp" name="telp" type="text" class="form-control" placeholder="telp" value="<?php echo e(old('telp')); ?>">

                  <?php if($errors->has('telp')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('telp')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('npwp') ? ' has-error' : ''); ?>">
                <label for="npwp" class="col-sm-2 control-label">NPWP</label>

                <div class="col-sm-8">
                  <input id="npwp" name="npwp" type="text" class="form-control" placeholder="npwp" value="<?php echo e(old('npwp')); ?>">

                  <?php if($errors->has('npwp')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('npwp')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('status') ? ' has-error' : ''); ?>">
                <label for="status" class="col-sm-2 control-label">Status</label>

                <div class="col-sm-8">
                 <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>

                  <?php if($errors->has('status')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('status')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('keterangan') ? ' has-error' : ''); ?>">
                <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>

                <div class="col-sm-8">
                  <input id="keterangan" name="keterangan" type="text" class="form-control" placeholder="keterangan" value="<?php echo e(old('keterangan')); ?>">

                  <?php if($errors->has('keterangan')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('keterangan')); ?></strong>
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
          </div>           
          </div>
          <!-- /.box -->
          <!-- form start -->

  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>