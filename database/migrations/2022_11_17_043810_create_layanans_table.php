<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanans', function (Blueprint $table) {
            $table->id();
            $table->string('no_antrian')->nullable();
            $table->string('id_menu_layanan')->nullable();
            $table->string('id_data_layanan')->nullable();
            $table->string('id_user')->nullable();
            $table->string('akun_klampid')->nullable();
            $table->string('status')->nullable();
            $table->string('id_petugas')->nullable();
            $table->date('tgl_kunjungan')->nullable();
            $table->string('foto_kunjungan')->nullable();
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
        Schema::dropIfExists('layanans');
    }
}
