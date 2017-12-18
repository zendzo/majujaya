@extends('layouts.master')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h4>{{ $page_title }}</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <td>Jumlah Hari SMS Dikirm</td>
                  <td>Actions</td>
                </tr>
                </thead>
                <tbody>
                  @foreach($remainder_days as $item)
                    <tr>
                      <td>{{ $item->max_days }}</td>
                      <!-- button action -->
                      <td width="10%" class="text-center">
                        <a class="btn btn-xs btn-primary" href="{{ route('admin.remainder-days.edit',$item->id) }}">
                          <span class="fa fa-pencil fa-fw"></span>
                        </a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a class="btn btn-success" href="{{ route('admin.remainder-days.create')}}"><span class="fa fa-plus fa-fw"></span>&nbsp;Tambah Baru</a>
            </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection