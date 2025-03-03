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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

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
        if ($usercart != NULL) {
            $usercart->products()->attach(
                $product_id,
                ['quantity' => 5]
            );
            dd($usercart->products());
        } else {
            $usercart = Cart::create([
                'user_id' => Auth::id(),
            ]);
            $usercart->products()->attach($product_id, ['quantity' => 5]);
            dd($cart->products());
        }

    }
}
