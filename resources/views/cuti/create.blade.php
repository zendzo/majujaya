@extends('layouts.master')

@section('cssPlugins')
<link rel="stylesheet" href="{{ asset('AdminLTE/plugins/timepicker/bootstrap-timepicker.min.css') }}">
@endsection

@section('jsPlugins')
<script src="{{ asset('AdminLTE/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{ asset('AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<script src="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{ asset('AdminLTE/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<script src="{{ asset('AdminLTE/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script>
	$(function(){
		$('#reservation').daterangepicker();
	});
</script>
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{ $page_title }}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
              <div class="form-group">
                  <label for="exampleInputEmail1">Nama Depan</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nama Depan">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Grade / Posisi </label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nama Belakang">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">NPP</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Grade">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Unit Organisasi</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="NPP">
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Minta diperkenankan</label>
                  <label for="exampleInputEmail1">Mengambil Cuti </label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Tahun Masuk">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Selama</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="username">
                </div>
                <!-- Date range -->
              <div class="form-group">
                <label>Terhitung Dari Tanggal - Sampai Dengan Tanggal:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="reservation">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
                <div class="form-group">
                  <label for="exampleInputPassword1">Untuk Masa Tahun</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Keperluan</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat Cuti</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Permohonan Lainya</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Catatan UMC</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Rekomendasi 1</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Rekomendasi 2</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                   <p class="help-block">Keputusan Akan dilakukan setelehan pengajuan cuti di review oleh pihak terkait</p>
                   <p class="help-block">hasil dari keputusan akan di kirim melalui email & SMS setelah dilakukan review pengajuan</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Saya setuju dengan kententuan yang berlaku
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Daftar</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
	</div>
</div>
@endsection
