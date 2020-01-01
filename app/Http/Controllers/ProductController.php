<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all products
        $products = Product::all();
        return view('admin.products.index', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // redirect to create page
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate Create Form
        $newProduct = request()->validate([
            'name' => 'required|max:100',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // mime types and max size: 2mb
            'details' => 'required|max:300',
            'price' => 'required|numeric',
            'type' => 'in:dish,sandwich,additions',
            ]);
        
        $imageName = time().'.'.$request->image->extension(); // image name saved to ignore repeated name "unique_image_name"
        $request->image->move(public_path('storage/images'), $imageName); // save image with new name in folder $images
        // create new product
        $newProduct = new Product;
        $newProduct->name = $request->name;
        $newProduct->image = $imageName; // customized image name
        $newProduct->details = $request->details;
        $newProduct->price = $request->price;
        $newProduct->type = $request->type;
        $newProduct->save();
        return redirect('admin/products')->withSuccessMessage("Product added successfully." );

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate Edit Form
        $updateProduct = request()->validate([
            'name' => 'required|max:100',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // mime types and max size: 2mb
            'details' => 'required|max:300',
            'price' => 'required|numeric',
            'type' => 'in:dish,sandwich,additions',
            ]);
        
        $updateProduct = Product::find($id); // retrive the record to update it.
        $oldImage = $updateProduct->image; // save old image path to delete it when update done successfully.
        $updateProduct->name = $request->name;
        $updateProduct->image = $imageName; // customized image name
        $updateProduct->details = $request->details;
        $updateProduct->price = $request->price;
        $updateProduct->type = $request->type;
        $updateProduct->save();

        // when update done successfully delete the old image.
        if(\File::exists(public_path("storage/image/$oldImage"))){
            \File::delete(public_path("storage/image/$oldImage"));
        }

        return redirect('admin/product')->withSuccessMessage('success', "Product updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteProduct = Product::find($id);
        $productName = $deleteProduct->name;
        $deleteProduct->delete();
        return redirect('admin/product')->withSuccessMessage("Product has been deleted");
    }
}
