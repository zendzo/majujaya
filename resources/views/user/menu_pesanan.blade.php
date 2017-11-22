<li class="treeview {{ active(['user.pembelian.*','user.pembayaran.pembelian','user.revisi.pembelian.completed']) }}">
<a href="#">
  <i class="fa fa-truck fa-fw" aria-hidden="true"></i>
    <span>NOTA PEMBELIAN</span>
  <i class="fa fa-angle-left pull-right"></i>
</a>
  <ul class="treeview-menu">
    <li class="{{ active('user.pembelian.index') }}">
    	<a href="{{ route('user.pembelian.index') }}"><i class="fa fa-shopping-cart"></i>Pembelian</a>
    </li>
    <li class="{{ active('user.pembayaran.pembelian') }}">
    	<a href="{{ route('user.pembayaran.pembelian') }}"><i class="fa fa-credit-card"></i>Pembayaran</a>
    </li>
    {{-- <li class="{{ active(['user.revisi.pembelian.completed']) }}">
    	<a href="{{ route('user.revisi.pembelian.completed') }}"><i class="fa fa-code-fork fa-rotate-180 fa-fw"></i>Revisi</a>
    </li> --}}
  </ul>
</li>