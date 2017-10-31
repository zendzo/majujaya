@extends('layouts.master')

@section('cssPlugins')
<link rel="stylesheet" href="{{ asset('AdminLTE/plugins/timepicker/bootstrap-timepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datepicker/datepicker3.css') }}">
@endsection

@section('jsPlugins')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ asset('AdminLTE/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{ asset('AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<script src="{{ asset('AdminLTE/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<script src="{{ asset('AdminLTE/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<script>
  $(function(){

    $('#datepicker').datepicker({
      format: 'dd/mm/yyyy'
    });

    $('#datepicker2').datepicker({
      format: 'dd/mm/yyyy'
    });
  });
</script>
@endsection
@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-6">

    <!-- general form elements -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Detail Supplier</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
        <div class="box-body form-horizontal">
          <div class="form-group">
            <label for="supplier_id" class="col-sm-2 control-label">Supplier</label>

            <div class="col-sm-10">
               <input name="kode" class="form-control" id="kode" value="{{ $order->supplier->nama }}" readonly="">
            </div>
          </div>
          <div class="form-group">
            <label for="tanggal_kirim" class="col-sm-2 control-label">Tanggal Kirim</label>

            <div class="col-sm-10">
              <input name="tanggal_po" type="text" class="form-control pull-right" value="{{ $order->tanggal_kirim->format('d/m/Y') }}" readonly="">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Gudang</label>

            <div class="col-sm-10">
               <input name="tanggal_po" type="text" class="form-control pull-right" value="{{ $order->gudang->nama }}" readonly="">
            </div>
          </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Angkutan</label>

          <div class="col-sm-10">
             <input name="tanggal_po" type="text" class="form-control pull-right" value="{{ $order->vendor->nama }}" readonly="">
          </div>
        </div>

        <div class="form-group">
            <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>

            <div class="col-sm-10">
               <textarea class="form-control" name="keterangan" readonly="">{{ $order->keterangan }}</textarea>
          </div>
        </div>

        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

  </div>
  <!--/.col (left) -->
  <!-- right column -->
  <div class="col-md-6">
    <!-- Horizontal Form -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Detail Pembelian</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->

        <div class="box-body form-horizontal">
          <div class="form-group">
            <label for="kode" class="col-sm-2 control-label">KODE</label>

            <div class="col-sm-10">
              <input name="kode" class="form-control" id="kode" value="{{ $order->kode }}" readonly="">
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">TIPE</label>

            <div class="col-sm-10">
               <input name="kode" class="form-control" id="kode" value="{{ $order->type->type }}" readonly="">
            </div>
          </div>

          <div class="form-group">
            <label for="tanggal_po" class="col-sm-2 control-label">TANGGAL PO</label>

            <div class="col-sm-10">
              <input name="tanggal_po" type="text" class="form-control pull-right" value="{{ $order->tanggal_po->format('d/m/Y') }}" readonly="">
            </div>
          </div>

        </div>
        <!-- /.box-body -->

    </div>

    <!-- /.box -->
  </div>
  <!--/.col (right) -->
</div> 

{{-- list items transaksi pembelian --}}

@include('form_partials.list_items_transaksi_pembelian')

{{-- transaksi --}}
@include('form_partials.transaksi')

@endsection