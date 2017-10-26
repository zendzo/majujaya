@extends('layouts.master')

@section('jsPlugins')
<script>
  $('#reset').click(function(){
    swal({
      buttons: {
        cancel: true,
        confirm: true,
      },
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
            <form class="form-horizontal"  action="{{ route('admin.vendor.store') }}" method="POST">
              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                <label for="nama" class="col-sm-2 control-label">Nama</label>

                <div class="col-sm-8">
                  <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama" value="{{ old('nama') }}">

                  @if ($errors->has('nama'))
                      <span class="help-block">
                          <strong>{{ $errors->first('nama') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                <label for="alamat" class="col-sm-2 control-label">Alamat</label>

                <div class="col-sm-8">
                  <textarea class="form-control" name="alamat" value="{{ old('alamat') }}" placeholder="Alamat"></textarea>

                  @if ($errors->has('alamat'))
                      <span class="help-block">
                          <strong>{{ $errors->first('alamat') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                <label for="phone" class="col-sm-2 control-label">Phone</label>

                <div class="col-sm-8">
                  <input id="phone" name="phone" type="text" class="form-control" placeholder="Phone" value="{{ old('phone') }}">

                  @if ($errors->has('phone'))
                      <span class="help-block">
                          <strong>{{ $errors->first('phone') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('npwp') ? ' has-error' : '' }}">
                <label for="npwp" class="col-sm-2 control-label">NPWP</label>

                <div class="col-sm-8">
                  <input id="npwp" name="npwp" type="text" class="form-control" placeholder="NPWP" value="{{ old('npwp') }}">

                  @if ($errors->has('npwp'))
                      <span class="help-block">
                          <strong>{{ $errors->first('npwp') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                <label for="status" class="col-sm-2 control-label">Status</label>

                <div class="col-sm-8">
                 <select class="form-control" name="status">
                    <option value="1">Aktif</option>
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
                <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>

                <div class="col-sm-8">
                  <input id="keterangan" name="keterangan" type="text" class="form-control" placeholder="keterangan" value="{{ old('keterangan') }}">

                  @if ($errors->has('keterangan'))
                      <span class="help-block">
                          <strong>{{ $errors->first('keterangan') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                  <button type="reset" id="reset" class="btn btn-primary"><i class="fa fa-trash-o"></i> Cancel</button>
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