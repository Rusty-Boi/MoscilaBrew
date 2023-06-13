<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use App\Models\Coffee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('cart', [
            // 'carts' => Auth::user()->carts,
            // 'carts' => Auth::user()->carts,
            'coffees_id' => Cart::pluck('coffee_id'),
            'quantity' => Cart::pluck('quantity'),            
            'coffees' => Coffee::all()
        ]);
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
    // public function addToCart(Request $request, $vendor_name, Coffee $coffee)
    // {        
    //     $user = Auth::user();
    //     $total_price = $request['quantity'] * $coffee->harga_product; 
    //     $coffee_id = $coffee->id;

    //     // membuat entry baru dalam shopping cart
    //     $cartItem = new Cart;
        
    //     $cartItem->user_id = $user->id;
    //     $cartItem->coffee_id = $coffee_id;
    //     $cartItem->quantity = $request['quantity'];
    //     $cartItem->total_price = $total_price;

    //     $cartItem->save();

    //     return redirect('/catalog')->with('success', 'Success add to cart!');
    // }

    public function addToCart(Request $request, Coffee $coffee)
    {                
        $cart = session()->get('cart', []);
        
        $quantity = (int) $request['quantity'];
        $total_price = $quantity * $coffee->harga_product;

        if (isset($cart[$coffee->vendor->id][$coffee->id])) {
            $cart[$coffee->vendor->id][$coffee->id]['quantity'] += (int) $request['quantity'];
            $cart[$coffee->vendor->id][$coffee->id]['total_price'] += (int) $request['total_price'];
        }
        else{
            $cart[$coffee->vendor->id][$coffee->id] = [
                'quantity' =>  $quantity,
                'coffee_id' => $coffee->id,
                'total_price' => $total_price
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Success add to cart!');
    }

    /* 
        Remove Item
    */
    public function removeItem(Coffee $coffee)
    {
        $cart = session('cart');
        unset($cart[$coffee->id]);
        session()->put('cart', $cart);

        // hapus item di orderlist
        if (isset(session("order_list")[$coffee->vendor->id][$coffee->id])) {
            Order::removeItemOrderList($coffee);
        }

        return redirect()->back();
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
}
