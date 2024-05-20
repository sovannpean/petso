<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $categories = Category::all();
        $products = Product::all();
        return view('dashboard.products.index', compact('products', 'categories'));
    }

    public function create(): View
    {
        $categories = Category::all();
        return view('dashboard.products.create', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'detail' => 'required|string',
            'size' => 'required|string|max:255',
            'weight' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_name' => 'required|string|max:255',
        ]);

        $nameImage = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $nameImage);

        $category = Category::firstOrCreate(['name' => $request->input('category_name')]);

        $price = $this->calculatePrice($request->input('weight'));

        
        $product = new Product([
            'name' => $request->input('name'),
            'price' => $price,
            'detail' => $request->input('detail'),
            'size' => $request->input('size'),
            'weight' => $request->input('weight'),
            'images' => $nameImage,
            'category_id' => $category->id,
        ]);

         //dd($request->all());

        $product->save();

        return redirect()->route('dashboard.products.index')->with('success', 'Product created successfully.');
    }

    public function show(string $id): View
    {
        $products = Product::find($id);
        $categories = Category::all();
        return view('dashboard.products.show', compact('products', 'categories'));
    }

    public function edit(string $id): View
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('dashboard.products.update', compact('product', 'categories'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'detail' => 'required|string',
            'size' => 'required|string|max:255',
            'weight' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_name' => 'required|string|max:255',
        ]);

        $product = Product::findOrFail($id);

        $product->name = $request->input('name');
        $product->detail = $request->input('detail');
        $product->size = $request->input('size');
        $product->weight = (float) $request->input('weight'); 
        
        $product->price = $this->calculatePrice($product->weight);

        if ($request->hasFile('image')) {
            $nameImage = time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images'), $nameImage);
            $product->images = $nameImage;
        }

        $category = Category::firstOrCreate(['name' => $request->input('category_name')]);
        $product->category_id = $category->id;

        // dd($request->all());

        $product->save();

        return redirect()->route('dashboard.products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(string $id): RedirectResponse
    {
        Product::destroy($id);
        return redirect()->route('dashboard.products.index')->with('success', 'Product deleted successfully.');
    }

    private function calculatePrice(float $weight): float
    {
        // Implement your price calculation logic here.
        // For example, let's assume the price is $10 per kg.
        return $weight * 10;
    }

    // show all products to home page
}