@extends('layouts.master')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">{{ $page_title }}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Jenis</th>
                  <th>Mulai</th>
                  <th>Berakhir</th>
                  <th>Keperluan</th>
                  <th>Alamat</th>
                  <th>Catatan UMC</th>
                  <th>Rekomendasi 1</th>
                  <th>Rekomendasi 2</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Tahunan</td>
                  <td>September 22, 2017</td>
                  <td>October 4, 2017</td>
                  <td>Liburan Keluarga</td>
                  <td>Jakarta Pusast</td>
                  <td>Tidak Ada</td>
                  <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat fugit, atque ea. Ipsam, optio voluptate dolorum sunt quaerat cupiditate aperiam, iste facere fugit quis nisi amet at, neque dolores suscipit.</td>
                  <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, harum eos distinctio laudantium sed, pariatur id inventore neque est porro, similique impedit maxime et dolorum cum ipsum tempora itaque modi.</td>
                  <td><a class="btn btn-primary btn-xs">Disetujui</a></td>
                </tr>
                <tr>
                  <td>Melahirkan</td>
                  <td>September 22, 2017</td>
                  <td>October 21, 2017</td>
                  <td>Cuti Melahirkan</td>
                  <td>Pekan Baru</td>
                  <td>Tidak Ada</td>
                  <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat fugit, atque ea. Ipsam, optio voluptate dolorum sunt quaerat cupiditate aperiam, iste facere fugit quis nisi amet at, neque dolores suscipit.</td>
                  <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, harum eos distinctio laudantium sed, pariatur id inventore neque est porro, similique impedit maxime et dolorum cum ipsum tempora itaque modi.</td>
                  <td><a class="btn btn-warning btn-xs">Pending</a></td>
                </tr>
                <tr>
                  <td>Umroh</td>
                  <td>September 22, 2017</td>
                  <td>October 04, 2017</td>
                  <td>Cuti Umroh</td>
                  <td>Arab Saudi</td>
                  <td>Tidak Ada</td>
                  <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat fugit, atque ea. Ipsam, optio voluptate dolorum sunt quaerat cupiditate aperiam, iste facere fugit quis nisi amet at, neque dolores suscipit.</td>
                  <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, harum eos distinctio laudantium sed, pariatur id inventore neque est porro, similique impedit maxime et dolorum cum ipsum tempora itaque modi.</td>
                  <td><a class="btn btn-warning btn-xs">Pending</a></td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection