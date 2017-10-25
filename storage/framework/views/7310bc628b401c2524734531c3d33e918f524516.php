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
            <form class="form-horizontal"  action="<?php echo e(route('admin.truck.update',$truck->id)); ?>" method="POST">
              <?php echo e(csrf_field()); ?>

              <?php echo e(method_field('PATCH')); ?>


              <div class="form-group<?php echo e($errors->has('truck_type_id') ? ' has-error' : ''); ?>">
                <label for="truck_type_id" class="col-sm-2 control-label">Tipe Truck</label>

                <div class="col-sm-8">
                 <select class="form-control" name="truck_type_id">
                  <?php $__currentLoopData = $truck_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($type->id); ?>"><?php echo e($type->type); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>

                  <?php if($errors->has('truck_type_id')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('truck_type_id')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('plat') ? ' has-error' : ''); ?>">
                <label for="plat" class="col-sm-2 control-label">Plat</label>

                <div class="col-sm-8">
                  <input id="plat" name="plat" type="text" class="form-control" placeholder="plat" value="<?php echo e($truck->plat); ?>">

                  <?php if($errors->has('plat')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('plat')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('tanggal_inspeksi') ? ' has-error' : ''); ?>">
                <label for="tanggal_inspeksi" class="col-sm-2 control-label">Tanggal Inpseksi</label>

                <div class="col-sm-8">
                  <input id="datepicker" name="tanggal_inspeksi" type="text" class="form-control" placeholder="tanggal_inspeksi" value="<?php echo e($truck->tanggal_inspeksi->format('d/m/Y')); ?>">

                  <?php if($errors->has('tanggal_inspeksi')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('tanggal_inspeksi')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('pengemudi') ? ' has-error' : ''); ?>">
                <label for="pengemudi" class="col-sm-2 control-label">Pengemudi</label>

                <div class="col-sm-8">
                  <input id="pengemudi" name="pengemudi" type="text" class="form-control" placeholder="pengemudi" value="<?php echo e($truck->pengemudi); ?>">

                  <?php if($errors->has('pengemudi')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('pengemudi')); ?></strong>
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
                  <input id="keterangan" name="keterangan" type="text" class="form-control" placeholder="keterangan" value="<?php echo e($truck->keterangan); ?>">

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