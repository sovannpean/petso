<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::latest()->paginate(50);
        return view('/dashboard/products/index', compact('products'), compact('categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('/dashboard/products/create', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $nameImage = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $nameImage);
    
        $category = Category::firstOrCreate(['name' => $request->input('category_name')]);
    
        $product = new Product([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'detail' => $request->input('detail'),
            'size' => $request->input('size'),
            'images' => $nameImage,
            'category_id' => $category->id,
        ]);
    
        $product->save();
    
        return redirect('/dashboard/products/index')->with('success', 'Product created successfully.');
    }

    public function show(string $id): View
    {
        $products = Product::findOrFail($id);
        $categories = Category::all();
        return view('/dashboard/products/show', compact('products', 'categories'));
    }

    public function edit(string $id)
    {
        $products = Product::findOrFail($id);
        $categories = Category::all();
        return view('/dashboard/products/update', compact('products', 'categories'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $products = Product::findOrFail($id);

        $products->name = $request->input('name');
        $products->price = $request->input('price');
        $products->detail = $request->input('detail');
        $products->size = $request->input('size');
        if ($request->hasFile('images')) {
            $nameImage = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $nameImage);
            $products->image = $nameImage;
        }
        $products->category->name = $request->input('category');
        $products->save();
        return redirect('/dashboard/products/index')->with('success', 'Product updated successfully');
    }

    public function destroy(string $id): RedirectResponse
    {
        Product::destroy($id);
        return redirect('/dashboard/products/index/')->with('success', 'Product deleted successfully.');
    }
}
