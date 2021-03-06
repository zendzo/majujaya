<div class="row">
<div class="col-sm-12">
	<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">List Items Pembelian</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
      <div class="box-body">
        <table class="table table-bordered">
          <tbody id="field_item">
            <tr id="add_after_me">
              <th class="text-center">Produk</th>
              <th class="text-center">Qty</th>
              <th class="text-center">Satuan</th>
              <th class="text-center" colspan="">Harga</th>
              <th class="text-center" colspan="2">Total</th>
            </tr>
            {{-- LIST ITEMS TRANSAKSI --}}
            @forelse ($order_items as $item)
              <tr class="text-center">
                <td>{{ $item->product->nama }}( {{ $item->product->kode }} )</td>
                <td>{{ $item->jumlah }}</td>
                <td>({{ $item->satuan->symbol }}) {{ $item->satuan->nama }}</td>
                <td>{{ $item->harga }}</td>
                <td>{{ $item->harga * $item->jumlah }}</td>
                {{-- delete button --}}
                <td width="10%" class="text-center">
                  <form method="POST" action="{{ route('admin.orders.destroy',$item->id) }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-xs btn-danger">
                      <i class="fa fa-fw fa-minus-circle"></i>
                    </button>
                  </form>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="4" class="text-center"><h4>Belum Ada Items</h4></td>
              </tr>
            @endforelse
            <tr>
                <td colspan="3"><h4 class="pull-right">Grand Total : </h4></td>
                <td colspan="3"><h4>{{ $order_items->sum('total') }}</h4></td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">

      </div>
  </div>
</div>
</div>