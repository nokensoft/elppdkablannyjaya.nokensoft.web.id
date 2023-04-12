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
        Schema::create('profil_dprd', function (Blueprint $table) {
            $table->id();
            $table->string('nama_instansi');
            $table->string('jabatan');
            $table->string('nama_lengkap');
            $table->string('nik');
            $table->string('alamat');
            $table->string('ttl');
            $table->string('nama_partai');
            $table->string('pendidikan');
            $table->string('foto');
            $table->string('slug');
            $table->timestamps();
            // $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profil_dprd');
    }
};
