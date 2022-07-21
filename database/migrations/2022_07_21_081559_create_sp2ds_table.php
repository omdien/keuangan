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
        Schema::create('sp2ds', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_tagihan');
            $table->string('no_spp');
            $table->string('no_spm');
            $table->string('no_sp2d');
            $table->date('tgl_spp');
            $table->date('tgl_spm');
            $table->date('tgl_sp2d');
            $table->integer('nilai_kotor');
            $table->integer('nilai_bersih');
            $table->string('keterangan_sp2d');
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
        Schema::dropIfExists('sp2ds');
    }
};
