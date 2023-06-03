<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function products(){
            $product1 = new Products();
            $product1->name = 'Yoga mats';
            $product1->price = 10.99;
            $product1->description = 'Yoga mats are actually quite versatile and activities like aerobics and pilates also generally use a yoga mat as part of their routine';
            $product1->save();

            $product2 = new Products();
            $product2->name = 'Activewear';
            $product2->price = 19.99;
            $product2->description = 'Activewear, also called athleisure, is so comfortable, it makes sense why it is so popular';
            $product2->save();
            $products = Products::all();
            return view('products.index', ['products' => $products]);
    }

}
