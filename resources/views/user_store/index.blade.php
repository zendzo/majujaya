@extends('layouts.master')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header">
              <img style="height: 50px;" src="{{ asset('AdminLTE/dist/img/BNI.png') }}">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>NPWP</th>
                  <th>Status</th>
                  <th>Pemilik</th>
                  <th>Keterangan</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($stores as $store)
                     <tr>
                        <td>{{ $store->nama }}</td>
                        <td>{{ $store->alamat }}</td>
                        <td>{{ $store->npwp }}</td>
                        <td>{{ $store->status }}</td>
                        <td>{{ $store->user->first_name }}</td>
                        <td>{{ $store->keterangan }}</td>
                        <td>
                          <a class="btn btn-success bnt-xs" href="{{ route('user.store.edit',$store->id) }}">
                            <span class="fa fa-edit fa-fw"></span>
                          </a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            @if(is_null(Auth::user()->store))
              <div class="box-footer clearfix">
              <a class="btn btn-success" href="{{ route('user.store.create')}}"><span class="fa fa-plus fa-fw"></span>&nbsp;Tambah Baru</a>   
            </div>
            @endif
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection