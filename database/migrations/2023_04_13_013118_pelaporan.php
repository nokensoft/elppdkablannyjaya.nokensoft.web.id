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
        Schema::create('lppd_pelaporan', function (Blueprint $table) {
            $table->id();
            $table->string('tahun')->nullable();
            
            $table->string('cover')->nullable();
            $table->string('cover_file')->nullable();

            $table->string('babi')->nullable();
            $table->string('babi_file')->nullable();

            $table->string('babii')->nullable();
            $table->string('babii_file')->nullable();

            $table->string('babiii')->nullable();
            $table->string('babiii_file')->nullable();

            $table->string('babiv')->nullable();
            $table->string('babiv_file')->nullable();

            $table->string('babv')->nullable();
            $table->string('babv_file')->nullable();

            $table->string('lampiran')->nullable();
            $table->string('lampiran_file')->nullable();

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
        Schema::dropIfExists('lppd_pelaporan');
    }
};
