<?php $__env->startSection('jsPlugins'); ?>
<!-- DataTables -->
<script src="<?php echo e(asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('AdminLTE/plugins/datatables/dataTables.bootstrap.min.js')); ?>"></script>

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable({});
    $('#example2').DataTable({

    });
  });
</script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('cssPlugins'); ?>
<!-- DataTables -->
<link rel="stylesheet" href=".<?php echo e(asset('AdminLTE/plugins/datatables/dataTables.bootstrap.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Pelanggan</th>
                  <th>Kode Nota</th>
                  <th>Tipe Penjualan</th>
                  <th>Tanggal Penjualan</th>
                  <th>Tanggal Pengiriman</th>
                  <th>Dari Gudang</th>
                  <th>Layanan Angkutan</th>
                  <th>Keterangan</th>
                </tr>
                </thead>

                <tbody>
                  <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr>
                      <td><?php echo e($sale->user->fullName()); ?></td>
                      <td>
                      	<a href="<?php echo e(route('admin.proses.transaksi.penjualan',$sale->kode)); ?>"><?php echo e($sale->kode); ?></a>
                      </td>
                      <td><?php echo e($sale->type->type); ?></td>
                      <td><?php echo e($sale->tanggal_so->format('d/m/Y')); ?></td>
                      <td><?php echo e($sale->tanggal_kirim->format('d/m/Y')); ?></td>
                      <td><?php echo e($sale->gudang->nama); ?></td>
                      <td><?php echo e($sale->vendor->nama); ?></td>
                      <td><?php echo e($sale->keterangan); ?></td>
                   </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>