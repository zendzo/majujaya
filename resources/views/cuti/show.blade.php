@extends('layouts.master')

@section('content')
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> PT. BANK NEGARA INDONESA (Persero) Tbk.
            <small class="pull-right">Date: 2/10/2014</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong>Administrator, CUTIOnline.</strong><br>
            Phone: (804) 123-5432<br>
            Email: Admin@administrator.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
            <strong>Sdr. Fitria Maya Sari NPP. P034209</strong><br>
            PT. Bank Negara Inonesia , Tbk<br>
            San Francisco, CA 94107<br>
            <i>Kantor Cabang Tanjungpinang</i><br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>No: TP/10/12/17</b><br>
          <br>
          <b>Hal :</b> Presetujuan Cuti<br>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12">
        <h4><b><u>Permohonan Cuti Saudara Tanggal : 22 September 2017</u></b></h4>
        <p>menunjuk surat diatas dan pada perihal pada pokok pada surat dengan ini kami memberi tahukan hal-hal berikut:</p>
        <ol>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        </ol>
        <p>demikian disampaikan untuk di laksanakan sebagaimana mestinya</p>

        <h5><b>PT. BANK NEGARA INDONESIA (PERSERO) Tbk</b></h5>
        <h5><b>KANTOR CABANG TANJUNGPINANG</b></h5>
        <br>
        <br>
        <h5><u><b>NAMA PIMPINAN</b></u></h5>
        <h5><b>JABATAN</b></h5>     

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
          <button type="button" class="btn btn-warning pull-right" style="margin-right: 5px;"><i class="fa fa-ban"></i> Tolak Permohonan
          </button>
          <button type="button" class="btn btn-success pull-right" style="margin-right: 5px;"><i class="fa fa-check"></i> Terima Permohonan
          </button>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
        </div>
      </div>
    </section>
@endsection