<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\View;

class WishlistController extends Controller
{
    use ValidatesRequests;

    public function index()
    {
        $wishlists = Wishlist::with('product')->get();
        return view('pages.favoritePage', ['wishlists' => $wishlists]);
    }
    public function addWishlist(Request $request, Product $product = null)
    {
        $this->validate($request, [
            'product_id' => 'required',
        ]);

        if (!auth()->check()) {
            return redirect()->back()->with('error', 'You must be logged in to add items to your wishlist.');
        }
        
        $user_id = auth()->user()->id;

        $product_id = $product ? $product->id : $request->product_id;

        $isAlreadyAdded = Wishlist::where('user_id', $user_id)
        ->where('product_id', $product_id)
        ->first();

        if ($isAlreadyAdded) {
            return redirect()->back()->with('error', 'Product already added to favorites');
        }

        $wishlist = new Wishlist();
        $wishlist->product_id = $product_id;
        $wishlist->user_id = $user_id;

        // Save to db
        $wishlist->save();

        return redirect()->back()->with('success', 'Product successfully added to favorites');
    }


    public function delete(Request $request, Product $product = null)
    {
        $this->validate($request, [
            'product_id' => 'required',
        ]);

        $product_id = $product ? $product->id : $request->product_id;

        $wishlist = Wishlist::where('product_id', $product_id)->first();

        if (!$wishlist) {
            return redirect()->back()->with('error', 'Wishlist item not found');
        }

        $wishlist->delete();

        return redirect()->back()->with('success', 'Item removed from favorites');
    }
}