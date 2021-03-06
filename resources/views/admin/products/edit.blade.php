@extends('layouts.admin')

@section('content')













<div class="container">
  <div class="row">
    
    <div class="form-create col-md-4">
      @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
      <form action="{{ url('admin/product') }}" method="post" enctype="multipart/form-data" class="text-left">
        @csrf
        @method('post')
        <div class="form-group">
          <label>Product Name</label>
          <input type="text" name="name" class="form-control" placeholder="Beans, Flafel ..." value="{{ $product->name }}">
        </div>
        <div class="form-group">
          <label>Product Image</label>
          <input type="file" name="image" class="form-control">
          <label for="">old image :</label>
        <img src='{{ asset("storage/images/$product->image") }}' alt="" height="250px">
        </div>
        <div class="form-group">
          <label>Product Details</label>
          <textarea class="form-control" rows="3" name="details">{{ $product->details }}</textarea>
        </div>
        <div class="form-group">
          <label>Product Price</label>
          <input type="numeric" name="price" class="form-control" placeholder="" value="{{ $product->price }}">
        </div>
        <div class="form-group">
          <label>Product Type</label>
          <select class="form-control" name="type">
            <option value="{{ $product->type }}" selected>Current: {{ $product->type }}</option>
            <option value="sandwich">sandwich</option>
            <option value="dish">dish</option>
            <option value="additions">additions</option>
          </select>
        </div>
        
        <input class="btn btn-primary" type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>









@endsection