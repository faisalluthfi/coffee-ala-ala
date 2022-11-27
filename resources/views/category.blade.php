@extends('layouts.main')

@section('container')



<div class="row mt-4">
  <div class="col col-md-12 col-sm-12 mb-4">
    <h2 class="text-center">Kategori Produk</h2>
  </div>
  <!-- kategori pertama -->
  @foreach($categories as $category)
  <div class="col-md-4">
    <div class="card mb-4 shadow-sm">
      <a href="/categories/{{$category->slug}}">
        <img src="https://source.unsplash.com/500x400?{{$category->name}}" class="card-img-top" alt="{{$category->name}}">
      </a>
      <div class="card-body">
        <a href="/categories/{{$category->slug}}" class="text-decoration-none">
          <p class="card-text">{{$category->name}}</p>
        </a>
      </div>
    </div>
  </div>
  @endforeach
  <!-- kategori kedua -->
</div>
@endsection