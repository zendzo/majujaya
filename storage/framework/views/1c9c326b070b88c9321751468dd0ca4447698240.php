<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header">
              <h4><?php echo e($page_title); ?></h4>
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
                  <th>Action</th>
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
                        <td width="10%" class="text-center">
                          <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.pengguna.show',$user->id)); ?>">
                            <span class="fa fa-info fa-fw"></span>
                          </a>
                          <a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.pengguna.edit',$user->id)); ?>">
                            <span class="fa fa-pencil fa-fw"></span>
                          </a>
                          <form method="POST" action="<?php echo e(route('admin.pengguna.destroy',$user->id)); ?>" accept-charset="UTF-8" style="display:inline">
                            <button type="submit" class="btn btn-xs btn-danger">
                              <span class="fa fa-close fa-fw"></span>
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
              <a class="btn btn-success" href="<?php echo e(route('admin.pengguna.create')); ?>"><span class="fa fa-plus fa-fw"></span>&nbsp;Tambah Baru</a>
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