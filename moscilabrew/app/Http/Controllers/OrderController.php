<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Coffee;
use Illuminate\Http\Request;

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
        
        $order_list = session('order_list');
        
        $order_list[$vendor_id] = session('cart')[$vendor_id];

        session()->put('order_list', $order_list);

        return redirect()->back();

    }

    /* 
        Remove items to order list 
    */
    public function removeItemsOrderList($vendor_id){
        $order_list = session('order_list');
        
        unset($order_list[(int) $vendor_id]);

        session()->put('order_list', $order_list);

        return redirect()->back();
    }

    /* 
        Add to Order List
    */
    public function addToOrderList(Coffee $coffee){
        
        $order_list = session('order_list');
        $cart = session('cart');
        
        $vendor_id = $coffee->vendor->id;
        $coffee_id = $coffee->id;

        $order_list[$vendor_id][$coffee_id] = $cart[$vendor_id][$coffee_id];

        session()->put('order_list', $order_list);

        return redirect()->back();
    }

    /* 
        Remove Order list Item 
    */
    public function removeItemOrderList(Coffee $coffee){
        $order_list = session('order_list');
        
        $vendor_id = $coffee->vendor->id;
        $coffee_id = $coffee->id;
        
        unset($order_list[$vendor_id][$coffee_id]);

        if (empty($order_list[$vendor_id])) {
            unset($order_list[$vendor_id]);
        }

        session()->put('order_list', $order_list);

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
