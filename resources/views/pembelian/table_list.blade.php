<div class="box box-info">
  <div class="box-header">
    <h3 class="box-title">{{ $page_title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Kode Nota</th>
        <th>Supplier</th>
        <th>Tanggal Penjualan</th>
        <th>Tanggal Pengiriman</th>
        <th>Tanggal Remainder</th>
        <th>SMS Remainder</th>
        {{-- <th>Tipe Penjualan</th> --}}
        <th>Dari Gudang</th>
        {{-- <th>Layanan Angkutan</th> --}}
        {{-- <th>Keterangan</th> --}}
        <th>Total</th>
        <th>Pembayaran</th>
        <th>Sisa Pembayaran</th>
        @if (Auth::user()->role->id == "1")
         <th>Taggihan</th>
        @endif
      </tr>
      </thead>

      <tbody>
        @foreach($orders as $order)
         <tr>
            <td>
              @if (Auth::user()->role->id == "1")
                <a href="{{route('admin.proses.transaksi.pembelian',$order->kode)}}">{{ $order->kode }}</a>
              @else
                <a href="{{route('user.proses.transaksi.penjualan',$order->kode)}}">{{ $order->kode }}</a>
              @endif
            </td>
            <td>{{ $order->supplier->nama }}</td>
            <td>{{ $order->tanggal_po->format('d/m/Y') }}</td>
            <td>{{ $order->tanggal_kirim->format('d/m/Y') }}</td>
            <td>{{ $order->tanggal_remainder->format('d/m/Y') }}</td>
            <td>
              @if ($order->remainder_sent)
                <a class="btn btn-info" href="#"><i class="fa fa-fw fa-check"></i></a>
              @else
                <a class="btn btn-danger" href="#"><i class="fa fa-fw fa-ban"></i></a>
              @endif
            </td>
            {{-- <td>{{ $order->type->type }}</td> --}}
            <td>{{ $order->gudang->nama }}</td>
            {{-- <td>{{ $order->vendor->nama }}</td> --}}
            {{-- <td>{{ $order->keterangan }}</td> --}}
            <td>{{ $order->orders->sum('total') }}</td>
            <td>{{ $order->bayar }}</td>
            <td>{{ $order->orders->sum('total') - $order->bayar }}</td>
            {{-- send invoice sms --}}
            @if (Auth::user()->role->id == "1")
              @if ($order->bayar === $order->orders->sum('total'))
                <td><a href="#" class="btn btn-info dissabled" style="width: 100%;">
                  <i class="fa fa-fw fa-check-circle-o"></i> LUNAS
                </a></td>
              @else
              <td>
                <a href="{{ route('admin.invoice.sms.penjualan', $order->kode) }}" class="btn btn-info">
                  <i class="fa fa-fw fa-send"></i>
                </a>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#smsModalDialog-{{ $order->id }}">
                  <i class="fa fa-envelope"></i>
                </a>
                <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#paymentModalDialog-{{ $order->id }}">
                  <i class="fa fa-credit-card"></i>
                </a>

                @include('form_partials.sms_modal_dialog')

                @include('form_partials.payment_modal_dialog')
              </td>
              @endif
            @endif
         </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->