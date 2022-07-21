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
        Schema::create('detilsp2ds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('detil_id');
            $table->foreignId('sp2d_id');
            $table->integer('harga_detilsp2d');
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
        Schema::dropIfExists('detilsp2ds');
    }
};
