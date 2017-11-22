<div class="modal fade" id="paymentModalDialog" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pembayaran User : 
          @isset ($sale)
              {{ $sale->user->fullName() }}
          @endisset

          @isset ($order)
              {{ $order->supplier->nama }}
          @endisset

        </h4>
      </div>
      
      @isset ($sale)
        <div class="modal-body">
            <form class="form-horizontal" method="POST" action="{{ route('admin.custome.penjualan.invoice') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('total') ? ' has-error' : '' }}">
                    <label for="kode" class="col-sm-4 control-label">Total Pem.: </label>

                    <div class="col-sm-8">
                      <input class="form-control" type="text" name="total" disabled="" value="{{ $sale->sales->sum('total') }}">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('pembayaran') ? ' has-error' : '' }}">
                    <label for="kode" class="col-sm-4 control-label">Sis Pem.: </label>

                    <div class="col-sm-8">
                      <input class="form-control" type="text" name="sisa" disabled value="{{ $sale->sales->sum('total') - $sale->bayar }}">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('pembayaran') ? ' has-error' : '' }}">
                    <label for="kode" class="col-sm-4 control-label">Jumlah Pem.: </label>

                    <div class="col-sm-8">
                      <input class="form-control" type="text" name="pembayaran" required="">
                    </div>
                </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-info"><i class="fa fa fa-credit-card"></i> Bayar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      @endisset

      @isset ($order)
        <div class="modal-body">
            <form class="form-horizontal" method="POST" action="{{ route('admin.custome.pembelian.invoice') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                    <label for="content" class="col-md-4 control-label">Pesan</label>

                    <div class="col-md-6">
                        <textarea name="content" id="content" class="form-control" cols="30" rows="10" required>Sdr. {{ $order->supplier->nama }} Kd.Nota Pesanan {{ $order->kode }} Adalah Sebesar {{ $order->orders->sum('total') }} Dengan Total Pembayaran Sebesar {{ $order->bayar }} Mohon Segera Lakukan Pengiriman</textarea>

                        @if ($errors->has('content'))
                            <span class="help-block">
                                <strong>{{ $errors->first('content') }}</strong>
                            </span>
                        @endif

                        <input name="supplier_id" value="{{ $order->supplier_id }}" hidden>
                        <input name="kode" value="{{ $order->kode }}" hidden>

                    </div>
                </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-info"><i class="fa fa fa-credit-card"></i> Bayar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      @endisset
    
  </div>
</div>