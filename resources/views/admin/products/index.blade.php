@extends('layouts.app')

@section('content')
















<div class="container">

  <h5>Create new Product:</h5>
  <a class="btn btn-primary" href='{{ url("admin/product/create") }}' role="button">CREATE</a>

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

  <table class="table mt-4">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Product</th>
        <th scope="col">Image</th>
        <th scope="col">Type</th>
        <th scope="col">Price</th>
        <th scope="col">Preview</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $key => $product)
          
        <tr>
          <th scope="row">{{ ++$key }}</th>
          <td>{{ $product->name }}</td>
          <td>{{ $product->image }}</td>
          <td>{{ $product->type }}</td>
          <td>{{ $product->price }}</td>
          <td><a class="btn btn-info btn-sm" href='{{ url("admin/product/$product->id") }}' role="button">Info</a></td>
          <td><form  action='{{ url("admin/product/$product->id/edit") }}' method='post'>
            @method('UPDATE')
            @csrf
              <input class="btn btn-warning btn-sm" type="submit" value='Edit'>
            </form></td>   
          <td><form  action='{{ url("admin/product/$product->id") }}' method='post'>
            @method('DELETE')
            @csrf
              <input class="btn btn-danger btn-sm" type="submit" value='Delete'>
            </form></td>         
        </tr>
  
      @endforeach
    </tbody>
  </table>
</div>










@endsection