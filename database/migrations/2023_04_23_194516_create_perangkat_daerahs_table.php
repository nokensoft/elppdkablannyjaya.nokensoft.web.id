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
        Schema::create('perangkat_daerahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_organisasi');
            $table->string('urusan')->nullable();
            $table->string('tipe_kantor')->nullable();
            $table->string('alamat')->nullable();
            $table->string('jumlah_pegawai')->nullable();
            $table->string('status')->nullable();

            $table->string('nama_pimpinan')->nullable();
            $table->string('foto_gedung')->nullable();
            $table->string('slug')->nullable();

            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perangkat_daerahs');
    }
};
