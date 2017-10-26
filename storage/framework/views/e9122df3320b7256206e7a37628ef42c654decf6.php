<!-- form_partials.delivery_options -->
<div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">Gudang</label>

  <div class="col-sm-10">
     <select name="gudang_id" class="form-control">
        <?php $__currentLoopData = $warehouses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warehouse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($warehouse->id); ?>"><?php echo e($warehouse->nama); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
  </div>
</div>

<div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">Angkutan</label>

  <div class="col-sm-10">
     <select name="vendor_id" class="form-control">
        <?php $__currentLoopData = $vendors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($vendor->id); ?>"><?php echo e($vendor->nama); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
  </div>
</div>