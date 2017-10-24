@extends('layouts.master')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header">
              <h4>{{ $page_title }}</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama Depan</th>
                  <th>Nama Belakang</th>
                  <th>email</th>
                  <th>phone</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @if(!is_null($users))
                    @foreach($users as $user)
                     <tr>
                        <td><a href="{{ url('/user/profile',$user->id) }}">{{ $user->first_name }}</a></td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td width="10%" class="text-center">
                          <a class="btn btn-xs btn-info" href="{{ route('admin.pengguna.show',$user->id) }}">
                            <span class="fa fa-info fa-fw"></span>
                          </a>
                          <a class="btn btn-xs btn-primary" href="{{ route('admin.pengguna.edit',$user->id) }}">
                            <span class="fa fa-pencil fa-fw"></span>
                          </a>
                          <form method="POST" action="{{ route('admin.pengguna.destroy',$user->id) }}" accept-charset="UTF-8" style="display:inline">
                            <button type="submit" class="btn btn-xs btn-danger">
                              <span class="fa fa-close fa-fw"></span>
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
              <a class="btn btn-success" href="{{ route('admin.pengguna.create')}}"><span class="fa fa-plus fa-fw"></span>&nbsp;Tambah Baru</a>
            </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection