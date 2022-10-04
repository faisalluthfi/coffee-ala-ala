@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Product</h1>
  </div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
  {{session('success')}}
</div>
@endif
  
  <div class="table-responsive col-lg-9">
    <a href="/dashboard/products/create" class="btn btn-primary mb-3">Create New Post</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$product->name}}</td>
          <td>{{$product->category->name}}</td>
          <td>
            <a href={{ route('admin.product.show', $product->id) }} class="badge bg-info"><span data-feather="eye"></span> </a>
            <a href={{route('admin.product.edit',$product->id)}} class="badge bg-warning"><span data-feather="edit"></span> </a>
            <form action={{route('admin.product.destroy',$product->id)}} method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure ?');">
                <span data-feather="x-circle" ></span>
              </button>
            </form>
          {{-- </td> --}}
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection