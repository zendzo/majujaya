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
        
        <th>Dari Gudang</th>
        
        
        <th>Total</th>
        <th>Pembayaran</th>
        <th>Sisa Pembayaran</th>
        <?php if(Auth::user()->role->id == "1"): ?>
         <th>Taggihan</th>
        <?php endif; ?>
      </tr>
      </thead>

      <tbody>
        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
            <td>
              <?php if(Auth::user()->role->id == "1"): ?>
                <a href="<?php echo e(route('admin.proses.transaksi.pembelian',$order->kode)); ?>"><?php echo e($order->kode); ?></a>
              <?php else: ?>
                <a href="<?php echo e(route('user.proses.transaksi.penjualan',$order->kode)); ?>"><?php echo e($order->kode); ?></a>
              <?php endif; ?>
            </td>
            <td><?php echo e($order->supplier->nama); ?></td>
            <td><?php echo e($order->tanggal_po->format('d/m/Y')); ?></td>
            <td><?php echo e($order->tanggal_kirim->format('d/m/Y')); ?></td>
            
            <td><?php echo e($order->gudang->nama); ?></td>
            
            
            <td><?php echo e($order->orders->sum('total')); ?></td>
            <td><?php echo e($order->bayar); ?></td>
            <td><?php echo e($order->orders->sum('total') - $order->bayar); ?></td>
            
            <?php if(Auth::user()->role->id == "1"): ?>
            <td>
              <a href="<?php echo e(route('admin.invoice.sms.pembelian', $order->kode)); ?>" class="btn btn-info">
                <i class="fa fa-fw fa-send"></i>
              </a>
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#smsModalDialog">
                <i class="fa fa-envelope"></i>
              </a>

              <?php echo $__env->make('form_partials.sms_modal_dialog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            </td>
            <?php endif; ?>
         </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->