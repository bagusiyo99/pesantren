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
         Schema::create('daftar_onlines', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->string('nik');
            $table->string('nama_siswa');
            $table->string('jk');
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->text('gambar');
            $table->text('berkas');

            //Kontak
            $table->string('email')->nullable();
            $table->string('hp')->nullable();

             // Alamat lengkap
            $table->string('alamat')->nullable();

            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('pendidikan_ayah')->nullable();
            $table->string('pendidikan_ibu')->nullable();
            $table->string('nohp_ayah')->nullable();
            $table->string('nohp_ibu')->nullable();
            $table->string('penghasilan_ayah')->nullable();
            $table->string('penghasilan_ibu')->nullable();
            $table->text('file');
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
        Schema::dropIfExists('daftar_onlines');
    }
};
