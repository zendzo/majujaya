@if ($item->penjualan->completed == "1")
    <button type="submit" class="btn btn-xs btn-danger" disabled="">
      <i class="fa fa-fw fa-minus-circle"></i>
    </button>
@else
  <form method="POST" action="{{ route('admin.sales.destroy',$item->id) }}" accept-charset="UTF-8" style="display:inline">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <button type="submit" class="btn btn-xs btn-danger">
      <i class="fa fa-fw fa-minus-circle"></i>
    </button>
  </form>
@endif