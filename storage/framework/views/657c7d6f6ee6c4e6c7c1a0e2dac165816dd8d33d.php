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
                    <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                        <td><?php echo e($store->nama); ?></td>
                        <td><?php echo e($store->alamat); ?></td>
                        <td><?php echo e($store->npwp); ?></td>
                        <td><?php echo e($store->status); ?></td>
                        <td><?php echo e($store->user->first_name); ?></td>
                        <td><?php echo e($store->keterangan); ?></td>
                        <td>
                          <a class="btn btn-success bnt-xs" href="<?php echo e(route('user.store.edit',$store->id)); ?>">
                            <span class="fa fa-edit fa-fw"></span>
                          </a>
                        </td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            <?php if(is_null(Auth::user()->store)): ?>
              <div class="box-footer clearfix">
              <a class="btn btn-success" href="<?php echo e(route('user.store.create')); ?>"><span class="fa fa-plus fa-fw"></span>&nbsp;Tambah Baru</a>   
            </div>
            <?php endif; ?>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>