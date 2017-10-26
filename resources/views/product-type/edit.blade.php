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
            <form class="form-horizontal"  action="{{ route('admin.product-type.update',$productType->id) }}" method="POST">
              {{ csrf_field() }}
              {{ method_field('PATCH') }}

              <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                <label for="nama" class="col-sm-2 control-label">Nama</label>

                <div class="col-sm-8">
                  <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama" value="{{ $productType->nama }}">

                  @if ($errors->has('nama'))
                      <span class="help-block">
                          <strong>{{ $errors->first('nama') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('kode') ? ' has-error' : '' }}">
                <label for="kode" class="col-sm-2 control-label">Kode</label>

                <div class="col-sm-8">
                  <input id="kode" name="kode" type="text" class="form-control" placeholder="kode" value="{{ $productType->kode }}">

                  @if ($errors->has('kode'))
                      <span class="help-block">
                          <strong>{{ $errors->first('kode') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                <label for="deskripsi" class="col-sm-2 control-label">Deskripsi</label>

                <div class="col-sm-8">
                  <textarea class="form-control" name="deskripsi" placeholder="Deskripsi">{{ $productType->deskripsi }}</textarea>

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