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
        Schema::create('ikks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->nullable();
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
            $table->enum('status',['review','revisi','approved'])->default('review')->nullable();
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
        Schema::dropIfExists('ikks');
    }
};
