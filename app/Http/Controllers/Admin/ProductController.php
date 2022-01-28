<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Promotion;
use App\Job;

class ProductController extends Controller
{
    public function index(){
        $products = Product::get();
        return view('admin.admin.product', [
            'products' => $products
        ]);
    }

    public function add()
    {
        return view('admin.admin.addproduct');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.admin.editproduct', [
            'product' => $product
        ]);
    }

    public function store(Request $request)
    {

        $image_name = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('/public/products', $image_name);
        $path = '/storage/products/' . $image_name;

        Product::create([
            'name' => $request->name,
            'product_code' => $request->product_code,
            'price' => $request->price,
            'image' => $path
        ]);

        return redirect()->route('admin.product');
    }

    public function update(Request $request, $id)
    {


        $product = Product::find($id);

        $product->update([
            'name' => $request->name,
            'product_code' => $request->product_code,
            'price' => $request->price,
        ]);

        if ($request->file('image')) {
            $image_name = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/public/products', $image_name);
            $path = '/storage/products/' . $image_name;

            $product->update([
                'image' => $path
            ]);
        }

        return redirect()->route('admin.product');
    }

    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect()->back();
    }

    public function showproduct(){

        $product = Product::all();

        $promotion = Promotion::all();

        $job = Job::all();

        return view('welcome', compact('product', 'promotion','job'));
        
    }
}
