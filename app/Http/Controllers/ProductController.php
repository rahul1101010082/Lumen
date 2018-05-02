<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{   

    //show all product
    public function index()
    {
        $product = Product::get()->toArray();
        return response()->json($product); 
    }
    
    // Create Product
    public function addProduct(Request $request)
    {   
        $product = Product::create($request->all());
        return response()->json($product);
       
    }

    // update Product
    public function updateProduct($id , Request $request){

        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->save();

        return response()->json($product);
    }

    //delete Product
    public function deleteProduct($id ){

        $product = Product::find($id);
        $product->delete();

        return response()->json('Removed successfully');
    }

}


