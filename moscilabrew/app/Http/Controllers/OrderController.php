<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Coffee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /* 
        Add vendor items to order list
    */
    public function addItemsToOrderList($vendor_id){
        
        $carts = Auth::user()->carts->groupBy('vendor_id')[$vendor_id];

        foreach ($carts as $cart) {
            // jika item sudah ada di order list tidak perlu untuk menambahkan kembali
            if (!Auth::user()->orders->firstWhere('cart_id', $cart->id)) {
                $order = new Order;
                
                $order->cart_id = $cart->id;
                $order->user_id = $cart->user_id;
                $order->vendor_id = $cart->vendor_id;
                
                $order->save();
            }
        }
        

        return redirect()->back();

    }

    /* 
        Remove items to order list 
    */
    public function removeItemsOrderList($vendor_id){

        $orders = Auth::user()->orders->groupBy('vendor_id')[$vendor_id];

        foreach ($orders as $order) {
            $order->delete();
        }
        return redirect()->back();
    }
    
    /* 
        Add to Order List
    */
    public function addToOrderList(Cart $cart){
        // jika item sudah ada di order list tidak perlu untuk menambahkan kembali
        if (!Auth::user()->orders->firstWhere('cart_id', $cart->id)) {
            $order = new Order;
            
            $order->cart_id = $cart->id;
            $order->user_id = $cart->user_id;
            $order->vendor_id = $cart->vendor_id;
            
            $order->save();
        }
        

        return redirect()->back();
    }

    /* 
        Remove Order list Item 
    */
    public static function removeItemOrderList(Cart $cart){
        $orders = Auth::user()->orders;
        // dd($cart->id);
        // dd($orders->firstWhere('cart_id', $cart->id));
        
        if ($orders->firstWhere('cart_id', $cart->id)){
            $orders->firstWhere('cart_id', $cart->id)->delete();
        }

        return redirect()->back();
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
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
