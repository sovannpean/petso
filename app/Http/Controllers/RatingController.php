<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function rateProduct(Request $request)
    {
        $user = Auth::user();
        $product = Product::find($request->product_id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $rating = Rating::updateOrCreate(
            ['user_id' => $user->id, 'product_id' => $product->id],
            ['rating' => $request->rating, 'review' => $request->review]
        );

        return response()->json(['message' => 'Rating submitted']);
    }
}