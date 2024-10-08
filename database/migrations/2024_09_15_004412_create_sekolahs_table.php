<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->id();
            $table->string('npsn')->nullable();
            $table->string('name');
            $table->char('tahun_berdiri',4);
            $table->char('akreditasi',1);
            $table->string('kategori_keilmuan');
            $table->string('jenjang_sekolah');
            $table->string('jenis_ptn_pts');
            $table->string("address");
            $table->foreignId('country_id')->nullable();
            //$table->string("country_name")->nullable();
            $table->foreignId('province_id')->nullable();
            //$table->string("province_name")->nullable();
            $table->foreignId('city_id')->nullable();
            //$table->string("city_name")->nullable();
            $table->foreignId('district_id')->nullable();
            //$table->string("district_name")->nullable();
            $table->foreignId('village_id')->nullable();
            //$table->string("village_name")->nullable();
            $table->foreignId('dusun_id')->nullable();
             //$table->string("country_name")->nullable();
            $table->string('latittude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('altittude')->nullable();
            $table->string('precision')->nullable();
            $table->char('zip_code', 5)->nullable();
            $table->string("rt")->nullable();
            $table->string("rw")->nullable();
            $table->string('no_telp')->nullable();
            $table->string('no_fax')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolahs');
    }
};
