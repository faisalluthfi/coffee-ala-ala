@extends('layouts.main')


@section('slide')
{{-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active mb-2" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="mb-2" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="mb-2"  aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="overlay-image">
      <img src="assets/images/coffe-slide-4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block ">
        <h5>Coffe Latte</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque porro exercitationem corrupti ad beatae rem facere deleniti repudiandae ea delectus!</p>
      </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="overlay-image">
      <img src="assets/images/coffe-slide-3.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Americano</h5>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, eveniet. Porro quia id maiores vitae eum autem minus nostrum quod.</p>
      </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="overlay-image">
      <img src="assets/images/coffe-slide-4.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-light">Espresso</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem consectetur quibusdam recusandae dolore quas laborum fugiat laboriosam ut, ducimus ipsam?</p>
      </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> --}}

{{-- jumbotron --}}
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Get a <span>different <br></span>coffee<span> experience </span>at <span>coffee ala-ala </span></h1>
   
  </div>
</div>
{{-- end jumbotron --}}


@endsection

@section('container')



<div class="container">
  {{-- info Panel --}}
  <div class="row justify-content-center">
    <div class="col-10 info-panel ">
      <div class="row">
        <div class="col-lg">
          <img src="assets/images/coffee-cup.png" alt="coffecup" class="float-start">
          <h4>Good Taste</h4>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="col-lg">
          <img src="assets/images/services.png" alt="services" class="float-start">
          <h4>Good Service</h4>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="col-lg">
          <img src="assets/images/fast-delivery.png" alt="fastdeliver" class="float-start">
          <h4>Fast Delivery</h4>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
      </div>
    </div>
  </div>
  {{-- end Info Panel --}}


  {{-- First Coffe --}}
  <div class="row firstcoffee">
    <div class="col-lg-6 ml-2">
      <img src="assets/images/coffe-ala-ala.jpg" alt="Coffe" class="img-fluid rounded">
    </div>
    <div class="col-lg-5">
      <h3>Our <span>Coffe</span> Is <span>Good</span></h3>
      <p>Hidupkan harimu dengan secangkir kopi</p>
      <a href="#" class="btn btn-dark tombol">Gallery</a>
    </div>
  </div>
  {{-- end First Coffe --}}

  {{-- fav menu --}}
  <div class="mb-3 mt-5">
    <div class="row">
      <div class="col-12">
        <div class="text-center line-menu ">
          <h3>Our Favorite Menu</h3>
        </div>
      </div>
    </div>
  </div>


  <div class="container px-4 mb-4">
    <div class="row gx-3 fav-menu">
      <div class="col">
        <div class="p-3 text-center menu-1">
          <img src="assets/images/coffe-late.png" alt="">
        <h6> Ala-Ala Coffe Latte</h6>
        <small>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, dolore.</small>
        </div>
      </div>
      <div class="col">
        <div class="p-3 text-center menu-2">
          <img src="assets/images/coffe-americano.png" alt="AmericanoCoffe">
        <h6>Ala-Ala Americano</h6>
        <small> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit, cumque?</small>
        </div>
      </div>
      <div class="col">
        <div class="p-3 text-center menu-3">
          <img src="assets/images/coffe-espresso.png" alt="EspressoCoffe">
        <h6>Ala-Ala Kopi ala</h6>
      <small>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, placeat!</small>
        </div>
      </div>
    </div>
  </div>

  {{-- end fav menu --}}

</div>


    
@endsection