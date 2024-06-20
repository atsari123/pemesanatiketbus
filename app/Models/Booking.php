<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Booking extends Model
{
    use HasFactory;

    // menggunakan tabel jika berbeda dengan nama default
    protected $table = 'bookings';

    protected $fillable = ['tujuan', 'jumlah_penumpang', 'jam_berangkat', 'tanggal_berangkat', 'nama'];
}
