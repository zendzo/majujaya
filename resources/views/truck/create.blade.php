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
              <form class="form-horizontal"  action="{{ route('admin.pengguna.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="name" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-8">
                    <input id="name" name="name" type="text" class="form-control" placeholder="first name" value="{{ old('name') }}">

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>


                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                  </div>
                </div>
              </form>

              <!-- box-body -->
            </div>           
          </div>
          <!-- /.box -->
          <!-- form start -->

  </div>
</div>
@endsection