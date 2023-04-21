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
        Schema::create('profildaerah', function (Blueprint $table) {
            $table->id();
            $table->string('pemda_namainstansi')->nullable(); 
            $table->string('pemda_lambang')->nullable(); 
            $table->string('pemda_peta')->nullable(); 

            // KEPALA DAERAH
            $table->string('kepala_nama')->nullable(); 
            $table->string('kepala_nik')->nullable(); 
            $table->string('kepala_tgl_lahir')->nullable(); 
            $table->string('kepala_tgl_pelantikan')->nullable(); 
            $table->string('kepala_no_sk')->nullable(); 
            $table->string('kepala_file_sk')->nullable(); 
            $table->string('kepala_asal_partai')->nullable(); 
            $table->string('kepala_visi_misi')->nullable(); 
            $table->string('kepala_riwayat')->nullable(); 
            $table->string('kepala_foto')->nullable(); 

            // WAKIL KEPALA DAERAH
            $table->string('wakil_nama')->nullable(); 
            $table->string('wakil_nik')->nullable(); 
            $table->string('wakil_tgl_lahir')->nullable(); 
            $table->string('wakil_tgl_pelantikan')->nullable(); 
            $table->string('wakil_no_sk')->nullable(); 
            $table->string('wakil_file_sk')->nullable(); 
            $table->string('wakil_asal_partai')->nullable(); 
            $table->string('wakil_visi_misi')->nullable(); 
            $table->string('wakil_riwayat')->nullable(); 
            $table->string('wakil_foto')->nullable(); 

            // SEKRETARIS DAERAH
            $table->string('sekretaris_nama')->nullable(); 
            $table->string('sekretaris_nik')->nullable(); 
            $table->string('sekretaris_nip')->nullable(); 
            $table->string('sekretaris_telp')->nullable(); 
            $table->string('sekretaris_pangkat')->nullable(); 
            $table->string('sekretaris_golongan')->nullable(); 
            $table->string('sekretaris_tgl_lahir')->nullable(); 
            $table->string('sekretaris_no_sk')->nullable(); 
            $table->string('sekretaris_file_sk')->nullable(); 
            $table->string('sekretaris_tmt')->nullable(); 
            $table->string('sekretaris_foto')->nullable(); 
            
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
        Schema::dropIfExists('profildaerah');
    }
};
