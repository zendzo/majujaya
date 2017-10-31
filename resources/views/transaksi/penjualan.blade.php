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
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Pelanggan</th>
                  <th>Kode Nota</th>
                  <th>Tipe Penjualan</th>
                  <th>Tanggal Penjualan</th>
                  <th>Tanggal Pengiriman</th>
                  <th>Dari Gudang</th>
                  <th>Layanan Angkutan</th>
                  <th>Keterangan</th>
                </tr>
                </thead>

                <tbody>
                  @foreach($sales as $sale)
                   <tr>
                      <td>{{ $sale->user->fullName() }}</td>
                      <td>
                      	<a href="{{route('admin.proses.transaksi.penjualan',$sale->kode)}}">{{ $sale->kode }}</a>
                      </td>
                      <td>{{ $sale->type->type }}</td>
                      <td>{{ $sale->tanggal_so->format('d/m/Y') }}</td>
                      <td>{{ $sale->tanggal_kirim->format('d/m/Y') }}</td>
                      <td>{{ $sale->gudang->nama }}</td>
                      <td>{{ $sale->vendor->nama }}</td>
                      <td>{{ $sale->keterangan }}</td>
                   </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
@endsection