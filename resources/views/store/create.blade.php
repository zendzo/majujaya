@extends('layouts.master')

@section('cssPlugins')
<!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/select2/select2.min.css') }}">
@endsection
@section('jsPlugins')
<!-- Select2 -->
<script src="{{ asset('AdminLTE/plugins/select2/select2.full.min.js') }}"></script>

<script>
  $(function(){

    $("select#select2").select2({
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
  <div class="col-md-12">
    <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{ $page_title }}</h3>
            </div>
            <!-- /.box-header --> 
          <div class="box-body">
            <form class="form-horizontal"  action="{{ route('admin.store.store') }}" method="POST">
              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                <label for="nama" class="col-sm-2 control-label">Nama </label>

                <div class="col-sm-10">
                  <input id="nama" name="nama" type="text" class="form-control" placeholder="Name" value="{{ old('nama') }}" required>

                  @if ($errors->has('nama'))
                      <span class="help-block">
                          <strong>{{ $errors->first('nama') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                <label for="user_id" class="col-sm-2 control-label">Pemilik </label>

                <div class="col-sm-10">
                  <select name="user_id" class="form-control" id="select2" style="width: 100%;">

                  @if ($errors->has('user_id'))
                      <span class="help-block">
                          <strong>{{ $errors->first('user_id') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                <label for="alamat" class="col-sm-2 control-label">Alamat </label>

                <div class="col-sm-10">
                  <input id="alamat" name="alamat" type="text" class="form-control" placeholder="Alamat" value="{{ old('alamat') }}" required>

                  @if ($errors->has('alamat'))
                      <span class="help-block">
                          <strong>{{ $errors->first('alamat') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('npwp') ? ' has-error' : '' }}">
                <label for="npwp" class="col-sm-2 control-label">NPWP</label>

                <div class="col-sm-10">
                  <input id="npwp" name="npwp" type="text" class="form-control" placeholder="NPWP" value="{{ old('npwp') }}" required>

                  @if ($errors->has('npwp'))
                      <span class="help-block">
                          <strong>{{ $errors->first('npwp') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                <label for="status" class="col-sm-2 control-label">Status</label>

                <div class="col-sm-10">
                  <select class="form-control" name="status" id="status">
                    <option value="true">Aktif</option>
                    <option value="0">Inaktif</option>
                  </select>

                  @if ($errors->has('status'))
                      <span class="help-block">
                          <strong>{{ $errors->first('status') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('keterangan') ? ' has-error' : '' }}">
                <label for="status" class="col-sm-2 control-label">Keterangan</label>

                <div class="col-sm-10">
                  <input id="keterangan" name="keterangan" type="text" class="form-control" placeholder="Keterangan" value="{{ old('keterangan') }}" required>
                  <input name="user_id" type="text" hidden value="{{ Auth::id() }}">

                  @if ($errors->has('keterangan'))
                      <span class="help-block">
                          <strong>{{ $errors->first('keterangan') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> Save</button>
                </div>
              </div>
            </form>
          </div>           
          </div>
          <!-- /.box -->
          <!-- form start -->

  </div>
</div>
@endsection