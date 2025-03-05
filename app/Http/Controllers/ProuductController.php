<?php

namespace App\Http\Controllers;

use App\Models\prouduct;
use Illuminate\Http\Request;

class ProuductController extends Controller
{
    public function index()
    {
        $products = prouduct::paginate(3);
        return view('prouducts.index',['products'=>$products]);
    }

    public function create()
    {
        return view('prouducts.create');
    }

    public function store(Request $request)
    {
        $product = new prouduct();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->image = $request->image;
        $product->save();
        return redirect()->route('products.index');
        
    }
    public function edit($id)
    {
   
        
    }
    public function update(Request $request, $id)
    {
    
        
    }
    public function destroy($id)
    {
        prouduct::destroy($id);
        return redirect()->route('products.index');
    }    
}
