<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('bookings', function (Blueprint $table) {
        $table->id();
        $table->string('tujuan');
        $table->integer('jumlah_penumpang');
        $table->time('jam_berangkat');
        $table->date('tanggal_berangkat');
        $table->text('nama');
        $table->timestamps();
    });
}
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};