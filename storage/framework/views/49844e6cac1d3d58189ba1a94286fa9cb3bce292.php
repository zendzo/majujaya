<li class="treeview <?php echo e(active(['admin.laporan.*'])); ?>">
<a href="#">
  <i class="fa fa-bar-chart-o fa-fw" aria-hidden="true"></i>
    <span>LAPORAN</span>
  <i class="fa fa-angle-left pull-right"></i>
</a>
  <ul class="treeview-menu">
    <li class="<?php echo e(active(['admin.laporan.transaksi.index'])); ?>"><a href="<?php echo e(route('admin.laporan.transaksi.index')); ?>"><i class="fa fa-circle-o"></i>Transaksi</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i>Master Data</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i>Admin Data</a></li>
  </ul>
</li>