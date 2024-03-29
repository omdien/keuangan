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
        Schema::create('kros', function (Blueprint $table) {
            $table->id();
            $table->string('kd_kro');
            $table->string('kd_short');
            $table->string('nm_kro');
            $table->bigInteger('jumlah_kro')->default(0);
            $table->foreignId('kegiatan_id');
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
        Schema::dropIfExists('kros');
    }
};
