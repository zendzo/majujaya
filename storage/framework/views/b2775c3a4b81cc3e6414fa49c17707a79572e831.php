<?php $__env->startSection('cssPlugins'); ?>
<link rel="stylesheet" href="<?php echo e(asset('AdminLTE/plugins/timepicker/bootstrap-timepicker.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('AdminLTE/plugins/datepicker/datepicker3.css')); ?>">
<!-- Select2 -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE/plugins/select2/select2.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('jsPlugins'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo e(asset('AdminLTE/plugins/input-mask/jquery.inputmask.js')); ?>"></script>
<script src="<?php echo e(asset('AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js')); ?>"></script>
<script src="<?php echo e(asset('AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js')); ?>"></script>
<script src="<?php echo e(asset('AdminLTE/plugins/datepicker/bootstrap-datepicker.js')); ?>"></script>
<script src="<?php echo e(asset('AdminLTE/plugins/timepicker/bootstrap-timepicker.min.js')); ?>"></script>
<!-- Select2 -->
<script src="<?php echo e(asset('AdminLTE/plugins/select2/select2.full.min.js')); ?>"></script>

<script>
  $(function(){

    $('#datepicker').datepicker({
      format: 'mm/dd/yyyy'
    });

    $(".select2").select2();

  });
</script>
<?php $__env->stopSection(); ?>

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
            <form class="form-horizontal"  action="<?php echo e(route('admin.truck.store')); ?>" method="POST">
              <?php echo e(csrf_field()); ?>


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
                  <input id="plat" name="plat" type="text" class="form-control" placeholder="plat" value="<?php echo e(old('plat')); ?>">

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
                  <input id="datepicker" name="tanggal_inspeksi" type="text" class="form-control" placeholder="tanggal_inspeksi" value="<?php echo e(old('tanggal_inspeksi')); ?>">

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
                  <input id="pengemudi" name="pengemudi" type="text" class="form-control" placeholder="pengemudi" value="<?php echo e(old('pengemudi')); ?>">

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