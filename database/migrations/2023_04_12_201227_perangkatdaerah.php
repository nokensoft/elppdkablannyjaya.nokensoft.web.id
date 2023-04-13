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
        Schema::create('profil_perangkatdaerah', function (Blueprint $table) {
            $table->id();
            $table->string('nama_organisasi');
            $table->string('urusan')->nullable();
            $table->string('rumpun')->nullable();
            $table->string('tipe_kantor')->nullable();
            $table->string('alamat')->nullable();
            $table->string('nama_pimpinan')->nullable();
            $table->string('jumlah_pegawai')->nullable();
            $table->string('status')->nullable();
            $table->string('foto')->nullable();
            
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('profil_perangkatdaerah');
    }
};
