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
        Schema::create('ikk', function (Blueprint $table) {
            $table->id();
            $table->string('no_ikk')->nullable(); 
            $table->string('urusan')->nullable(); 
            $table->string('ikk')->nullable(); 
            $table->string('rumus')->nullable(); 
            $table->string('ket_jml1')->nullable(); 
            $table->string('jml1')->nullable(); 
            $table->string('ket_jml2')->nullable(); 
            $table->string('jml2')->nullable(); 
            $table->string('capaian_kinerja')->nullable(); 
            $table->string('keterangan')->nullable(); 
            
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
        Schema::dropIfExists('ikk');
    }
};
