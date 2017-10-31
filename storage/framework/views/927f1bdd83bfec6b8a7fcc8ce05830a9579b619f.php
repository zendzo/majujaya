<li class="treeview  <?php echo e(active(['admin.penjualan.*','admin.pembayaran.penjualan'])); ?>">
<a href="#">
  <i class="fa fa-cart-arrow-down fa-fw" aria-hidden="true"></i>
    <span>NOTA PENJUALAN</span>
  <i class="fa fa-angle-left pull-right"></i>
</a>
  <ul class="treeview-menu">
    <li class="<?php echo e(active('admin.penjualan.index')); ?>">
    	<a href="<?php echo e(route('admin.penjualan.index')); ?>"><i class="fa fa-shopping-cart"></i>Penjualan</a>
    </li>
    <li class="<?php echo e(active('admin.pembayaran.penjualan')); ?>">
    	<a href="<?php echo e(route('admin.pembayaran.penjualan')); ?>"><i class="fa fa-credit-card"></i>Pembayaran</a>
    </li>
    <li >
    	<a href="#"><i class="fa fa-code-fork fa-rotate-180 fa-fw"></i>Revisi</a>
    </li>
  </ul>
</li>