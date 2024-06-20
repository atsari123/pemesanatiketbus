@extends('layouts.app')

@section('content')

 <!-- section gallery start -->
 <section class="gallery py-5" id="gallery">
      <div class="container">
        <div class="main-txt">
          <h1>G<span>allery</span></h1>
        </div>
        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="image/gallery/gallery1.jpg" alt="" height="230px"/>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="image/gallery/gallery2.jpg" alt="" height="230px"/>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="image/gallery/gallery3.jpg" alt="" height="230px"/>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0 mt-3">
            <div class="card">
              <img src="image/gallery/gallery4.jpg" alt="" height="230px"/>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0 mt-3">
            <div class="card">
              <img src="image/gallery/gallery5.jpg" alt="" height="230px"/>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0 mt-3">
            <div class="card">
              <img src="image/gallery/gallery6.jpg" alt="" height="230px"/>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- section gallery end -->

@endsection