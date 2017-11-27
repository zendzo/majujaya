<li class="treeview <?php echo e(active(['admin.gudang.list.*','admin/gudang/inflow/*','admin/gudang/outflow/*'])); ?>">
    <a href="#"><i class="fa fa-hospital-o" ></i><span>Gudang</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu <?php echo e(active(['admin.gudang.list.*','admin/gudang/inflow/*'])); ?>">
    	<li class="<?php echo e(active(['admin.gudang.list.inflow','admin/gudang/inflow/*'])); ?>">
         	<a href="<?php echo e(route('admin.gudang.list.inflow')); ?>">
                <i class="fa fa-mail-forward fa-rotate-90 fa-fw"></i> 
            Masuk</a>
        </li>
        <li class="<?php echo e(active(['admin.gudang.list.outflow','admin/gudang/outflow/*'])); ?>">
            <a href="<?php echo e(route('admin.gudang.list.outflow')); ?>">
                <i class="fa fa-mail-reply fa-rotate-90 fa-fw"></i> 
            Keluar</a>
        </li>
    </ul>
</li>