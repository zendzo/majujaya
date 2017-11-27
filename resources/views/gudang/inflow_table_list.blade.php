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
        <th>Supplier</th>
        <th>Tanggal Penjualan</th>
        <th>Tanggal Pengiriman</th>
        {{-- <th>Tipe Penjualan</th> --}}
        <th>Dari Gudang</th>
        {{-- <th>Layanan Angkutan</th> --}}
        {{-- <th>Keterangan</th> --}}
        <th>Total</th>
        <th>Pembayaran</th>
        <th>Sisa Pembayaran</th>
      </tr>
      </thead>

      <tbody>
        @foreach($data->pembelians as $order)
         <tr>
            <td>
              @if (Auth::user()->role->id == "1")
                <a href="{{route('admin.proses.transaksi.pembelian',$order->kode)}}">{{ $order->kode }}</a>
              @else
                <a href="{{route('user.proses.transaksi.penjualan',$order->kode)}}">{{ $order->kode }}</a>
              @endif
            </td>
            <td>{{ $order->supplier->nama }}</td>
            <td>{{ $order->tanggal_po->format('d/m/Y') }}</td>
            <td>{{ $order->tanggal_kirim->format('d/m/Y') }}</td>
            {{-- <td>{{ $order->type->type }}</td> --}}
            <td>{{ $order->gudang->nama }}</td>
            {{-- <td>{{ $order->vendor->nama }}</td> --}}
            {{-- <td>{{ $order->keterangan }}</td> --}}
            <td>{{ $order->orders->sum('total') }}</td>
            <td>{{ $order->bayar }}</td>
            <td>{{ $order->orders->sum('total') - $order->bayar }}</td>
         </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->