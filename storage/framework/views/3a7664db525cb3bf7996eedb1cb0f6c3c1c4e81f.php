<div class="row">
  <div class="col-sm-12">
    <div class="box box-info">
      <div class="box-header with-border">

        <div class="box-header with-border">
          <h3 class="box-title">Transaksi Selesai</h3>
        </div>

        <div class="box-body">
          <?php if(Auth::user()->role->id == "1"): ?>
              <a href="<?php echo e(route('admin.penjualan.open', $sale->kode)); ?>" class="btn btn-danger" style="width: 100%;">
                <i class="fa fa-fw fa-folder-open-o"></i> Buka Transaksi
              </a>
          <?php else: ?>
            <a href="#" id="closed-transaction" class="btn btn-danger disable" style="width: 100%;">
                <i class="fa fa-fw fa-folder-open-o"></i> Buka Transaksi
            </a>
          <?php endif; ?>  
        </div>
      </div>
    </div>
  </div>
</div>