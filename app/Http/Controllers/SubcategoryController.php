<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SubcategoryController extends Controller
{
    public function index(): View
    {
        return view('dashboard.subcategory.index');
    }

    public function create(): View
    {
        $categories = Category::whereNull('parent_id')->get();
        return view('dashboard.subcategory.create', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:category,name',
            'parent_id' => 'required|exists:category,id'
        ]);

        Category::create([
            'name' => $request->input('name'),
            'parent_id' => $request->input('parent_id'),
        ]);

        return redirect()->route('subcategories.index')->with('success', 'Subcategory added successfully!');
    }

    public function show(string $id): View
    {
        $subcategory = Category::with('parent')->findOrFail($id);
        return view('dashboard.subcategory.show', compact('subcategory'));
    }

    public function edit(string $id): View
    {
        $subcategory = Category::findOrFail($id);
        $categories = Category::whereNull('parent_id')->get();
        return view('dashboard.subcategory.edit', compact('subcategory', 'categories'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:category,name,' . $id,
            'parent_id' => 'required|exists:category,id'
        ]);

        $subcategory = Category::findOrFail($id);
        $subcategory->update([
            'name' => $request->input('name'),
            'parent_id' => $request->input('parent_id'),
        ]);

        return redirect()->route('subcategories.index')->with('success', 'Update successful!');
    }

    public function destroy(string $id): RedirectResponse
    {
        Category::destroy($id);
        return redirect()->route('subcategories.index')->with('success', 'Deleted successfully!');
    }
}