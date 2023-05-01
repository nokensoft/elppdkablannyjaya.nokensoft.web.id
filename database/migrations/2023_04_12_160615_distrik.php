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
        Schema::create('profil_distrik', function (Blueprint $table) {
            $table->id();
            $table->string('nama_distrik');
            $table->string('ibu_kota_distrik');
            $table->string('nama_kepala_distrik')->nullable();
            $table->string('foto_kepala_distrik')->nullable();
            $table->string('alamat')->nullable();
            $table->string('telp')->nullable();
            $table->string('email')->nullable();
            $table->string('foto_kantor')->nullable();
            
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
        Schema::dropIfExists('profil_distrik');
    }
};
