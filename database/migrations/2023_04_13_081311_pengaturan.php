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
        Schema::create('pengaturan', function (Blueprint $table) {
            $table->id();
            $table->string('judul_situs')->nullable();
            $table->string('deskripsi_situs')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('termsconditions')->nullable();
            $table->string('footerinformation')->nullable();
            $table->longText('tentang_aplikasi')->nullable();

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
        Schema::dropIfExists('pengaturan');
    }
};
