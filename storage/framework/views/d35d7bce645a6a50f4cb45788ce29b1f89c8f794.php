<?php if($item->penjualan->completed == "1"): ?>
    <button type="submit" class="btn btn-xs btn-danger" disabled="">
      <i class="fa fa-fw fa-minus-circle"></i>
    </button>
<?php else: ?>
  <form method="POST" action="<?php echo e(route('admin.sales.destroy',$item->id)); ?>" accept-charset="UTF-8" style="display:inline">
    <?php echo e(method_field('DELETE')); ?>

    <?php echo e(csrf_field()); ?>

    <button type="submit" class="btn btn-xs btn-danger">
      <i class="fa fa-fw fa-minus-circle"></i>
    </button>
  </form>
<?php endif; ?>