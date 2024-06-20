<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'tujuan' => 'required',
            'jumlah_penumpang' => 'required|numeric',
            'jam_berangkat' => 'required',
            'tanggal_berangkat' => 'required|date',
            'nama' => 'required',
        ]);

        // Simpan data ke database
        $booking = new Booking();
        $booking->tujuan = $validatedData['tujuan'];
        $booking->jumlah_penumpang = $validatedData['jumlah_penumpang'];
        $booking->jam_berangkat = $validatedData['jam_berangkat'];
        $booking->tanggal_berangkat = $validatedData['tanggal_berangkat'];
        $booking->nama = $validatedData['nama'];
        $booking->save();

        if ($booking->save()) {
            session()->flash('success', 'Pemesanan Berhasil');
        } else {
            session()->flash('error', 'Pemesanan Gagal');
        }

        // kembali ke form
        return back();
    }
}
