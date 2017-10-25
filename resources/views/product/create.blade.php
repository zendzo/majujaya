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
            <form class="form-horizontal"  action="{{ route('admin.product.store') }}" method="POST">
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

              <div class="form-group{{ $errors->has('product_type_id') ? ' has-error' : '' }}">
                <label for="product_type_id" class="col-sm-2 control-label">Tipe Product</label>

                <div class="col-sm-8">
                 <select class="form-control" name="product_type_id">
                 	@foreach( $product_type as $item )
                 		<option value="{{$item->id}}">{{$item->nama}}</option>
                 	@endforeach
                  </select>

                  @if ($errors->has('product_type_id'))
                      <span class="help-block">
                          <strong>{{ $errors->first('product_type_id') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('kode') ? ' has-error' : '' }}">
                <label for="kode" class="col-sm-2 control-label">Kode</label>

                <div class="col-sm-8">
                  <input id="kode" name="kode" type="text" class="form-control" placeholder="kode" value="{{ old('kode') }}">

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