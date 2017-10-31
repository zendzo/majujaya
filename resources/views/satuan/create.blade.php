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
            <form class="form-horizontal"  action="{{ route('admin.satuan.store') }}" method="POST">
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

              <div class="form-group{{ $errors->has('symbol') ? ' has-error' : '' }}">
                <label for="symbol" class="col-sm-2 control-label">Symbol</label>

                <div class="col-sm-8">
                  <input id="symbol" name="symbol" type="text" class="form-control" placeholder="symbol" value="{{ old('symbol') }}">

                  @if ($errors->has('symbol'))
                      <span class="help-block">
                          <strong>{{ $errors->first('symbol') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                <label for="deskripsi" class="col-sm-2 control-label">Deskripsi</label>

                <div class="col-sm-8">
                  <textarea class="form-control" name="deskripsi" value="{{ old('deskripsi') }}" placeholder="Deskripsi"></textarea>

                  @if ($errors->has('deskripsi'))
                      <span class="help-block">
                          <strong>{{ $errors->first('deskripsi') }}</strong>
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

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                  <button type="reset" class="btn btn-primary"><i class="fa fa-trash-o"></i> Cancel</button>
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