<?php $__env->startSection('jsPlugins'); ?>
<!-- DataTables -->
<script src="<?php echo e(asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('AdminLTE/plugins/datatables/dataTables.bootstrap.min.js')); ?>"></script>

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable({});
    $('#example2').DataTable({

    });
  });
</script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('cssPlugins'); ?>
<!-- DataTables -->
<link rel="stylesheet" href=".<?php echo e(asset('AdminLTE/plugins/datatables/dataTables.bootstrap.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  <?php echo $__env->make('gudang.outflow_table_list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>