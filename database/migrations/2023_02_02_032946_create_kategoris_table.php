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
        Schema::create('kategoris', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('deskripsi')->nullable();
            $table->string('katakunci')->nullable();
            $table->string('image')->nullable();
            $table->string('status');
            $table->string('slug');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
           

            $table->timestamps();
            $table->softDeletes();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategoris');
    }
};
