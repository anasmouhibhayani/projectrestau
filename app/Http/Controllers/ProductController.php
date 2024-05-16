<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        // dd($request);
     
        $products = Product::all();

        return view('backoffice.product',[
            'products' => $products
        ]);
    }

    public function products()
    {
        
        $breakfast = Product::where('type','breakfast')->get();
        $lunch = Product::where('type','lunch')->get();
        $dinner = Product::where('type','dinner')->get();
        $drinks = Product::where('type','drinks')->get();
        $dessert = Product::where('type','dessert')->get();
        // dd($breakfast);
        
        return view('frontend.index',[
            'breakfast' => $breakfast,
            'lunch' => $lunch,
            'dinner' => $dinner,
            'drinks' => $drinks,
            'dessert' => $dessert,
        ]);
    }

    public function create()
    {
        return view('backoffice.addproduct');
    }
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'title' => 'required|string',
            'price' => 'required|numeric',
            'desc' => 'required|string',
            'type' => 'required|string',
        ]);

        DB::table('products')->insert([
            'title' => $validatedData['title'],
            'price' => $validatedData['price'],
            'desc' => $validatedData['desc'],
            'type' => $validatedData['type'],
        ]);

        return redirect('/products')->with('success', 'product created successfully');
    }
    public function edit($id)
    {
        $product=Product::find($id);
        return view('backoffice.editproduct',[
            'product'=> $product
        ]);
    }
    public function update(Request $request)
    {
        $product=Product::find($request->id);
        // dd($request);
        $validatedData = $request->validate([
            'title' => 'required|string',
            'price' => 'required|numeric',
            'desc' => 'required|string',
            'type' => 'required|string',
        ]);
        $product->update([
            'title' => $request->title,
            'price' => $request->price,
            'desc' => $request->desc,
            'type' => $request->type,
        ]);

        return redirect('/products')->with('success', 'product created successfully');
    }
    public function destroy($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect('/products');
    }
}
