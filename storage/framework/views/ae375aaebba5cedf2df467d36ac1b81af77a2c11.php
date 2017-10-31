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
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title"><?php echo e($page_title); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode Nota</th>
                  <th>Supplier</th>
                  <th>Tanggal Penjualan</th>
                  <th>Tanggal Pengiriman</th>
                  <th>Tipe Penjualan</th>
                  <th>Dari Gudang</th>
                  <th>Layanan Angkutan</th>
                  <th>Keterangan</th>
                  <th>Total</th>
                  <th>Pembayaran</th>
                  <th>Sisa Pembayaran</th>
                </tr>
                </thead>

                <tbody>
                  <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr>
                      <td><?php echo e($order->kode); ?></td>
                      <td><?php echo e($order->supplier->nama); ?></td>
                      <td><?php echo e($order->tanggal_po->format('d/m/Y')); ?></td>
                      <td><?php echo e($order->tanggal_kirim->format('d/m/Y')); ?></td>
                      <td><?php echo e($order->type->type); ?></td>
                      <td><?php echo e($order->gudang->nama); ?></td>
                      <td><?php echo e($order->vendor->nama); ?></td>
                      <td><?php echo e($order->keterangan); ?></td>
                      <td><?php echo e($order->orders->sum('total')); ?></td>
                      <td><?php echo e($order->bayar); ?></td>
                      <td><?php echo e($order->orders->sum('total') - $order->bayar); ?></td>
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