<?php if(isset($sale)): ?>
    <div class="modal fade" id="paymentModalDialog-<?php echo e($sale->id); ?>" role="dialog">
<?php endif; ?>

<?php if(isset($order)): ?>
    <div class="modal fade" id="paymentModalDialog-<?php echo e($order->id); ?>" role="dialog">
<?php endif; ?>

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
            <form class="form-horizontal" method="POST" action="<?php echo e(route('admin.custome.penjualan.invoice')); ?>">
                <?php echo e(csrf_field()); ?>


                <div class="form-group<?php echo e($errors->has('total') ? ' has-error' : ''); ?>">
                    <label for="kode" class="col-sm-4 control-label">Total Pem.: </label>

                    <div class="col-sm-8">
                      <input class="form-control" type="text" name="total" disabled="" value="<?php echo e($order->orders->sum('total')); ?>">
                    </div>
                </div>

                <div class="form-group<?php echo e($errors->has('pembayaran') ? ' has-error' : ''); ?>">
                    <label for="kode" class="col-sm-4 control-label">Sis Pem.: </label>

                    <div class="col-sm-8">
                      <input class="form-control" type="text" name="sisa" disabled value="<?php echo e($order->orders->sum('total') - $order->bayar); ?>">
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
    
  </div>
</div>