<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function product()
    {
        return view('product');
    }

    public function addproduct(Request $request)
    {
       $request->validate(
            [
            'name'=> 'required|unique:product',
            'price'=> 'required',
            ],

            [
                'name.required'=>'Name is Required',
                'name.unique'=>'product is already exist',
                'price.required'=>'Price is Require',
                
            ],
        
        );

        $product = new Product();
        $product->name=$request->name;
        $product->price=$request->price;
        $product->save();
    }
}
