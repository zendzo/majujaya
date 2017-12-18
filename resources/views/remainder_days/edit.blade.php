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
            <form class="form-horizontal"  action="{{ route('admin.remainder-days.update',$remainder_days->id) }}" method="POST">
              {{ csrf_field() }}
              {{ method_field('PATCH') }}

              <div class="form-group{{ $errors->has('max_days') ? ' has-error' : '' }}">
                <label for="max_days" class="col-sm-2 control-label">Hari : </label>

                <div class="col-sm-8">
                  <input id="max_days" name="max_days" type="text" class="form-control" placeholder="max_days" value="{{ $remainder_days->max_days }}">

                  @if ($errors->has('max_days'))
                      <span class="help-block">
                          <strong>{{ $errors->first('max_days') }}</strong>
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