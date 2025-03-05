<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cart = Cart::where('user_id', Auth::id())->first();
        if ($cart != null) {
            $exsistcart = $cart->products()->get();

            return view('cart.show', compact('exsistcart'));
        } else {
            Cart::create([
                'user_id' => Auth::id(),
            ]);

            return view('cart.show', ['exsistcart' => collect([])]);
        }
    }

    public function addToCart(int $product_id)
    {
        $usercart = Cart::where('user_id', Auth::id())->first();

        if (! $usercart) {
            $usercart = Cart::create(['user_id' => Auth::id()]);
        }

        if ($usercart->products()->where('product_id', $product_id)->exists()) {
            $existingProduct = $usercart->products()->where('product_id', $product_id)->first();
            $currentQuantity = $existingProduct->pivot->quantity;

            $usercart->products()->updateExistingPivot($product_id, ['quantity' => $currentQuantity + 1]);
        } else {
            $usercart->products()->attach($product_id, ['quantity' => 1]);
        }

        return back();
    }
}
