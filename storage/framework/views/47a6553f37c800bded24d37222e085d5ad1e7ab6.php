<?php if(session('message')): ?>
<script>
  swal(
    "<?php echo e(session('status')); ?>",
    "<?php echo e(session('message')); ?>",
    "<?php echo e(session('type')); ?>"
    )
</script>
<?php endif; ?>