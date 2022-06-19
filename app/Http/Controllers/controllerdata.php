<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerdata extends Controller{
     public function product(){
         $product = Product::all();
        return view('grid.product', compact('product'));
    }

    public function store(){
        $product = new product;
        $product->nama = $request->input('nama');
        $product->nama = $request->input('nama');
        
    }
}