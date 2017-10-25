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
            <form class="form-horizontal"  action="{{ route('admin.truck.update',$truck->id) }}" method="POST">
              {{ csrf_field() }}
              {{ method_field('PATCH') }}

              <div class="form-group{{ $errors->has('truck_type_id') ? ' has-error' : '' }}">
                <label for="truck_type_id" class="col-sm-2 control-label">Tipe Truck</label>

                <div class="col-sm-8">
                 <select class="form-control" name="truck_type_id">
                  @foreach( $truck_type as $type )
                    <option value="{{$type->id}}">{{$type->type}}</option>
                  @endforeach
                  </select>

                  @if ($errors->has('truck_type_id'))
                      <span class="help-block">
                          <strong>{{ $errors->first('truck_type_id') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('plat') ? ' has-error' : '' }}">
                <label for="plat" class="col-sm-2 control-label">Plat</label>

                <div class="col-sm-8">
                  <input id="plat" name="plat" type="text" class="form-control" placeholder="plat" value="{{ $truck->plat }}">

                  @if ($errors->has('plat'))
                      <span class="help-block">
                          <strong>{{ $errors->first('plat') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('tanggal_inspeksi') ? ' has-error' : '' }}">
                <label for="tanggal_inspeksi" class="col-sm-2 control-label">Tanggal Inpseksi</label>

                <div class="col-sm-8">
                  <input id="datepicker" name="tanggal_inspeksi" type="text" class="form-control" placeholder="tanggal_inspeksi" value="{{ $truck->tanggal_inspeksi->format('d/m/Y') }}">

                  @if ($errors->has('tanggal_inspeksi'))
                      <span class="help-block">
                          <strong>{{ $errors->first('tanggal_inspeksi') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('pengemudi') ? ' has-error' : '' }}">
                <label for="pengemudi" class="col-sm-2 control-label">Pengemudi</label>

                <div class="col-sm-8">
                  <input id="pengemudi" name="pengemudi" type="text" class="form-control" placeholder="pengemudi" value="{{ $truck->pengemudi }}">

                  @if ($errors->has('pengemudi'))
                      <span class="help-block">
                          <strong>{{ $errors->first('pengemudi') }}</strong>
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
                  <input id="keterangan" name="keterangan" type="text" class="form-control" placeholder="keterangan" value="{{ $truck->keterangan }}">

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