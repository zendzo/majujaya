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
        <th>Layanan Angkutan</th>
        {{-- <th>Keterangan</th> --}}
        <th>Total</th>
        <th>Pembayaran</th>
        <th>Sisa Pembayaran</th>
        <th>Taggihan</th>
      </tr>
      </thead>

      <tbody>
        @foreach($orders as $order)
         <tr>
            <td>
              <a href="{{route('admin.proses.transaksi.pembelian',$order->kode)}}">{{ $order->kode }}</a>
            </td>
            <td>{{ $order->supplier->nama }}</td>
            <td>{{ $order->tanggal_po->format('d/m/Y') }}</td>
            <td>{{ $order->tanggal_kirim->format('d/m/Y') }}</td>
            {{-- <td>{{ $order->type->type }}</td> --}}
            <td>{{ $order->gudang->nama }}</td>
            <td>{{ $order->vendor->nama }}</td>
            {{-- <td>{{ $order->keterangan }}</td> --}}
            <td>{{ $order->orders->sum('total') }}</td>
            <td>{{ $order->bayar }}</td>
            <td>{{ $order->orders->sum('total') - $order->bayar }}</td>
            {{-- send invoice sms --}}
            <td>
              <a href="{{ route('admin.invoice.sms.pembelian', $order->kode) }}" class="btn btn-info"><i class="fa fa-fw fa-send"></i></a>
            </td>
         </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->