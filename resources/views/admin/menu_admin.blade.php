<li class="treeview {{ active(['admin.role.*','admin.satuan.*','admin.remainder-days.*']) }}">
<a href="#"><i class="fa fa-viacoin fa-flip-vertical fa-fw"></i><span>&nbsp;Admin Menu</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
</a>
<ul class="treeview-menu">
    <li class="{{ active('admin.role.*') }}">
        <a href="{{ route('admin.role.index') }}"><i class="fa fa-key fa-fw"></i>Peran</a>
    </li>
    <li class="{{ active('admin.remainder-days.*') }}">
        <a href="{{ route('admin.remainder-days.index') }}"><i class="fa fa-key fa-fw"></i>Hari Pengiriman SMS</a>
    </li>
    <li class="{{ active('admin.satuan.*') }}">
        <a href="{{ route('admin.satuan.index') }}"><i class="glyphicon glyphicon-flash"></i>Satuan</a>
    </li>
</ul>
</li>