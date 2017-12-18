<li class="treeview <?php echo e(active(['admin.role.*','admin.satuan.*','admin.remainder-days.*'])); ?>">
<a href="#"><i class="fa fa-viacoin fa-flip-vertical fa-fw"></i><span>&nbsp;Admin Menu</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
</a>
<ul class="treeview-menu">
    <li class="<?php echo e(active('admin.role.*')); ?>">
        <a href="<?php echo e(route('admin.role.index')); ?>"><i class="fa fa-key fa-fw"></i>Peran</a>
    </li>
    <li class="<?php echo e(active('admin.remainder-days.*')); ?>">
        <a href="<?php echo e(route('admin.remainder-days.index')); ?>"><i class="fa fa-key fa-fw"></i>Hari Pengiriman SMS</a>
    </li>
    <li class="<?php echo e(active('admin.satuan.*')); ?>">
        <a href="<?php echo e(route('admin.satuan.index')); ?>"><i class="glyphicon glyphicon-flash"></i>Satuan</a>
    </li>
</ul>
</li>