<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Producers;



class ProductController extends Controller
{
    public function index()
    {
        $data = Product::get();
        return view('list', compact('data'));
    }

    public function index2()
    {
        $data = Product::select('products.*', 'producers.producerName')
        ->join('producers', 'producers.producerID', '=', 'products.producerID')
        ->get(); // or first();
        return view('list2', compact('data'));
    }

    

    public function add()
    {
        $producers = Producers::get();
        return view('add', compact('producers'));
    }

    public function save(Request $request)
    {
        $product = new Product();
        $product->productID = $request->id;
        $product->productName = $request->name;
        $product->productPrice = $request->price;
        $product->productDetails = $request->details;
        $product->productImage1 = $request->image1;
        $product->producerID = $request->producer;
        $product->save();

        return redirect()->back()->with('success', 'Product Added Successfully');
    }

         

    public function update(Request $request)
    {
        $id = $request->id;
        Product::where('productID', '=', $id)->update([
            'productName'=>$request->name,
            'productPrice'=>$request->price,
            'productDetails'=>$request->details,
            'productImage1'=>$request->image1,
            'producerID'=>$request->producer
        ]);
        return redirect()->back()->with('success', 'Product Updated Successfully');
    }

    public function delete($id)
    {
        Product::where('productID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Product Deleted Successfully');
    }

    public function edit($id)
    {
        $data = Product::where('productID', '=', $id)->first();
        $producers = Producers::get();
        return view('edit', compact('data', 'producers'));
    }
}
