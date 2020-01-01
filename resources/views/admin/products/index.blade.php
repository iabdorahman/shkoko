@extends('layouts.admin')

@section('table_name','Products')
    
@section('content')


  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xl-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Hover Data Table</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="table" class="table table-striped table-bordered table-hoverd">
              <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Product(s)</th>
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
              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->










@endsection