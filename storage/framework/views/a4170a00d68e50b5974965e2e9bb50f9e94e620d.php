<div class="row">
<div class="col-sm-12">
	<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">List Items Pembelian</h3>
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
              <th class="text-center" colspan="">Harga</th>
              <th class="text-center" colspan="2">Total</th>
            </tr>
            
            <?php $__empty_1 = true; $__currentLoopData = $sale_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
              <tr class="text-center">
                <td><?php echo e($item->product->nama); ?>( <?php echo e($item->product->kode); ?> )</td>
                <td><?php echo e($item->jumlah); ?></td>
                <td>(<?php echo e($item->satuan->symbol); ?>) <?php echo e($item->satuan->nama); ?></td>
                <td><?php echo e($item->harga); ?></td>
                <td><?php echo e($item->harga * $item->jumlah); ?></td>
                
                <td width="10%" class="text-center">
                  <form method="POST" action="<?php echo e(route('admin.sales.destroy',$item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                    <?php echo e(method_field('DELETE')); ?>

                    <?php echo e(csrf_field()); ?>

                    <button type="submit" class="btn btn-xs btn-danger">
                      <span class="fa fa-close fa-fw"></span>
                    </button>
                  </form>
                </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <tr>
                <td colspan="4" class="text-center"><h4>Belum Ada Items</h4></td>
              </tr>
            <?php endif; ?>
            <tr>
                <td colspan="3"><h4 class="pull-right">Grand Total : </h4></td>
                <td colspan="3"><h4><?php echo e($sale_items->sum('total')); ?></h4></td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">

      </div>
  </div>
</div>
</div>