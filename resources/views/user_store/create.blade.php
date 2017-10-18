@extends('layouts.master')

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
            <form class="form-horizontal"  action="{{ route('user.store.store') }}" method="POST">
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