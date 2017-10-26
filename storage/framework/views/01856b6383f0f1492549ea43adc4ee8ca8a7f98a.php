<?php $__env->startSection('cssPlugins'); ?>
<link rel="stylesheet" href="<?php echo e(asset('AdminLTE/plugins/timepicker/bootstrap-timepicker.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('AdminLTE/plugins/datepicker/datepicker3.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('jsPlugins'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo e(asset('AdminLTE/plugins/input-mask/jquery.inputmask.js')); ?>"></script>
<script src="<?php echo e(asset('AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js')); ?>"></script>
<script src="<?php echo e(asset('AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js')); ?>"></script>
<script src="<?php echo e(asset('AdminLTE/plugins/datepicker/bootstrap-datepicker.js')); ?>"></script>
<script src="<?php echo e(asset('AdminLTE/plugins/timepicker/bootstrap-timepicker.min.js')); ?>"></script>
<script>
	$(function(){

    $('#datepicker').datepicker({
      format: 'mm/dd/yyyy'
    });

    $('#datepicker2').datepicker({
      format: 'mm/dd/yyyy'
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
              <h3 class="box-title">Supplier</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal"  action="<?php echo e(route('admin.pembelian.store')); ?>" method="POST">
              <?php echo e(csrf_field()); ?>


              <div class="box-body">
              	<div class="form-group">
                  <label for="supplier_id" class="col-sm-2 control-label">Supplier</label>

                  <div class="col-sm-10">
                     <select class="form-control" name="supplier_id">
                      <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($supplier->id); ?>"><?php echo e($supplier->nama); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                  </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Detail Pembelian</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

              <div class="box-body form-horizontal">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">KODE</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="KODE" disabled="" value="<?php echo e(strtoupper(str_random('6'))); ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">TIPE</label>

                  <div class="col-sm-10">
                     <select name="pembelian_type_id" class="form-control">
                      <?php $__currentLoopData = $orderType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($order->id); ?>"><?php echo e($order->type); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                  </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="tanggal_po" class="col-sm-2 control-label">TANGGAL PO</label>

                  <div class="col-sm-10">
                    <input name="tanggal_po" type="text" class="form-control pull-right" id="datepicker" required="" placeholder="<?php echo e(Date('m/d/Y')); ?>">
                  </div>
                </div>

              </div>
              <!-- /.box-body -->

          </div>

          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>	

<div class="row">
        <!-- left column -->
        <div class="col-md-12">

          <!-- general form elements -->
         <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Pengiriman</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

              <div class="box-body form-horizontal">

              	<div class="form-group">
                  <label for="tanggal_kirim" class="col-sm-2 control-label">Tanggal Kirim</label>

                  <div class="col-sm-10">
                    <input name="tanggal_kirim" type="text" class="form-control pull-right" id="datepicker2" required="" placeholder="<?php echo e(Date('m/d/Y')); ?>">
                  </div>
                </div>

                
                <?php echo $__env->make('form_partials.delivery_options', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <div class="form-group">
                  <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>

                  <div class="col-sm-10">
                     <textarea class="form-control" name="keterangan"></textarea>
                </div>
              </div>

              </div>

              <!-- /.box-body -->
              
              <!-- box footer -->
            	<div class="box-footer">
            		<button type="submit" class="btn btn-primary">Simpan</button>
          		</div>
              <!-- / .box footer -->
            </form>
          </div>

        </div>
      </div>	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>