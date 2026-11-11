<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomingLettersTable extends Migration
{
    public function up()
    {
        // Dilewati jika tabel sudah ada (misalnya dari P3)
        if (Schema::hasTable('incoming_letters')) {
            return;
        }

        Schema::create('incoming_letters', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat');
            $table->date('tanggal');
            $table->string('pengirim');
            $table->string('perihal');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('incoming_letters');
    }
}
