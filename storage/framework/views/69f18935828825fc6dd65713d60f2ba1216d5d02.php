<li class="treeview <?php echo e(active(['admin.pembelian.*','admin.pembayaran.pembelian'])); ?>">
<a href="#">
  <i class="fa fa-truck fa-fw" aria-hidden="true"></i>
    <span>NOTA PEMBELIAN</span>
  <i class="fa fa-angle-left pull-right"></i>
</a>
  <ul class="treeview-menu">
    <li class="<?php echo e(active('admin.pembelian.index')); ?>">
    	<a href="<?php echo e(route('admin.pembelian.index')); ?>"><i class="fa fa-shopping-cart"></i>Pembelian</a>
    </li>
    <li class="<?php echo e(active('admin.pembayaran.pembelian')); ?>">
    	<a href="<?php echo e(route('admin.pembayaran.pembelian')); ?>"><i class="fa fa-credit-card"></i>Pembayaran</a>
    </li>
    <li class="<?php echo e(active('admin.pembelian.*')); ?>">
    	<a href="#"><i class="fa fa-code-fork fa-rotate-180 fa-fw"></i>Revisi</a>
    </li>
  </ul>
</li>