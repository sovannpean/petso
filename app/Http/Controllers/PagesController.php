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
        $product = Product::with('ratings.user')->findOrFail($id);
        $category = Category::all();
        return view('/pages/detailproductPage', ['product' => $product], compact('product', 'category'));
    }

    // shop folder
    public function shop() {
        $categories = Category::all();
        $categories = Category::with('subcategories')->get();        
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('pages.shops.shop',compact('products'), compact('categories'));
    }

    // Dog folder
    public function dogIndex() {
        $products = Product::whereHas('category', function($query) {
            $query->where('name', 'dog');
        })->get();

        return view('pages.dogs.allProduct', compact('products'));
    }

    // cat section
    public function catIndex() {
        $products = Product::whereHas('category', function($query) {
            $query->where('name', 'cat');
        })->get();

        return view('pages.cats.allProduct', compact('products'));
    }
}