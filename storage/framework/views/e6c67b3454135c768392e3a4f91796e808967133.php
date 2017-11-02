<div class="active tab-pane" id="activity">
  <table id="example2" class="table table-bordered table-hover">
<thead>
<tr>
  <th>Kode Nota</th>
  <th>Tanggal Penjualan</th>
  <th>Tanggal Pengiriman</th>
  <th>Tipe Penjualan</th>
  <th>Dari Gudang</th>
  <th>Layanan Angkutan</th>
  <th>Total</th>
  <th>Pembayaran</th>
  <th>Sisa Pembayaran</th>
</tr>
</thead>

<tbody>
<?php $__empty_1 = true; $__currentLoopData = $user->penjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
  <tr>
      <td><?php echo e($sale->kode); ?></td>
      <td><?php echo e($sale->tanggal_so->format('d/m/Y')); ?></td>
      <td><?php echo e($sale->tanggal_kirim->format('d/m/Y')); ?></td>
      <td><?php echo e($sale->type->type); ?></td>
      <td><?php echo e($sale->gudang->nama); ?></td>
      <td><?php echo e($sale->vendor->nama); ?></td>
      <td><?php echo e($sale->sales->sum('total')); ?></td>
      <td><?php echo e($sale->bayar); ?></td>
      <td><?php echo e($sale->sales->sum('total') - $sale->bayar); ?></td>
   </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
  <tr>
    <td colspan="9"><h4 class="text-center">Belum Ada Data</h4></td>
  </tr>
<?php endif; ?>
</tbody>
</table>
</div>
