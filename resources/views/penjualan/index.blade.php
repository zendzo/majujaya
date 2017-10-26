@extends('layouts.master')

@section('cssPlugins')
<link rel="stylesheet" href="{{ asset('AdminLTE/plugins/timepicker/bootstrap-timepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datepicker/datepicker3.css') }}">
<!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/select2/select2.min.css') }}">
@endsection

@section('jsPlugins')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ asset('AdminLTE/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{ asset('AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<script src="{{ asset('AdminLTE/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<script src="{{ asset('AdminLTE/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<!-- Select2 -->
<script src="{{ asset('AdminLTE/plugins/select2/select2.full.min.js') }}"></script>

<script>
	$(function(){

    $('#datepicker').datepicker({
      format: 'mm/dd/yyyy'
    });

    $('#datepicker2').datepicker({
      format: 'mm/dd/yyyy'
    });

    $(".select2").select2({
       placeholder: 'Select an item',
       minimumInputLength: 1,
          ajax: {
          url: '/users/find',
          dataType: 'json',
          data: function (params) {
              return {
                  q: $.trim(params.term)
              };
          },
          processResults: function (data) {
              return {
                  results: data
              };
          },
          cache: true
      }
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
              <h3 class="box-title">Pelanggan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
              	<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                     <select class="form-control select2">
	                  </select>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
            </form>
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
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="kode" class="col-sm-2 control-label">KODE</label>

                  <div class="col-sm-10">
                    <input type="kode" class="form-control" id="inputEmail3" placeholder="KODE" value="{{ strtoupper(str_random('6')) }}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">TIPE</label>

                  <div class="col-sm-10">
                     <select class="form-control">
                        @foreach($penjualanType as $type)
                          <option value="{{ $type->id }}">{{ $type->type }}</option>
                        @endforeach
	                  </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">TANGGAL PO</label>

                  <div class="col-sm-10">
                    <input name="masa_tahun" type="text" class="form-control pull-right" id="datepicker" required="" placeholder="{{ Date('m/d/Y') }}">
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
            </form>
          </div>

          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>	

<div class="row">
        <!-- left column -->
        <div class="col-md-12">

          <!-- general form elements -->
         <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Pengiriman</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">

              	<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Kirim</label>

                  <div class="col-sm-10">
                    <input name="masa_tahun" type="text" class="form-control pull-right" id="datepicker2" required="" placeholder="{{ Date('m/d/Y') }}">
                  </div>
                </div>

                @include('form_partials.delivery_options')
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Keterangan</label>

                  <div class="col-sm-10">
                     <textarea class="form-control" name="keterangan"></textarea>
                </div>
              </div>

              </div>

              <!-- /.box-body -->
              
              <!-- box footer -->
            	<div class="box-footer">
            		<button type="submit" class="btn btn-primary">Simpan</button>
          		</div>
              <!-- / .box footer -->
            </form>
          </div>

        </div>
      </div>	

@endsection