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
            <form class="form-horizontal" method="POST" action="{{ route('admin.bayar.nota.penjualan') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('bayar') ? ' has-error' : '' }}">
                    <label for="bayar" class="col-sm-4 control-label">Jumlah Pem.: </label>

                    <div class="col-sm-8">
                      <input class="form-control" type="text" name="bayar" required="">
                      <input type="text" name="kode" required="" value="{{ $sale->kode }}" hidden="">
                      <input type="text" name="id" required="" value="{{ $sale->id }}" hidden="">
                    </div>
                </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-info"><i class="fa fa fa-credit-card"></i> Bayar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </form>
          </div>
      @endisset

      @isset ($order)
        <div class="modal-body">
            <form class="form-horizontal" method="POST" action="{{ route('admin.bayar.nota.pembelian') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('bayar') ? ' has-error' : '' }}">
                    <label for="bayar" class="col-sm-4 control-label">Jumlah Pem.: </label>

                    <div class="col-sm-8">
                      <input class="form-control" type="text" name="bayar" required="">
                      <input type="text" name="kode" required="" value="{{ $order->kode }}" hidden="">
                      <input type="text" name="id" required="" value="{{ $order->id }}" hidden="">
                    </div>
                </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-info"><i class="fa fa fa-credit-card"></i> Bayar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </form>
          </div>
      @endisset
    
  </div>
</div>