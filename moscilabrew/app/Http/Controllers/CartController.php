<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
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
        $carts = Auth::user()->carts->groupBy('vendor_id');
        $orders = Auth::user()->orders->groupBy('vendor_id');

        return view('cart', [
            'carts' => $carts,
            'coffees' => Coffee::all(),
            'orders' => $orders,
            'vendors' => Vendor::all(),
            'coffees_id' => Cart::pluck('coffee_id'),
            'quantity' => Cart::pluck('quantity')
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */

    public function addToCart(Request $request, Coffee $coffee)
    {                
        // jika item sudah ada dikeranjang tambahkan quantitynya
        if (Auth::user()->carts->firstWhere('coffee_id', $coffee->id)) {
            $cart = Auth::user()->carts->firstWhere('coffee_id', $coffee->id);         
            $cart->quantity = $cart->quantity + $request->quantity;
            $cart->total_price = $coffee->harga_product * $cart->quantity;   
        }
        // jika tidak ada membuat entry baru dalam shopping cart
        else {
            $cart = new Cart;
            $cart->user_id = Auth::user()->id;
            $cart->vendor_id = $coffee->vendor->id;
            $cart->coffee_id = $coffee->id;
            $cart->quantity = $request->quantity;
            $cart->total_price = $coffee->harga_product * $cart->quantity;
        }      
        
        $cart->save();

        return redirect()->back()->with('success', 'Success add to cart!');
    }

    /* 
        Remove Item
    */
    public function removeItem(Coffee $coffee)
    {
        $carts = Auth::user()->carts;
        
        if ($carts->firstWhere('coffee_id', $coffee->id)){
            // cek apakah cart id ada di order list
            $cart = $carts->firstWhere('coffee_id', $coffee->id);
            
            // hapus cart ketika ada di order list
            if (Auth::user()->orders->firstWhere('cart_id', $cart->id)){
                OrderController::removeItemOrderList($cart);
                // dd(Auth::user()->orders->firstWhere('cart_id', $cart->id));
                // Auth::user()->orders->firstWhere('cart_id', $cart->id);
            }

            $carts->firstWhere('coffee_id', $coffee->id)->delete();
        }else {
            return redirect()->back()->with('failed', 'Gagal menghapus item!');
        }

        return redirect()->back()->with('success', 'Success remove item!');
    }

    public function minusQty(Cart $cart){
        // jika item sudah ada dikeranjang tambahkan quantitynya
        dd(Auth::user()->carts->find($cart->id));
        if (Auth::user()->carts->find($cart->id)) {
            // $cart = Auth::user()->carts->firstWhere('coffee_id', $coffee->id);         
            // $cart->quantity = $cart->quantity + $request->quantity;
            // $cart->total_price = $coffee->harga_product * $cart->quantity;   
            
            // $cart->save();
        }

        return redirect()->back()->with('success', 'Success add to cart!');
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
