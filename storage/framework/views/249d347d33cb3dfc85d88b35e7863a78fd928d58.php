<li class="treeview <?php echo e(active(['admin.pengguna.*','admin.product.*','admin.product-type.*','admin.supplier.*','admin.warehouse.*','admin.truck.*','admin.vendor.*','admin.store.*'])); ?>">
<a href="#">
  <i class="fa fa-file-text-o fa-fw" aria-hidden="true"></i>
    <span>MASTER DATA</span>
  <i class="fa fa-angle-left pull-right"></i>
</a>
  <ul class="treeview-menu">
    <li class="<?php echo e(active('admin.pengguna.*')); ?>">
    	<a href="<?php echo e(route('admin.pengguna.index')); ?>"><i class="fa fa-user fa-fw"></i>Pelanggan (Pengguna)</a>
    </li>
    <li class="<?php echo e(active('admin.store.*')); ?>">
        <a href="<?php echo e(route('admin.store.index')); ?>"><i class="fa fa-umbrella fa-fw"></i>Toko</a>
    </li>
    <li class="<?php echo e(active('admin.supplier.*')); ?>">
    	<a href="<?php echo e(route('admin.supplier.index')); ?>"><i class="fa fa-building-o fa-fw"></i>Supplier</a>
    </li>
		<li class="treeview <?php echo e(active(['admin.product.*','admin.product-type.*'])); ?>">
			<a href="#">
				<i class="fa fa-cubes fa-fw"></i>&nbsp;Produk<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
			</a>
		<ul class="treeview-menu <?php echo e(active(['admin.pengguna.*','admin.product-type.*'])); ?>">
			<li class="<?php echo e(active('admin.product.*')); ?>">
				<a href="<?php echo e(route('admin.product.index')); ?>"><i class="fa fa-cubes fa-fw"></i>Produk</a>
			</li>
			<li class="<?php echo e(active('admin.product-type.*')); ?>">
				<a href="<?php echo e(route('admin.product-type.index')); ?>"><i class="fa fa-cube fa-fw"></i>Tipe Produk</a>
			</li>
		</ul>
		</li>
    <li class="<?php echo e(active('admin.warehouse.*')); ?>">
    	<a href="<?php echo e(route('admin.warehouse.index')); ?>"><i class="fa fa-hospital-o"></i>Gudang</a>
    </li>
    <li class="<?php echo e(active('admin.truck.*')); ?>">
    	<a href="<?php echo e(route('admin.truck.index')); ?>"><i class="fa fa-truck fa-flip-horizontal fa-fw"></i>Truck</a>
    </li>

    <li class="treeview <?php echo e(active(['admin.vendor.*'])); ?>">
			<a href="#">
				<i class="fa fa-vine"></i>&nbsp;Vendor<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
			</a>
		<ul class="treeview-menu">
			<li class="<?php echo e(active('admin.vendor.*')); ?>">
				<a href="<?php echo e(route('admin.vendor.index')); ?>"><i class="fa fa-ge fa-fw"></i>Angkutan</a>
			</li>
		</ul>
		</li>
  </ul>
</li>