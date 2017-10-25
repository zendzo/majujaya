<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
    <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo e($page_title); ?></h3>
            </div>
            <!-- /.box-header --> 
          <div class="box-body">
            <form class="form-horizontal"  action="<?php echo e(route('admin.product.store')); ?>" method="POST">
              <?php echo e(csrf_field()); ?>


              <div class="form-group<?php echo e($errors->has('nama') ? ' has-error' : ''); ?>">
                <label for="nama" class="col-sm-2 control-label">Nama</label>

                <div class="col-sm-8">
                  <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama" value="<?php echo e(old('nama')); ?>">

                  <?php if($errors->has('nama')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('nama')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('product_type_id') ? ' has-error' : ''); ?>">
                <label for="product_type_id" class="col-sm-2 control-label">Tipe Product</label>

                <div class="col-sm-8">
                 <select class="form-control" name="product_type_id">
                 	<?php $__currentLoopData = $product_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 		<option value="<?php echo e($item->id); ?>"><?php echo e($item->nama); ?></option>
                 	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>

                  <?php if($errors->has('product_type_id')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('product_type_id')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('kode') ? ' has-error' : ''); ?>">
                <label for="kode" class="col-sm-2 control-label">Kode</label>

                <div class="col-sm-8">
                  <input id="kode" name="kode" type="text" class="form-control" placeholder="kode" value="<?php echo e(old('kode')); ?>">

                  <?php if($errors->has('kode')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('kode')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('deskripsi') ? ' has-error' : ''); ?>">
                <label for="deskripsi" class="col-sm-2 control-label">Deskripsi</label>

                <div class="col-sm-8">
                  <textarea class="form-control" name="deskripsi" value="<?php echo e(old('deskripsi')); ?>" placeholder="Deskripsi"></textarea>

                  <?php if($errors->has('deskripsi')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('deskripsi')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('status') ? ' has-error' : ''); ?>">
                <label for="status" class="col-sm-2 control-label">Status</label>

                <div class="col-sm-8">
                 <select class="form-control" name="status">
                    <option value="1">Aktif</option>
                    <option value="0">Inaktif</option>
                  </select>

                  <?php if($errors->has('status')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('status')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group<?php echo e($errors->has('keterangan') ? ' has-error' : ''); ?>">
                <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>

                <div class="col-sm-8">
                  <input id="keterangan" name="keterangan" type="text" class="form-control" placeholder="keterangan" value="<?php echo e(old('keterangan')); ?>">

                  <?php if($errors->has('keterangan')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('keterangan')); ?></strong>
                      </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                  <button type="reset" class="btn btn-primary"><i class="fa fa-trash-o"></i> Cancel</button>
                </div>
              </div>
            </form>
          </div>           
          </div>
          <!-- /.box -->
          <!-- form start -->

  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>