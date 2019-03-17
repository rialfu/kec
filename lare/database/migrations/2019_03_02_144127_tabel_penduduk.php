<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelPenduduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('nik');
            $table->string('kk');
            $table->string('tempatlahir');
            $table->date('ttl');
            $table->string('jk');
            $table->string('goldar');
            $table->string('agama');
            $table->string('alamat');
            $table->string('perkawinan');
            $table->string('warga');
            $table->string('pekerjaan');
            $table->string('ayah');
            $table->string('ibu');
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('penduduk');
    }
}
