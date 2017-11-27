<div class="box box-info">
  <div class="box-header">
    <h3 class="box-title">{{ $page_title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Kode Nota</th>
        <th>Pelanggan</th>
        <th>Tanggal Penjualan</th>
        <th>Tanggal Pengiriman</th>
        {{-- <th>Tipe Penjualan</th> --}}
        <th>Dari Gudang</th>
        {{-- <th>Layanan Angkutan</th> --}}
        {{-- <th>Keterangan</th> --}}
        <th>Total</th>
        <th>Pembayaran</th>
        <th>Sisa Pembayaran</th>
        @if (Auth::user()->role->id == "1")
         <th>Konfirmasi</th>
        @endif
      </tr>
      </thead>

      <tbody>
        @foreach($sales as $sale)
         <tr>
            <td>
              @if (Auth::user()->role->id == "1")
                <a href="{{route('admin.proses.transaksi.penjualan',$sale->kode)}}">{{ $sale->kode }}</a>
              @else
                <a href="{{route('user.proses.transaksi.penjualan',$sale->kode)}}">{{ $sale->kode }}</a>
              @endif
            </td>
            <td><a href="{{ url('/user/profile',$sale->user->id) }}">{{ $sale->user->fullName() }}</a></td>
            <td>{{ $sale->tanggal_so->format('d/m/Y') }}</td>
            <td>{{ $sale->tanggal_kirim->format('d/m/Y') }}</td>
            {{-- <td>{{ $sale->type->type }}</td> --}}
            <td>{{ $sale->gudang->nama }}</td>
            {{-- <td>{{ $sale->vendor->nama }}</td> --}}
            {{-- <td>{{ $sale->keterangan }}</td> --}}
            <td>{{ $sale->sales->sum('total') }}</td>
            <td>{{ $sale->bayar }}</td>
            <td>{{ $sale->sales->sum('total') - $sale->bayar }}</td>
            {{-- send invoice sms --}}
            @if (Auth::user()->role->id == "1")
            <td>
              <a href="{{ route('admin.konfirmasi.pesanan', $sale->id) }}" class="btn btn-info">
                <i class="fa fa-fw fa-check-square-o"></i>
              </a>
            </td>
            @endif
         </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->