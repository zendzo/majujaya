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
                  <th>Supplier</th>
                  <th>Kode Nota</th>
                  <th>Tipe Pembelian</th>
                  <th>Tanggal Pembelian</th>
                  <th>Tanggal Pengiriman</th>
                  <th>Gudang</th>
                  {{-- <th>Layanan Angkutan</th> --}}
                  <th>Keterangan</th>
                </tr>
                </thead>

                <tbody>
                  @foreach($orders as $order)
                   <tr>
                      <td>{{ $order->supplier->nama }}</td>
                      <td>
                      	<a href="{{route('admin.proses.transaksi.pembelian',$order->kode)}}">{{ $order->kode }}</a>
                      </td>
                      <td>{{ $order->type->type }}</td>
                      <td>{{ $order->tanggal_po->format('d/m/Y') }}</td>
                      <td>{{ $order->tanggal_kirim->format('d/m/Y') }}</td>
                      <td>{{ $order->gudang->nama }}</td>
                      {{-- <td>{{ $order->vendor->nama }}</td> --}}
                      <td>{{ $order->keterangan }}</td>
                   </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
@endsection