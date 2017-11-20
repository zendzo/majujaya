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
      format: 'dd/mm/yyyy'
    });

    $('#datepicker2').datepicker({
      format: 'dd/mm/yyyy'
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
            @if (Auth::user()->role->id == "1")
              <form class="form-horizontal"  action="{{ route('admin.penjualan.store') }}" method="POST">
            @else
              <form class="form-horizontal"  action="{{ route('user.pembelian.store') }}" method="POST">
            @endif
            {{ csrf_field() }}
              <div class="box-body">
              	<div class="form-group">
                  <label for="user_id" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                     @if (Auth::user()->role->id == "1")
                       <select name="user_id" class="form-control select2">
                    @else
                      <input class="form-control" value="{{ Auth::user()->fullName() }}" readonly>
                      <input type="hidden" name="user_id" class="form-control" value="{{ Auth::id() }}">
                    @endif
	                  </select>
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
                    <input name="kode" class="form-control" id="inputEmail3" value="{{ strtoupper(str_random('6')) }}" readonly="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="penjualan_type_id" class="col-sm-2 control-label">TIPE</label>

                  <div class="col-sm-10">
                     <select name="penjualan_type_id" class="form-control">
                        @foreach($penjualanType as $type)
                          <option value="{{ $type->id }}">{{ $type->type }}</option>
                        @endforeach
	                  </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="tanggal_so" class="col-sm-2 control-label">TANGGAL SO</label>

                  <div class="col-sm-10">
                    <input name="tanggal_so" type="text" class="form-control pull-right" id="datepicker" required="" placeholder="{{ Date('m/d/Y') }}">
                  </div>
                </div>

              </div>
              <!-- /.box-body -->

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

              <div class="box-body form-horizontal">

              	<div class="form-group">
                  <label for="tanggal_kirim" class="col-sm-2 control-label">Tanggal Kirim</label>

                  <div class="col-sm-10">
                    <input name="tanggal_kirim" type="text" class="form-control pull-right" id="datepicker2" required="" placeholder="{{ Date('m/d/Y') }}">
                  </div>
                </div>

                {{-- form_partials.delivery_options --}}
                @include('form_partials.delivery_options')
                
                <div class="form-group">
                  <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>

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