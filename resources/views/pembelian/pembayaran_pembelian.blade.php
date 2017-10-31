@extends('layouts.master')

@section('jsPlugins')
<!-- DataTables -->
<script src="{{ asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable({});
    $('#example2').DataTable({

    });
  });
</script>

@endsection

@section('cssPlugins')
<!-- DataTables -->
<link rel="stylesheet" href=".{{ asset('AdminLTE/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('content')
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
                  <th>Tipe Penjualan</th>
                  <th>Dari Gudang</th>
                  <th>Layanan Angkutan</th>
                  <th>Keterangan</th>
                  <th>Total</th>
                  <th>Pembayaran</th>
                  <th>Sisa Pembayaran</th>
                </tr>
                </thead>

                <tbody>
                  @foreach($orders as $order)
                   <tr>
                      <td>{{ $order->kode }}</td>
                      <td>{{ $order->supplier->nama }}</td>
                      <td>{{ $order->tanggal_po->format('d/m/Y') }}</td>
                      <td>{{ $order->tanggal_kirim->format('d/m/Y') }}</td>
                      <td>{{ $order->type->type }}</td>
                      <td>{{ $order->gudang->nama }}</td>
                      <td>{{ $order->vendor->nama }}</td>
                      <td>{{ $order->keterangan }}</td>
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
@endsection