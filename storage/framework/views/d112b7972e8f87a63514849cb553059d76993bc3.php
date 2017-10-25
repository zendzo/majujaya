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
                	<td>Tipe Truk</td>
                  <td>Plat Nomor</td>
                  <td>Tanggal</td>
                  <td>Inspeksi</td>
                  <td>Pengemudi</td>
                  <td>Status</td>
                  <td>Keterangan</td>
                	<td>Action</td>
                </tr>
                </thead>
                <tbody>
                	<td></td>
                	<td></td>
                	<td></td>
                	<td></td>
                	<td></td>
                  <td></td>
                  <td></td>
                	<td width="10%" class="text-center">
                      <a class="btn btn-xs btn-info" href="#">
                        <span class="fa fa-info fa-fw"></span>
                      </a>
                      <a class="btn btn-xs btn-primary" href="#}">
                        <span class="fa fa-pencil fa-fw"></span>
                      </a>
                      <form method="POST" action="#" accept-charset="UTF-8" style="display:inline">
                        <button type="submit" class="btn btn-xs btn-danger">
                          <span class="fa fa-close fa-fw"></span>
                        </button>
                      </form>
                    </td>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a class="btn btn-success" href="<?php echo e(route('admin.truck.create')); ?>">
              	<span class="fa fa-plus fa-fw"></span>Tambah Baru
              </a>
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