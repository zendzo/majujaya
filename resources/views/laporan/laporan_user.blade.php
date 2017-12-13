@extends('layouts.master')

@section('jsPlugins')
<script>
  function printPage() {
      var css = '@page { size: landscape; }',
      head = document.head || document.getElementsByTagName('head')[0],
      style = document.createElement('style');

      style.type = 'text/css';
      style.media = 'print';

      if (style.styleSheet){
        style.styleSheet.cssText = css;
      } else {
        style.appendChild(document.createTextNode(css));
      }

      head.appendChild(style);
    window.print();
  }
</script>
@endsection

@section('content')
<div class="row">
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> {{ config('app.name') }}
            <small class="pull-right">Date: {{ Date('d/m/Y') }}</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          Data User :
          <address>
            <strong>{{ $user->fullName() }}.</strong><br>
            {{ $user->store->alamat }}<br>
            {{ $user->store->npwp}}<br>
            {{ $user->store->keterangan}}<br>
            {{ $user->phone}}<br>
          </address>
        </div>
        <!-- /.col -->
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
            @forelse ($user->penjualan as $sale)
	            <table class="table table-bordered">
	            <thead style="background: #3c8dbc; text-align: center;">
			      <tr>
			        <th>Kode Nota</th>
			        <th>User</th>
			        <th>Tanggal Penjualan</th>
			        <th>Tanggal Pengiriman</th>
			        {{-- <th>Tanggal Remainder</th> --}}
			        {{-- <th>SMS Remainder</th> --}}
			        {{-- <th>Tipe Penjualan</th> --}}
			        <th>Dari Gudang</th>
			        {{-- <th>Layanan Angkutan</th> --}}
			        {{-- <th>Keterangan</th> --}}
			        <th>Total</th>
			        <th>Pembayaran</th>
			        <th>Sisa Pembayaran</th>
			        @if (Auth::user()->role->id == "1")
			         {{-- <th>Taggihan</th> --}}
			        @endif
			      </tr>
			      </thead>
			      <tbody>
	            	<tr>
			            <td>
			              @if (Auth::user()->role->id == "1")
			                <a href="{{route('admin.proses.transaksi.penjualan',$sale->kode)}}">{{ $sale->kode }}</a>
			              @else
			                <a href="{{route('user.proses.transaksi.penjualan',$sale->kode)}}">{{ $sale->kode }}</a>
			              @endif
			            </td>
			            <td>{{ $sale->user->first_name }}</td>
			            <td>{{ $sale->tanggal_so->format('d/m/Y') }}</td>
			            <td>{{ $sale->tanggal_kirim->format('d/m/Y') }}</td>
			            {{-- <td>{{ $sale->tanggal_remainder->format('d/m/Y') }}</td> --}}
			            {{-- <td>
			              @if ($sale->remainder_sent)
			                <a class="btn btn-info" href="#"><i class="fa fa-fw fa-check"></i></a>
			              @else
			                <a class="btn btn-danger" href="#"><i class="fa fa-fw fa-ban"></i></a>
			              @endif
			            </td> --}}
			            {{-- <td>{{ $sale->type->type }}</td> --}}
			            <td>{{ $sale->gudang->nama }}</td>
			            {{-- <td>{{ $sale->vendor->nama }}</td> --}}
			            {{-- <td>{{ $sale->keterangan }}</td> --}}
			            <td>{{ $sale->sales->sum('total') }}</td>
			            <td>{{ $sale->bayar }}</td>
			            <td>{{ $sale->sales->sum('total') - $sale->bayar }}</td>
			            {{-- send invoice sms --}}
			            @if (Auth::user()->role->id == "1")
			              @if ($sale->bayar === $sale->sales->sum('total'))
			                <td>
			                	<a href="#" class="btn btn-info dissabled" style="width: 100%;">
			                  		<i class="fa fa-fw fa-check-circle-o"></i> LUNAS
			                	</a>
			            	</td>
			              @else
			              {{-- <td>
			                <a href="{{ route('admin.invoice.sms.penjualan', $sale->kode) }}" class="btn btn-info">
			                  <i class="fa fa-fw fa-send"></i>
			                </a>
			                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#smsModalDialog-{{ $sale->id }}">
			                  <i class="fa fa-envelope"></i>
			                </a>
			                <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#paymentModalDialog-{{ $sale->id }}">
			                  <i class="fa fa-credit-card"></i>
			                </a>

			                @include('form_partials.sms_modal_dialog')

			                @include('form_partials.payment_modal_dialog')
			              </td> --}}
			              @endif
			            @endif
			         </tr>
			        </tbody>
			    </table>
			    <table class="table table-striped">
			    	<thead>
			    		<th>Jenis Prod.</th>
			    		<th>Satuan Prod.</th>
			    		<th>Jumlah </th>
			    		<th>Harga</th>
			    		<th>Total</th>
			    	</thead>
			    	<tbody>
			    		@foreach ($sale->sales as $item)
			    			<tr>
			    				<td>({{ $item->product->kode }}) - {{ $item->product->nama }}</td>
			    				<td>({{ $item->satuan->symbol }}) - {{ $item->satuan->nama }}</td>
			    				<td>{{ $item->jumlah }}</td>
			    				<td>{{ $item->harga }}</td>
			    				<td>{{ $item->jumlah * $item->harga }}</td>
			    			</tr>
			    		@endforeach
			    	</tbody>
			    </table>
            @empty
            	{{-- empty expr --}}
            @endforelse
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
        	<button onclick="printPage()" href="#" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
          </button>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
</div>
@endsection