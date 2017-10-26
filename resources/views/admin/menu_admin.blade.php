<li class="treeview {{ active(['admin.role.*']) }}">
<a href="#"><i class="fa fa-viacoin fa-flip-vertical fa-fw"></i><span>&nbsp;Admin Menu</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
</a>
<ul class="treeview-menu">
    <li class="{{ active('admin.role.*') }}">
        <a href="{{ route('admin.role.index') }}"><i class="fa fa-key fa-fw"></i>Peran</a>
    </li>
    <li class="">
        <a href="http://localhost:8080/dashboard/admin/unit"><i class="glyphicon glyphicon-flash"></i>Satuan</a>
    </li>
    <li class="">
        <a href="http://localhost:8080/dashboard/admin/currencies"><i class="glyphicon glyphicon-usd"></i>Mata Uang</a>
    </li>
    <li class="">
        <a href="http://localhost:8080/dashboard/admin/phone/provider"><i class="glyphicon glyphicon-phone"></i>Provider Telepon</a>
    </li>
</ul>
</li>