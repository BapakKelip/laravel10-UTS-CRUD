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
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            $table->char('idpesertas',20);
            $table->char('no_pendaftaran',20);
            $table->char('name',50);
            $table->char('tempat_lahir',30);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin',['L','P']);
            $table->char('sarjana',30);
            $table->char('pendidikan_fakultas',50);
            $table->char('pendidikan_universitas',100);
            $table->char('organisasi',100);
            $table->char('keterampilan',100);
            $table->char('alamat',100);
            $table->char('kota',30);
            $table->char('telepon',15);
            $table->char('handphone',15);
            $table->char('email',50);
            $table->primary('idpesertas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesertas');
    }
};
