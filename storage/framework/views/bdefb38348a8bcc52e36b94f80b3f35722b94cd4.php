<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <?php $__empty_1 = true; $__currentLoopData = $inflow; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo e($item->nama); ?></h3>

              <p><?php echo e($item->alamat); ?></p>
              <p><?php echo e($item->keterangan); ?></p>
            </div>
            <div class="icon">
              <i class="fa fa-fw fa-bank"></i>
            </div>
            <a href="<?php echo e(route('admin.gudang.outflow',$item->id)); ?>" class="small-box-footer">List Barang <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          
        <?php endif; ?>
      </div>
      <!-- /.row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>