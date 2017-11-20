<div class="row">
  <div class="col-sm-12">
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Transaksi</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
      <div class="box-body">
        <table class="table table-bordered">
          <tbody id="field_item">
            <tr id="add_after_me">
              <th class="text-center">Produk</th>
              <th class="text-center">Qty</th>
              <th class="text-center">Satuan</th>
              <th class="text-center">Harga</th>
            </tr>
            
            <tr >
              <?php if(isset($sale->id)): ?>
              
                <?php if(Auth::user()->role->id == "1"): ?>
                  <form class="form-horizontal" action="<?php echo e(route('admin.sales.store')); ?>" method="POST">
                <?php else: ?>
                  <form class="form-horizontal" action="<?php echo e(route('user.sales.store')); ?>" method="POST">
                <?php endif; ?>

              <?php elseif(isset($order->id)): ?>
                <form class="form-horizontal" action="<?php echo e(route('admin.orders.store')); ?>" method="POST">
              <?php endif; ?>
              
                <?php echo e(csrf_field()); ?>

                <td>
                <select name="product_id" class="form-control">
                  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <option value="<?php echo e($product->id); ?>"><?php echo e($product->nama); ?> (<?php echo e($product->kode); ?>)</option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </td>
              <td><input name="jumlah" type="text" class="form-control pull-right" required></td>
               <td>
                    <select name="satuan_id" class="form-control">
                      <?php $__currentLoopData = $satuans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $satuan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($satuan->id); ?>"><?php echo e($satuan->nama); ?> (<?php echo e($satuan->symbol); ?>)</option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </select>
              </td>
              <td><input name="harga" type="text" class="form-control pull-right" required=""></td>
              
              <?php if(empty($sale->id)): ?>
                  <input type="text" name="pembelian_id" id="" value="<?php echo e($order->id); ?>" hidden="">
              <?php endif; ?>

              <?php if(empty($order->id)): ?>
                  <input type="text" name="penjualan_id" id="" value="<?php echo e($sale->id); ?>" hidden="">
              <?php endif; ?>

            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
      
      <!-- box footer -->
      <div class="box-footer">
        <?php if(empty($sale->id)): ?>
            <?php if($order->completed == false): ?>

            <button type="submit" class="btn btn-primary">
              <i class="fa fa-fw fa-plus-circle"></i>
            </button>
            <a href="<?php echo e(route('admin.transaksi.pembelian.selesai', $order->kode)); ?>" class="btn btn-success">
              <i class="fa fa-fw fa-check"></i> Transaksi Pembelian Selesai
            </a>

            <?php endif; ?>
        <?php endif; ?>

        <?php if(empty($order->id)): ?>
            <?php if($sale->completed == false): ?>

            <button type="submit" class="btn btn-primary">
              <i class="fa fa-fw fa-plus-circle"></i>
            </button>
            <?php if(Auth::user()->role == "1"): ?>
              <a href="<?php echo e(route('admin.transaksi.penjualan.selesai', $sale->kode)); ?>" class="btn btn-success">
                <i class="fa fa-fw fa-check"></i> Transaksi Penjualan Selesai
              </a>
            <?php else: ?>
              <a href="<?php echo e(route('user.transaksi.penjualan.selesai', $sale->kode)); ?>" class="btn btn-success">
                <i class="fa fa-fw fa-check"></i> Transaksi Penjualan Selesai
              </a>
            <?php endif; ?>

            <?php endif; ?>
        <?php endif; ?>
      </div>
      </form>
      <!-- / .box footer -->
  </div>
</div>
</div>