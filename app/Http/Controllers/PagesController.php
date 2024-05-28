<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class PagesController extends Controller
{
    //
    public function productDetail($id)
    {
        $product = Product::find($id);
        $category = Category::all();
        return view('/pages/detailproductPage', ['product' => $product], compact('product', 'category'));
    } 
}
