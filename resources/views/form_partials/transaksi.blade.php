<div class="row">
<div class="col-sm-12">
	<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Transaksi</h3>
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
              <th class="text-center">Harga</th>
            </tr>
            {{-- TRANSAKSI FIELD --}}
            <tr >
              @if (isset($sale->id))
                <form class="form-horizontal" action="{{ route('admin.sales.store') }}" method="POST">
              @elseif(isset($order->id))
                <form class="form-horizontal" action="{{ route('admin.orders.store') }}" method="POST">
              @endif
              
                {{ csrf_field() }}
                <td>
                <select name="product_id" class="form-control">
                  @foreach($products as $product)
                   <option value="{{ $product->id }}">{{ $product->nama }} ({{ $product->kode }})</option>
                  @endforeach
                </select>
              </td>
              <td><input name="jumlah" type="text" class="form-control pull-right"></td>
               <td>
                    <select name="satuan_id" class="form-control">
                      @foreach($satuans as $satuan)
                        <option value="{{ $satuan->id }}">{{ $satuan->nama }} ({{$satuan->symbol}})</option>
                      @endforeach
                   </select>
              </td>
              <td><input name="harga" type="text" class="form-control pull-right"></td>
              
              @empty ($sale->id)
                  <input type="text" name="pembelian_id" id="" value="{{ $order->id }}" hidden="">
              @endempty

              @empty ($order->id)
                  <input type="text" name="penjualan_id" id="" value="{{ $sale->id }}" hidden="">
              @endempty

            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
      
      <!-- box footer -->
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
      <!-- / .box footer -->
  </div>
</div>
</div>