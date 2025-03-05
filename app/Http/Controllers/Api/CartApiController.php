<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;

class CartApiController extends Controller
{
    public function index()
    {
        $userId = auth()->id();
        if (!$userId) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        $cart = Cart::with('products')->where('user_id', $userId)->first();
        if (!$cart) {
            $cart = Cart::create(['user_id' => $userId]);
        }
        return response()->json([
            'message' => 'Cart retrieved successfully',
            'cart' => $cart
        ], 200);
    }

    /**
     * Add a product to the cart.
     */
    public function addToCart(int $product_id)
    {
        $userId = auth()->id();
        if (!$userId) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $userCart = Cart::where('user_id', $userId)->first();

        if (!$userCart) {
            $userCart = Cart::create(['user_id' => $userId]);
        }

        if ($userCart->products()->where('product_id', $product_id)->exists()) {
            $existingProduct = $userCart->products()->where('product_id', $product_id)->first();
            $currentQuantity = $existingProduct->pivot->quantity;

            $userCart->products()->updateExistingPivot($product_id, ['quantity' => $currentQuantity + 1]);
        } else {
            $userCart->products()->attach($product_id, ['quantity' => 1]);
        }

        return response()->json(['message' => 'Product added to cart successfully'], 200);
    }
}
