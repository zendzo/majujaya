@extends('layouts.master')

@section('content')
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        @forelse ($inflow as $item)
          <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$item->nama}}</h3>

              <p>{{ $item->alamat }}</p>
              <p>{{ $item->keterangan }}</p>
            </div>
            <div class="icon">
              <i class="fa fa-fw fa-bank"></i>
            </div>
            <a href="{{ route('admin.gudang.outflow',$item->id) }}" class="small-box-footer">List Barang <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        @empty
          {{-- empty expr --}}
        @endforelse
      </div>
      <!-- /.row -->
@endsection