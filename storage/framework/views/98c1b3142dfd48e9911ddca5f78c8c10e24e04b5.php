<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo e($pembelian); ?></h3>

              <p>Total Pembelian</p>
            </div>
            <div class="icon">
              <i class="glyphicon glyphicon-shopping-cart"></i>
            </div>
            <a href="<?php echo e(route('admin.pembayaran.pembelian')); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo e($penjualan); ?></h3>

              <p>Total Penjualan</p>
            </div>
            <div class="icon">
              <i class="glyphicon glyphicon-send"></i>
            </div>
            <a href="<?php echo e(route('admin.pembayaran.penjualan')); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo e($supplier); ?></h3>

              <p>Total Supplier</p>
            </div>
            <div class="icon">
              <i class="fa fa-files-o"></i>
            </div>
            <a href="<?php echo e(route('admin.supplier.index')); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo e($pengguna); ?></h3>

              <p>Total Pelanggan</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo e(route('admin.pengguna.index')); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>