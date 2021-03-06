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
                  <td>Nama</td>
                  <td>Type</td>
                  <td>Kode</td>
                  <td>Deskrpsi</td>
                  <td>Status</td>
                  <td>Action</td>
                </tr>
                </thead>
                <tbody>
                  @foreach($data as $item)
                    <tr>
                      <td>{{ $item->nama }}</td>
                      <td>{{ $item->product_type_id }}</td>
                      <td>{{ $item->kode }}</td>
                      <td>{{ $item->deskripsi }}</td>
                      <td>
                          <span class="label label-{{ statusClass($item->status)}}">
                            {{ status($item->status) }}
                          </span>
                      </td>

                      <!-- button action -->
                      <td width="10%" class="text-center">
                        <a class="btn btn-xs btn-info" href="{{ route('admin.product.show',$item->id) }}">
                          <span class="fa fa-info fa-fw"></span>
                        </a>
                        <a class="btn btn-xs btn-primary" href="{{ route('admin.product.edit',$item->id) }}">
                          <span class="fa fa-pencil fa-fw"></span>
                        </a>
                        <form method="POST" action="{{ route('admin.product.destroy',$item->id) }}" accept-charset="UTF-8" style="display:inline">
                          {{ method_field('DELETE') }}
                          {{ csrf_field() }}
                          <button type="submit" class="btn btn-xs btn-danger">
                            <span class="fa fa-close fa-fw"></span>
                          </button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a class="btn btn-success" href="{{ route('admin.product.create')}}"><span class="fa fa-plus fa-fw"></span>&nbsp;Tambah Baru</a>
            </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection