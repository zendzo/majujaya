@isset ($sale)
    <div class="modal fade" id="paymentModalDialog-{{ $sale->id }}" role="dialog">
@endisset

@isset ($order)
    <div class="modal fade" id="paymentModalDialog-{{ $order->id }}" role="dialog">
@endisset

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
            <form class="form-horizontal" method="POST" action="{{ route('admin.custome.penjualan.invoice') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('total') ? ' has-error' : '' }}">
                    <label for="kode" class="col-sm-4 control-label">Total Pem.: </label>

                    <div class="col-sm-8">
                      <input class="form-control" type="text" name="total" disabled="" value="{{ $order->orders->sum('total') }}">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('pembayaran') ? ' has-error' : '' }}">
                    <label for="kode" class="col-sm-4 control-label">Sis Pem.: </label>

                    <div class="col-sm-8">
                      <input class="form-control" type="text" name="sisa" disabled value="{{ $order->orders->sum('total') - $order->bayar }}">
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
    
  </div>
</div>