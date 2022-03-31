<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Session;

class ProductController extends Controller
{
    public function create()
    {
        return view('admin.material.create');
    }
    public function store(Request $request)
    {
        $products= new Product;
        $products->name=$request->name;
        $products->date=$request->date;
        $products->quantity=$request->quantity;
        $products->price=$request->price;
        $products->stock_dept=$request->stock_dept;
        $products->others=$request->others;
        $products->category=$request->category;
        $products->save();
        return redirect()->route('index')->with(Session::flash('success','Data has been saved Sucessfully'));

    }
    public function index()
    {
        $products = Product::get();
        return view('admin.material.index',compact('products'));
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.material.edit',compact('product'));
    }
    public function update(Request $request ,$id)
    {

        $product= Product::find($id);
        $product->name = $request->name;
        $product->date = $request->date;
        $product->quantity= $request->quantity;
        $product->price = $request->price;
        $product->stock_dept= $request->stock_dept;
        $product->others = $request->others;
        $product->category = $request->category;
        $product->save();
        return  redirect()->route('index')->with('success', 'Data has been updated successfully!');
    }
    public function delete($id)
    {
        Product::where('id',$id)->delete();
        return  redirect()->route('index')->with(Session::flash ('danger','Data has been deleted successfully'));

    }

}
