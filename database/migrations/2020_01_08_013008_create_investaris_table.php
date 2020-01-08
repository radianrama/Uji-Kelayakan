<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investaris', function (Blueprint $table) {
            $table->string('id_inventaris');
            $table->string('nama');
            $table->string('kondisi');
            $table->string('keterangan');
            $table->float('jumlah');
            $table->string('id_jenis');
            $table->date('tgl_register');
            $table->string('id_ruang');
            $table->string('kode_inventaris');
            $table->string('id_petugas');
            $table->primary('id_inventaris');
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
        Schema::dropIfExists('investaris');
    }
}
