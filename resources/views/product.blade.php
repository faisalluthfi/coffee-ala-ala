@extends('layouts.main')

@section('container')
  <div class="container mb-5">
    <div class="row detail-product">
      <div class="col-md-5">
        @if ($product->image)
          <div style="max-height: 350px; overflow:hidden;">
            <img src="{{ url($product->image) }}" alt="{{ $product->category->name }}"
              class="img-fluid shadow p-3 mb-5 bg-body rounded">
          </div>
        @else
          <img src="https://source.unsplash.com/400x500?{{ $product->category->name }}" class="img-fluid rounded "
            alt="{{ $product->category->name }}">
        @endif
      </div>
      <div class="col-md-7  rounded detail-tulisan">
        <h2 class="mt-2">{{ $product->name }}</h2>
        <small>{{ $product->category->name }}</small>
        <div class="d-flex">
          <small><i class="bi bi-star-fill"></i></small>
          <small><i class="bi bi-star-fill"></i></small>
          <small><i class="bi bi-star-fill"></i></small>
          <small><i class="bi bi-star-fill"></i></small>
          <small><i class="bi bi-star-fill"></i></small>
        </div>
        <p class="price">Rp. {{ $product->price }}</p>
        <p>{{ $product->description }}</p>
        <button class="button__checkout">
          <span class="button__text">
            <span>C</span><span>h</span>e</span><span>c</span><span>k</span><span>
          </span><span>O</span><span>u</span><span>t</span>
          </span>
          <svg class="button__svg" role="presentational" viewBox="0 0 600 600">
            <defs>
              <clipPath id="myClip">
                <rect x="0" y="0" width="100%" height="50%" />
              </clipPath>
            </defs>
            <g clip-path="url(#myClip)">
              <g id="money">
                <path
                  d="M441.9,116.54h-162c-4.66,0-8.49,4.34-8.62,9.83l.85,278.17,178.37,2V126.37C450.38,120.89,446.56,116.52,441.9,116.54Z"
                  fill="#699e64" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                <path
                  d="M424.73,165.49c-10-2.53-17.38-12-17.68-24H316.44c-.09,11.58-7,21.53-16.62,23.94-3.24.92-5.54,4.29-5.62,8.21V376.54H430.1V173.71C430.15,169.83,427.93,166.43,424.73,165.49Z"
                  fill="#699e64" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
              </g>
              <g id="creditcard">
                <path
                  d="M372.12,181.59H210.9c-4.64,0-8.45,4.34-8.58,9.83l.85,278.17,177.49,2V191.42C380.55,185.94,376.75,181.57,372.12,181.59Z"
                  fill="#a76fe2" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                <path
                  d="M347.55,261.85H332.22c-3.73,0-6.76-3.58-6.76-8v-35.2c0-4.42,3-8,6.76-8h15.33c3.73,0,6.76,3.58,6.76,8v35.2C354.31,258.27,351.28,261.85,347.55,261.85Z"
                  fill="#ffdc67" />
                <path d="M249.73,183.76h28.85v274.8H249.73Z" fill="#323c44" />
              </g>
            </g>
            <g id="wallet">
              <path
                d="M478,288.23h-337A28.93,28.93,0,0,0,112,317.14V546.2a29,29,0,0,0,28.94,28.95H478a29,29,0,0,0,28.95-28.94h0v-229A29,29,0,0,0,478,288.23Z"
                fill="#a4bdc1" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
              <path
                d="M512.83,382.71H416.71a28.93,28.93,0,0,0-28.95,28.94h0V467.8a29,29,0,0,0,28.95,28.95h96.12a19.31,19.31,0,0,0,19.3-19.3V402a19.3,19.3,0,0,0-19.3-19.3Z"
                fill="#a4bdc1" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
              <path d="M451.46,435.79v7.88a14.48,14.48,0,1,1-29,0v-7.9a14.48,14.48,0,0,1,29,0Z" fill="#a4bdc1"
                stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
              <path
                d="M147.87,541.93V320.84c-.05-13.2,8.25-21.51,21.62-24.27a42.71,42.71,0,0,1,7.14-1.32l-29.36-.63a67.77,67.77,0,0,0-9.13.45c-13.37,2.75-20.32,12.57-20.27,25.77l.38,221.24c-1.57,15.44,8.15,27.08,25.34,26.1l33-.19c-15.9,0-28.78-10.58-28.76-25.93Z"
                fill="#7b8f91" />
              <path d="M148.16,343.22a6,6,0,0,0-6,6v92a6,6,0,0,0,12,0v-92A6,6,0,0,0,148.16,343.22Z" fill="#323c44" />
            </g>

          </svg>
        </button>
        <div class="frame mt-3 rounded">
          <button class="custom-btn btn-5"><span>Read More</span></button>
        </div>
      </div>
    </div>
  </div>
  

  <div class="col-lg-12 line-menu mb-4">
      <h1 class="text-center">Other Menu</h1>
  </div>

  <section class="other-product">
    <div class="container">
      <div class="row">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            @foreach ($products as $product)
            
              <div class="col-md-4 mb-2">
                <div class="card" >
                  <div class="position-absolute bg-dark p-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/categories/{{$product->category->slug}}" class="text-white text-decoration-none">{{$product->category->name}}</a></div>
                  @if ($product->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{url($product->image)}}" alt="{{$product->category->name}}" class="img-fluid">      
                    </div>
                  @else
                  <img src="https://source.unsplash.com/500x400?{{$product->category->name}}" class="card-img-top" alt="{{$product->category->name}}">
                  @endif
                  <div class="card-body">
                    <h5 class="card-title text-decoration-none"><a href="/products/{{$product->name}}"  class="text-decoration-none text-dark">{{ $product->name }}</a></h5>
                    <p class="card-text">{{ $product->excerpt }}</p>
                    <p class="card-text">Rp.{{ $product->price }}</p>
                    <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                  </div>
                </div>
              </div>
            @endforeach
           
         </div>
         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>
         <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </section>
  <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
  </script>
@endsection
