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
        
        
        <th>Total</th>
        <th>Pembayaran</th>
        <th>Sisa Pembayaran</th>
        <?php if(Auth::user()->role->id == "1"): ?>
         <th>Taggihan</th>
        <?php endif; ?>
      </tr>
      </thead>

      <tbody>
        <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
            <td>
              <?php if(Auth::user()->role->id == "1"): ?>
                <a href="<?php echo e(route('admin.proses.transaksi.penjualan',$sale->kode)); ?>"><?php echo e($sale->kode); ?></a>
              <?php else: ?>
                <a href="<?php echo e(route('user.proses.transaksi.penjualan',$sale->kode)); ?>"><?php echo e($sale->kode); ?></a>
              <?php endif; ?>
            </td>
            <td><a href="<?php echo e(url('/user/profile',$sale->user->id)); ?>"><?php echo e($sale->user->fullName()); ?></a></td>
            <td><?php echo e($sale->tanggal_so->format('d/m/Y')); ?></td>
            <td><?php echo e($sale->tanggal_kirim->format('d/m/Y')); ?></td>
            
            <td><?php echo e($sale->gudang->nama); ?></td>
            
            
            <td><?php echo e($sale->sales->sum('total')); ?></td>
            <td><?php echo e($sale->bayar); ?></td>
            <td><?php echo e($sale->sales->sum('total') - $sale->bayar); ?></td>
            
            <?php if(Auth::user()->role->id == "1"): ?>
            <td>
              <a href="<?php echo e(route('admin.invoice.sms.penjualan', $sale->kode)); ?>" class="btn btn-info">
                <i class="fa fa-fw fa-send"></i>
              </a>
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#smsModalDialog-<?php echo e($sale->id); ?>">
                <i class="fa fa-envelope"></i>
              </a>
              <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#paymentModalDialog-<?php echo e($sale->id); ?>">
                <i class="fa fa-credit-card"></i>
              </a>

              <?php echo $__env->make('form_partials.sms_modal_dialog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

              <?php echo $__env->make('form_partials.payment_modal_dialog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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