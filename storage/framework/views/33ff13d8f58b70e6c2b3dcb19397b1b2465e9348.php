<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header">
              <h4><?php echo e($page_title); ?></h4>
              <hr>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                	<td>Nama</td>
                  <td>Alamat</td>
                	<td>Phone</td>
                	<td>NPWP ID</td>
                	<td>Status</td>
                	<td>Keterangan</td>
                	<td>Action</td>
                </tr>
                </thead>
                <tbody>
                	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td><?php echo e($item->nama); ?></td>
                    <td><?php echo e($item->alamat); ?></td>
                    <td><?php echo e($item->phone); ?></td>
                    <td><?php echo e($item->npwp); ?></td>
                    <td><?php echo e($item->status); ?></td>
                    <td><?php echo e($item->keterangan); ?></td>

                    <!-- button action -->
                    <td width="10%" class="text-center">
                      <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.supplier.show',$item->id)); ?>">
                        <span class="fa fa-info fa-fw"></span>
                      </a>
                      <a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.supplier.edit',$item->id)); ?>">
                        <span class="fa fa-pencil fa-fw"></span>
                      </a>
                      <form method="POST" action="<?php echo e(route('admin.supplier.destroy',$item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                        <?php echo e(method_field('DELETE')); ?>

                        <?php echo e(csrf_field()); ?>

                        <button type="submit" class="btn btn-xs btn-danger">
                          <span class="fa fa-close fa-fw"></span>
                        </button>
                      </form>
                    </td>

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a class="btn btn-success" href="<?php echo e(route('admin.supplier.create')); ?>"><span class="fa fa-plus fa-fw"></span>&nbsp;Tambah Baru</a>
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