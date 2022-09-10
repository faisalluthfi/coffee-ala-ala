@extends('layouts.main')

@section('container')
<h1 class="mb-3 text-center">{{$title}}</h1>

<div class="container">
  <div class="row">
    @foreach ($products as $product)
    <div class="col-md-4 mb-3">
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
          
          {{-- <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{ $product->id }}" name="id">
            <input type="hidden" value="{{ $product->name }}" name="name">
            <input type="hidden" value="{{ $product->price }}" name="price">
            <input type="hidden" value="{{ $product->image }}"  name="image">
            <input type="hidden" value="1" name="quantity">
            <button class="px-4 py-2 text-dark bg-blue-800 rounded" type="submit">Add To Cart</button>
        </form> --}}
        </div>
      </div>
    </div>
    @endforeach
    {{-- @endif --}}
  </div>
</div> 
{{-- <h2>{{$product->name}}</h2>
<h2>{{$product->category->name}}</h2>
<h2>{{$product->excerpt}}</h2>
<h2>{{$product->price}}</h2>
<h2>{{$product->description}}</h2> --}}




@endsection