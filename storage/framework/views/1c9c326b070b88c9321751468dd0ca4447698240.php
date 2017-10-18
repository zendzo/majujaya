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
                  <th>Nama Depan</th>
                  <th>Nama Belakang</th>
                  <th>email</th>
                  <th>phone</th>
                </tr>
                </thead>
                <tbody>
                  <?php if(!is_null($users)): ?>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                        <td><a href="<?php echo e(url('/user/profile',$user->id)); ?>"><?php echo e($user->first_name); ?></a></td>
                        <td><?php echo e($user->last_name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->phone); ?></td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            <?php if(is_null(Auth::user()->store->count())): ?>
            <div class="box-footer clearfix">
              <a class="btn btn-success" href="<?php echo e(route('admin.pengguna.create')); ?>"><span class="fa fa-plus fa-fw"></span>&nbsp;Tambah Baru</a>     
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