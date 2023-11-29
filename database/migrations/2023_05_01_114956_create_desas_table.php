<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('distrik_id')->unsigned()->nullable();

            $table->string('nama_desa')->nullable();
            $table->string('slug')->nullable();

            $table->string('nama_kepala_desa')->nullable();
            $table->string('foto_kepala_desa')->nullable();
            $table->string('alamat')->nullable();
            $table->string('telp')->nullable();
            $table->string('email')->nullable();
            $table->string('foto_kantor')->nullable();
            $table->integer('jumlah_penduduk')->nullable();
            $table->geometry('peta_desa')->nullable();

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
        Schema::dropIfExists('desas');
    }
};
