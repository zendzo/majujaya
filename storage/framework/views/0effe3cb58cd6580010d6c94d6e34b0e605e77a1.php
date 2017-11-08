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
        <th>Pelanggan</th>
        <th>Tanggal Penjualan</th>
        <th>Tanggal Pengiriman</th>
        
        <th>Dari Gudang</th>
        <th>Layanan Angkutan</th>
        
        <th>Total</th>
        <th>Pembayaran</th>
        <th>Sisa Pembayaran</th>
        <th>Taggihan</th>
      </tr>
      </thead>

      <tbody>
        <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
            <td>
              <a href="<?php echo e(route('admin.proses.transaksi.penjualan',$sale->kode)); ?>"><?php echo e($sale->kode); ?></a>
            </td>
            <td><?php echo e($sale->user->fullName()); ?></td>
            <td><?php echo e($sale->tanggal_so->format('d/m/Y')); ?></td>
            <td><?php echo e($sale->tanggal_kirim->format('d/m/Y')); ?></td>
            
            <td><?php echo e($sale->gudang->nama); ?></td>
            <td><?php echo e($sale->vendor->nama); ?></td>
            
            <td><?php echo e($sale->sales->sum('total')); ?></td>
            <td><?php echo e($sale->bayar); ?></td>
            <td><?php echo e($sale->sales->sum('total') - $sale->bayar); ?></td>
            
            <td>
              <a href="<?php echo e(route('admin.invoice.sms.penjualan',$sale->kode)); ?>" class="btn btn-info"><i class="fa fa-fw fa-send"></i></a>
            </td>
         </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->