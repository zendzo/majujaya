@extends('layouts.master')

@section('jsPlugins')
<!-- DataTables -->
<script src="{{ asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable({});
    $('#example2').DataTable({

    });
  });
</script>

@endsection

@section('cssPlugins')
<!-- DataTables -->
<link rel="stylesheet" href=".{{ asset('AdminLTE/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('content')

  @include('gudang.outflow_table_list')
  
@endsection