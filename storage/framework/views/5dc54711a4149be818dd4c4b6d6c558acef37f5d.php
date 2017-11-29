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
            <form class="form-horizontal" method="POST" action="<?php echo e(route('admin.bayar.nota.penjualan')); ?>">
                <?php echo e(csrf_field()); ?>


                <div class="form-group<?php echo e($errors->has('bayar') ? ' has-error' : ''); ?>">
                    <label for="bayar" class="col-sm-4 control-label">Jumlah Pem.: </label>

                    <div class="col-sm-8">
                      <input class="form-control" type="text" name="bayar" required="">
                      <input type="text" name="kode" required="" value="<?php echo e($sale->kode); ?>" hidden="">
                      <input type="text" name="id" required="" value="<?php echo e($sale->id); ?>" hidden="">
                    </div>
                </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-info"><i class="fa fa fa-credit-card"></i> Bayar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </form>
          </div>
      <?php endif; ?>

      <?php if(isset($order)): ?>
        <div class="modal-body">
            <form class="form-horizontal" method="POST" action="<?php echo e(route('admin.bayar.nota.pembelian')); ?>">
                <?php echo e(csrf_field()); ?>


                <div class="form-group<?php echo e($errors->has('bayar') ? ' has-error' : ''); ?>">
                    <label for="bayar" class="col-sm-4 control-label">Jumlah Pem.: </label>

                    <div class="col-sm-8">
                      <input class="form-control" type="text" name="bayar" required="">
                      <input type="text" name="kode" required="" value="<?php echo e($order->kode); ?>" hidden="">
                      <input type="text" name="id" required="" value="<?php echo e($order->id); ?>" hidden="">
                    </div>
                </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-info"><i class="fa fa fa-credit-card"></i> Bayar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </form>
          </div>
      <?php endif; ?>
    
  </div>
</div>