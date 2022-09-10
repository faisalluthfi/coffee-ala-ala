@extends('layouts.main')

@section('container')
<h1 class="mb-3 text-center">{{$title}}</h1>

{{-- <div class="btn-group dropend mb-5">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Sorty By Category
  </button>
  <ul class="dropdown-menu dropdown-menu-dark">
    <!-- Dropdown menu links -->
    @foreach($categories as $category)
    <li><a class="dropdown-item" href="/categories/{{$category->slug}}">{{$category->name}}</a></li>
    @endforeach
  </ul>
</div> --}}

<div class="container">
  <div class="row">
    @foreach ($products as $product)
    <div class="col-md-4 mb-3">
      <div class="card" style="width: 18rem;">
        <img src="https://source.unsplash.com/500x400?{{$product->category->name}}"" class="card-img-top" alt="{{$product->category->name}}">
        <div class="card-body">
          <h5 class="card-title">{{$product->name}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$product->category->name}}</h6>
          <p class="card-text">{{$product->excerpt}}</p>
          <a href="#" class="card-link">{{$product->price}}</a>
          <a href="#" class="card-link">Add to chart</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>


<div class="row">
  <div class="col ms-3">
    <a href="/categories"><button class="btn btn-primary">Back to All Categories</button></a>
  </div>
</div>
{{-- <h2>{{$product->name}}</h2>
<h2>{{$product->category->name}}</h2>
<h2>{{$product->excerpt}}</h2>
<h2>{{$product->price}}</h2>
<h2>{{$product->description}}</h2> --}}




@endsection