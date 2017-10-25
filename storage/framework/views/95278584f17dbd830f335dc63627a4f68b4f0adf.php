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
            <form class="form-horizontal"  action="<?php echo e(route('admin.supplier.update',$supplier->id)); ?>" method="POST">
              <?php echo e(csrf_field()); ?>

              <?php echo e(method_field('PATCH')); ?>


              <div class="form-group<?php echo e($errors->has('nama') ? ' has-error' : ''); ?>">
                <label for="nama" class="col-sm-2 control-label">Nama</label>

                <div class="col-sm-8">
                  <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama" value="<?php echo e($supplier->nama); ?>">

                  <?php if($errors->has('nama')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('nama')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('alamat') ? ' has-error' : ''); ?>">
                <label for="alamat" class="col-sm-2 control-label">Alamat</label>

                <div class="col-sm-8">
                  <textarea class="form-control" name="alamat" placeholder="Alamat"> <?php echo e($supplier->alamat); ?> </textarea>

                  <?php if($errors->has('alamat')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('alamat')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
                <label for="phone" class="col-sm-2 control-label">Phone</label>

                <div class="col-sm-8">
                  <input id="phone" name="phone" type="text" class="form-control" placeholder="Phone" value="<?php echo e($supplier->phone); ?>">

                  <?php if($errors->has('phone')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('phone')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('npwp') ? ' has-error' : ''); ?>">
                <label for="npwp" class="col-sm-2 control-label">NPWP</label>

                <div class="col-sm-8">
                  <input id="npwp" name="npwp" type="text" class="form-control" placeholder="NPWP" value="<?php echo e($supplier->npwp); ?>">

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
                 <select class="form-control" name="status">
                    <option value="1">Aktif</option>
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
                <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>

                <div class="col-sm-8">
                  <input id="keterangan" name="keterangan" type="text" class="form-control" placeholder="keterangan" value="<?php echo e($supplier->keterangan); ?>">

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