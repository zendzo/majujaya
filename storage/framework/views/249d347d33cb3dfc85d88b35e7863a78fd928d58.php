<li class="treeview">
<a href="#">
  <i class="fa fa-file-text-o fa-fw" aria-hidden="true"></i>
    <span>MASTER DATA</span>
  <i class="fa fa-angle-left pull-right"></i>
</a>
  <ul class="treeview-menu">
    <li><a href="<?php echo e(route('admin.pengguna.index')); ?>"><i class="fa fa-user fa-fw"></i>Pelanggan (Pengguna)</a></li>
    <li><a href="<?php echo e(route('admin.supplier.index')); ?>"><i class="fa fa-building-o fa-fw"></i>Supplier</a></li>
		<li class="treeview ">
			<a href="#">
				<i class="fa fa-cubes fa-fw"></i>&nbsp;Produk<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
			</a>
		<ul class="treeview-menu">
			<li class=""><a href="<?php echo e(route('admin.product.index')); ?>"><i class="fa fa-cubes fa-fw"></i>Produk</a></li>
			<li class=""><a href="<?php echo e(route('admin.product-type.index')); ?>"><i class="fa fa-cube fa-fw"></i>Tipe Produk</a></li>
		</ul>
		</li>
    <li><a href="<?php echo e(route('admin.warehouse.index')); ?>"><i class="fa fa-hospital-o"></i>Gudang</a></li>
    <li><a href="<?php echo e(route('admin.truck.index')); ?>"><i class="fa fa-truck fa-flip-horizontal fa-fw"></i>Truck</a></li>
  </ul>
</li>