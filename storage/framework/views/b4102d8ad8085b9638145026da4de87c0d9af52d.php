<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header">
              <img style="height: 50px;" src="<?php echo e(asset('AdminLTE/dist/img/BNI.png')); ?>">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>NPWP</th>
                  <th>Status</th>
                  <th>Pemilik</th>
                  <th>Keterangan</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  <?php if(!is_null($stores)): ?>
                    <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                        <td><?php echo e($store->nama); ?></td>
                        <td><?php echo e($store->alamat); ?></td>
                        <td><?php echo e($store->npwp); ?></td>
                        <td><?php echo e($store->status); ?></td>
                        <td><?php echo e($store->user->fullName()); ?></td>
                        <td><?php echo e($store->keterangan); ?></td>
                        <td>
                          <a class="btn btn-success bnt-xs" href="<?php echo e(route('admin.store.edit',$store->id)); ?>">
                            <span class="fa fa-edit fa-fw"></span>
                          </a>
                          <form action="<?php echo e(route('admin.store.destroy',$store->id)); ?>" method="POST">
                            <?php echo e(method_field('DELETE')); ?>

                            <?php echo e(csrf_field()); ?>

                            <button class="btn btn-danger bnt-xs">
                              <span class="fa fa-trash fa-fw"></span>
                            </button>
                          </form>
                        </td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a class="btn btn-success" href="<?php echo e(route('admin.store.create')); ?>"><span class="fa fa-plus fa-fw"></span>&nbsp;Tambah Baru</a>   
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