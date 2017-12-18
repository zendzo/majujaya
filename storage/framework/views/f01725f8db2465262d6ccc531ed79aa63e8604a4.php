<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h4><?php echo e($page_title); ?></h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <td>Jumlah Hari SMS Dikirm</td>
                  <td>Actions</td>
                </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $remainder_days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($item->max_days); ?></td>
                      <!-- button action -->
                      <td width="10%" class="text-center">
                        <a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.remainder-days.edit',$item->id)); ?>">
                          <span class="fa fa-pencil fa-fw"></span>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a class="btn btn-success" href="<?php echo e(route('admin.remainder-days.create')); ?>"><span class="fa fa-plus fa-fw"></span>&nbsp;Tambah Baru</a>
            </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>