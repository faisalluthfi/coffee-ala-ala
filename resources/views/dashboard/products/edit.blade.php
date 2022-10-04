@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Product</h1>
</div>


{{-- {{$name}} --}}
<div class="col-lg-8">
  <input name="_method" type="hidden" value="PATCH">
  <form method="post" action="{{route('admin.product.update',$product->id)}}" class="mb-5" enctype="multipart/form-data">
  @method('patch')
    @csrf

    <div class="mb-3">
      <label for="name" class="form-label ">Name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"  name="name" required autofocus
      value="{{old('name',$product->name)}}">
      @error('name')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <select class="form-select" name="category_id">
        @foreach ($categories as $category)
        @if (old('category_id',$product->category_id) == $category->id)

        <option value="{{$category->id}}" selected>{{$category->name}}</option>
        @else
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endif
        @endforeach
    </select>
    </div>

    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"  name="slug" required
      value="{{old('slug',$product->slug)}}">
      @error('slug')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>


    <div class="mb-3">
      <label for="image" class="form-label">Product Image</label>
      
      @if($product->image)
    <img src="{{asset('storage/'.$product->image)}}"class="img-preview img-fluid mb-3 col-sm-5 d-block">
      @else
      <img class="img-preview img-fluid mb-3 col-sm-5">
      @endif
      <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" accept="image/*"
      onchange="previewImage()">
      @error('image')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="excertp" class="form-label">Excerpt</label>
      <input type="text" class="form-control @error('excertp') is-invalid @enderror" id="excertp"  name="excertp" required
      value="{{old('excertp',$product->excertp)}}">
      @error('excertp')
      <div class="invalid-feedback">
        {{ $messaExcerpte }}
      </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="number" min="0.00" max="200000.00" step="1" class="form-control @error('price') is-invalid @enderror" id="price"  name="price" required
      value="{{old('price',$product->price)}}">
      @error('price')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"  name="description" required
      value="{{old('description',$product->description)}}">
      @error('description')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update Post</button>
  </form>
</div>



<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change' ,function(){
        fetch('/dashboard/products/checkSlug?name=' + name.value)
        .then(response => response.json())
        .then(data=>slug.value = data.slug )
    });

    document.addEventListener('trix-file-accept',function(e){
        e.preventDefault(); 
    });


    function previewImage(){
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function (oFRevent){
        imgPreview.src = oFRevent.target.result;
      }

    }
</script>
@endsection