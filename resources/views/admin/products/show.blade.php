@extends('layouts.app')

@section('content')









<div class="container">
  <div class="row flex-column text-center">
    <div class="content">
      <h5>Product Image: </h5>
      <div class="product-image">
        <img src='{{ asset("storage/images/$product->image") }}' alt="{{ $product->name }}" height="200px">
      </div>
    </div>
    <hr>
    <div class="content">
      <h5>Product Name: </h5>
      <h2>{{ $product->name }}</h2>
    </div>
    <hr>
    <div class="content">
      <h5>Product Type: </h5>
      <h2>{{ $product->type }}</h2>
    </div>
    <hr>
    <div class="content">
      <h5>Product Price: </h5>
      <h2>$ {{ $product->price }}</h2>
    </div>
    <hr>
    <div class="content">
      <h5>Product details: </h5>
      <p>{{ $product->details }}</p>
    </div>
  </div>
</div>














@endsection