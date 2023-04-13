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
            $table->string('nama_lengkap')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('nik')->nullable();
            $table->string('alamat')->nullable();
            $table->string('ttl')->nullable();
            $table->string('nama_partai')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('foto')->nullable();
            
            $table->string('slug')->nullable();
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
