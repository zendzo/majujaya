<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('kode',10);
            $table->string('penjualan_type_id');
            $table->date('tanggal_so');
            $table->date('tanggal_remainder')->nullable();
            $table->boolean('remainder_sent')->nullable()->default(false);
            $table->date('tanggal_kirim');
            $table->string('gudang_id');
            // $table->string('vendor_id');
            $table->string('keterangan');
            $table->integer('bayar')->nullable();
            $table->boolean('completed')->default(false)->nullable();
            $table->boolean('confirmed_by_admin')->nullable();
            $table->integer('purchased_by')->default(1)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualans');
    }
}
