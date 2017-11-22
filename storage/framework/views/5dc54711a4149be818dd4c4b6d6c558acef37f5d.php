<div class="modal fade" id="paymentModalDialog" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pembayaran User : 
          <?php if(isset($sale)): ?>
              <?php echo e($sale->user->fullName()); ?>

          <?php endif; ?>

          <?php if(isset($order)): ?>
              <?php echo e($order->supplier->nama); ?>

          <?php endif; ?>

        </h4>
      </div>
      
      <?php if(isset($sale)): ?>
        <div class="modal-body">
            <form class="form-horizontal" method="POST" action="<?php echo e(route('admin.custome.penjualan.invoice')); ?>">
                <?php echo e(csrf_field()); ?>


                <div class="form-group<?php echo e($errors->has('total') ? ' has-error' : ''); ?>">
                    <label for="kode" class="col-sm-4 control-label">Total Pem.: </label>

                    <div class="col-sm-8">
                      <input class="form-control" type="text" name="total" disabled="" value="<?php echo e($sale->sales->sum('total')); ?>">
                    </div>
                </div>

                <div class="form-group<?php echo e($errors->has('pembayaran') ? ' has-error' : ''); ?>">
                    <label for="kode" class="col-sm-4 control-label">Sis Pem.: </label>

                    <div class="col-sm-8">
                      <input class="form-control" type="text" name="sisa" disabled value="<?php echo e($sale->sales->sum('total') - $sale->bayar); ?>">
                    </div>
                </div>

                <div class="form-group<?php echo e($errors->has('pembayaran') ? ' has-error' : ''); ?>">
                    <label for="kode" class="col-sm-4 control-label">Jumlah Pem.: </label>

                    <div class="col-sm-8">
                      <input class="form-control" type="text" name="pembayaran" required="">
                    </div>
                </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-info"><i class="fa fa fa-credit-card"></i> Bayar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      <?php endif; ?>

      <?php if(isset($order)): ?>
        <div class="modal-body">
            <form class="form-horizontal" method="POST" action="<?php echo e(route('admin.custome.pembelian.invoice')); ?>">
                <?php echo e(csrf_field()); ?>

                <div class="form-group<?php echo e($errors->has('content') ? ' has-error' : ''); ?>">
                    <label for="content" class="col-md-4 control-label">Pesan</label>

                    <div class="col-md-6">
                        <textarea name="content" id="content" class="form-control" cols="30" rows="10" required>Sdr. <?php echo e($order->supplier->nama); ?> Kd.Nota Pesanan <?php echo e($order->kode); ?> Adalah Sebesar <?php echo e($order->orders->sum('total')); ?> Dengan Total Pembayaran Sebesar <?php echo e($order->bayar); ?> Mohon Segera Lakukan Pengiriman</textarea>

                        <?php if($errors->has('content')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('content')); ?></strong>
                            </span>
                        <?php endif; ?>

                        <input name="supplier_id" value="<?php echo e($order->supplier_id); ?>" hidden>
                        <input name="kode" value="<?php echo e($order->kode); ?>" hidden>

                    </div>
                </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-info"><i class="fa fa fa-credit-card"></i> Bayar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      <?php endif; ?>
    
  </div>
</div>