<div class="modal fade" id="smsModalDialog" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Kirim Pesan Ke : 
          @isset ($sale)
              {{ $sale->user->fullName() }} <b>({{ $sale->user->phone }})</b>
          @endisset

          @isset ($order)
              {{ $order->supplier->nama }} <b>({{ $order->supplier->phone }})</b>
          @endisset

        </h4>
      </div>
      
      @isset ($sale)
        <div class="modal-body">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                    <label for="content" class="col-md-4 control-label">Pesan</label>

                    <div class="col-md-6">
                        <textarea name="content" id="content" class="form-control" cols="30" rows="10" required>Sdr. {{ $sale->user->first_name }} Kd.Nota Tanggihan Anda {{ $sale->kode }} Adalah Sebesar {{ $sale->sales->sum('total') }} Dengan Total Pembayaran Sebesar {{ $sale->bayar }} Mohon Segera Lakukan Pembayaran</textarea>

                        @if ($errors->has('content'))
                            <span class="help-block">
                                <strong>{{ $errors->first('content') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-info"><i class="fa fa-envelope"></i> Kirim</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      @endisset

      @isset ($order)
        <div class="modal-body">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
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
                    </div>
                </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-info"><i class="fa fa-envelope"></i> Kirim</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      @endisset
    
  </div>
</div>