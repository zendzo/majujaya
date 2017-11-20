<div class="modal fade" id="smsModalDialog" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Kirim Pesan Ke : 
          <?php if(isset($sale)): ?>
              <?php echo e($sale->user->fullName()); ?> <b>(<?php echo e($sale->user->phone); ?>)</b>
          <?php endif; ?>

          <?php if(isset($order)): ?>
              <?php echo e($order->supplier->nama); ?> <b>(<?php echo e($order->supplier->phone); ?>)</b>
          <?php endif; ?>

        </h4>
      </div>
      
      <?php if(isset($sale)): ?>
        <div class="modal-body">
            <form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo e(csrf_field()); ?>

                <div class="form-group<?php echo e($errors->has('content') ? ' has-error' : ''); ?>">
                    <label for="content" class="col-md-4 control-label">Pesan</label>

                    <div class="col-md-6">
                        <textarea name="content" id="content" class="form-control" cols="30" rows="10" required>Sdr. <?php echo e($sale->user->first_name); ?> Kd.Nota Tanggihan Anda <?php echo e($sale->kode); ?> Adalah Sebesar <?php echo e($sale->sales->sum('total')); ?> Dengan Total Pembayaran Sebesar <?php echo e($sale->bayar); ?> Mohon Segera Lakukan Pembayaran</textarea>

                        <?php if($errors->has('content')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('content')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-info"><i class="fa fa-envelope"></i> Kirim</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      <?php endif; ?>

      <?php if(isset($order)): ?>
        <div class="modal-body">
            <form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
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
                    </div>
                </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-info"><i class="fa fa-envelope"></i> Kirim</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      <?php endif; ?>
    
  </div>
</div>