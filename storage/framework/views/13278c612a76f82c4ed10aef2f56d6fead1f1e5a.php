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
      format: 'dd/mm/yyyy'
    });

    $('#datepicker2').datepicker({
      format: 'dd/mm/yyyy'
    });

    $(".select2").select2({
       placeholder: 'Select an item',
       minimumInputLength: 1,
          ajax: {
          url: '/users/find',
          dataType: 'json',
          data: function (params) {
              return {
                  q: $.trim(params.term)
              };
          },
          processResults: function (data) {
              return {
                  results: data
              };
          },
          cache: true
      }
    });

	});
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
        <!-- left column -->
        <div class="col-md-6">

          <!-- general form elements -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Pelanggan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal"  action="<?php echo e(route('admin.laporan.user')); ?>" method="POST">
            <?php echo e(csrf_field()); ?>

              <div class="box-body">
              	<div class="form-group">
                  <label for="user_id" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <select name="user_id" class="form-control">
                    	<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    		<option value="<?php echo e($user->id); ?>"><?php echo e($user->fullName()); ?>

                    			<?php if($user->store): ?>
                    				- (<b><?php echo e($user->store->nama); ?></b>)
                    			<?php endif; ?>
                    		</option>
                    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              	<button class="btn btn-primary">Submit</button>
              	</form>
              </div>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Supplier</h3>
            </div>
            <!-- /.box-header -->
            <form class="form-horizontal"  action="<?php echo e(route('admin.laporan.supplier')); ?>" method="POST">
            <?php echo e(csrf_field()); ?>

              <div class="box-body">
              	<div class="form-group">
                  <label for="user_id" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <select name="supplier_id" class="form-control">
                    	<?php $__currentLoopData = $vendors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    		<option value="<?php echo e($vendor->id); ?>"><?php echo e($vendor->nama); ?></option>
                    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              	<button class="btn btn-primary">Submit</button>
              </form>
              </div>
          </div>

          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>