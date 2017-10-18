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
                  @if(!is_null($stores))
                    @foreach($stores as $store)
                     <tr>
                        <td>{{ $store->nama }}</td>
                        <td>{{ $store->alamat }}</td>
                        <td>{{ $store->npwp }}</td>
                        <td>{{ $store->status }}</td>
                        <td>{{ $store->user->fullName() }}</td>
                        <td>{{ $store->keterangan }}</td>
                        <td>
                          <a class="btn btn-success bnt-xs" href="{{ route('admin.store.edit',$store->id) }}">
                            <span class="fa fa-edit fa-fw"></span>
                          </a>
                          <form action="{{ route('admin.store.destroy',$store->id) }}" method="POST">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button class="btn btn-danger bnt-xs">
                              <span class="fa fa-trash fa-fw"></span>
                            </button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  @endif
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a class="btn btn-success" href="{{ route('admin.store.create')}}"><span class="fa fa-plus fa-fw"></span>&nbsp;Tambah Baru</a>   
            </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection