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
                  <th>Pelanggan</th>
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
                  @foreach($sales as $sale)
                   <tr>
                      <td>{{ $sale->kode }}</td>
                      <td>{{ $sale->user->fullName() }}</td>
                      <td>{{ $sale->tanggal_so->format('d/m/Y') }}</td>
                      <td>{{ $sale->tanggal_kirim->format('d/m/Y') }}</td>
                      <td>{{ $sale->type->type }}</td>
                      <td>{{ $sale->gudang->nama }}</td>
                      <td>{{ $sale->vendor->nama }}</td>
                      <td>{{ $sale->keterangan }}</td>
                      <td>{{ $sale->sales->sum('total') }}</td>
                      <td>{{ $sale->bayar }}</td>
                      <td>{{ $sale->sales->sum('total') - $sale->bayar }}</td>
                   </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
@endsection