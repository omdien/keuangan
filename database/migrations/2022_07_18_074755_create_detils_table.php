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
        Schema::create('detils', function (Blueprint $table) {
            $table->id();
            $table->string('kd_detil');
            $table->string('nm_detil');
            $table->string('vol_detil');
            $table->integer('harga_detil');
            $table->bigInteger('jumlah_detil');
            $table->foreignId('akun_id');
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
        Schema::dropIfExists('detils');
    }
};
