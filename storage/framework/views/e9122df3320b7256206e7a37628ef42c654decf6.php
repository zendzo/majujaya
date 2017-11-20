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

