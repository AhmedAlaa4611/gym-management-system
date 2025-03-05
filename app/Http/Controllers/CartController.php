<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
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
            return view('cart.show', ['exsistcart' => collect([])]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
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

        // return response()->json(['message' => 'Product added to cart successfully']);
        return null;
    }
}
