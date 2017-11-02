<!-- About Me Box -->
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Detail Toko</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <strong><i class="fa fa-building margin-r-5"></i> Nama Toko</strong>

    <p>
      <?php if(!empty($user->store->nama)): ?>
        <?php echo e($user->store->nama); ?>

      <?php else: ?>
        -
      <?php endif; ?>
    </p>
    <hr>

    <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>

    <p class="text-muted">
      <?php if(!empty($user->store->alamat)): ?>
        <?php echo e($user->store->alamat); ?>

      <?php else: ?>
        -
      <?php endif; ?>
    </p>

    <hr>

    <strong><i class="fa fa-book margin-r-5"></i> Keterangan</strong>

    <p class="text-muted">
      <?php if(!empty($user->store->keterangan)): ?>
        <?php echo e($user->store->keterangan); ?>

      <?php else: ?>
        -
      <?php endif; ?>
    </p>
  </div>
  <!-- /.box-body -->
</div>