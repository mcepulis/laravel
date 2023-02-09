<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function displayProduct() {
        return view('products', [
            'name' => 'Batai',
            'price' => number_format(12, 2)
        ]);
    }

    public function create()
    {
        $product = new Product();
        $product->name = 'apple';
        $product->price = 34.54;
        $product->save();

        dd($product);

    }

}
