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
        Schema::create('tbl_arsip', function (Blueprint $table) {
            $table->id('id_kantor');
            $table->string('nama_dokumen');
            $table->string('pengirim');
            $table->enum('status', ['dipinjam', 'tersedia']);
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
        Schema::dropIfExists('tbl_arsip');
    }
};
