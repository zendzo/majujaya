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
            <form class="form-horizontal"  action="{{ route('admin.laporan.user') }}" method="POST">
            {{ csrf_field() }}
              <div class="box-body">
              	<div class="form-group">
                  <label for="user_id" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <select name="user_id" class="form-control">
                    	@foreach ($users as $user)
                    		<option value="{{ $user->id }}">{{ $user->fullName() }}
                    			@if ($user->store)
                    				- (<b>{{ $user->store->nama }}</b>)
                    			@endif
                    		</option>
                    	@endforeach
	                </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              	<button class="btn btn-primary">Submit</button>
              	</form>
              </div>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Supplier</h3>
            </div>
            <!-- /.box-header -->
            <form class="form-horizontal"  action="{{ route('admin.laporan.supplier') }}" method="POST">
            {{ csrf_field() }}
              <div class="box-body">
              	<div class="form-group">
                  <label for="user_id" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <select name="supplier_id" class="form-control">
                    	@foreach ($vendors as $vendor)
                    		<option value="{{ $vendor->id }}">{{ $vendor->nama }}</option>
                    	@endforeach
	                </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              	<button class="btn btn-primary">Submit</button>
              </form>
              </div>
          </div>

          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>


{{-- <div class="row">
        <!-- left column -->
        <div class="col-md-6">

          <!-- general form elements -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Toko</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal"  action="{{ route('admin.penjualan.store') }}" method="POST">
            {{ csrf_field() }}
              <div class="box-body">
              	<div class="form-group">
                  <label for="user_id" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <select name="user_id" class="form-control">
                    	@foreach ($stores as $store)
                    		<option value="{{ $store->id }}">{{ $store->nama }}
                    		</option>
                    	@endforeach
	                </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              	<button class="btn btn-primary">Submit</button>
              	</form>
              </div>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Supplier</h3>
            </div>
            <!-- /.box-header -->
            <form class="form-horizontal"  action="{{ route('admin.penjualan.store') }}" method="POST">
            {{ csrf_field() }}
              <div class="box-body">
              	<div class="form-group">
                  <label for="user_id" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <select name="vendor_id" class="form-control">
                    	@foreach ($vendors as $vendor)
                    		<option value="{{ $vendor->id }}">{{ $vendor->nama }}</option>
                    	@endforeach
	                </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              	<button class="btn btn-primary">Submit</button>
              </form>
              </div>
          </div>

          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div> --}}
@endsection