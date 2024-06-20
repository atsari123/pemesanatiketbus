@extends('layouts.app')

@section('content')

<!-- Book section start -->
 <section class="book py-5" id="book">
      <div class="container">
        <div class="main-text">
          <h1>B<span>ooking</span></h1>
        </div>
        <div class="row">
          <div class="col-md-6 py-3 py-md-0">
            <div class="card">
              <img src="/image/cardbooking.jpg" alt="" />
            </div>
          </div>
          <div class="col-md-6 py-3 py-md-0">
          <form action="{{ route('store.booking') }}" method="POST">
          @csrf
  <select id="tujuan" name="tujuan" class="form-control" required>
    <option value="" disabled selected>Pilih tujuan</option>
    <option value="Pacitan">Pacitan</option>
    <option value="Ponorogo">Ponorogo</option>
    <option value="Jakarta">Jakarta</option>
    <option value="Sidoarjo">Sidoarjo</option>
    <option value="Bandung">Bandung</option>
    <option value="Malang">Malang</option>
    <option value="Yogyakarta">Yogyakarta</option>
    <option value="Semarang">Semarang</option>
    <option value="Kediri">Kediri</option>
    <option value="Surabaya">Surabaya</option>
  </select><br>

    <input type="text" name="jumlah_penumpang" class="form-control" placeholder="Jumlah penumpang" required><br>
    <input type="time" name="jam_berangkat" class="form-control" required><br>
    <input type="date" name="tanggal_berangkat" class="form-control" required><br>
    <textarea name="nama" class="form-control" rows="5" placeholder="Masukkan nama Anda di sini"></textarea><br>
    <input type="submit" value="Book Now" class="submit">
      </div>
    </div>

    @if(session('success'))
    <script>
      alert("Pesanan Anda Berhasil");
      window.location = "/home";
    </script>
    @elseif(session('failed'))
    <script>
      alert("Pesanan Anda Gagal, Silahkan Periksa Kembali");
      window.location = "/book";
    </script>
    @endif
</section>

<!-- Book section end -->

@endsection