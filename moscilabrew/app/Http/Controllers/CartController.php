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
    public static function removeItem(Coffee $coffee)
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

    public function updateQty(){
        // jika item sudah ada dikeranjang tambahkan quantitynya
        $cart = Cart::find(request('cart'));
        $value = request('value');

        if ($value > 1 && $value <= Coffee::find($cart->coffee_id)->jumlah_stok){
            $cart->quantity = $value;
            $cart->total_price = Coffee::find($cart->coffee_id)->harga_product * $cart->quantity;
            $cart->save();
        }

        return redirect()->back();
    }

    public function plusQty(){
        // jika item sudah ada dikeranjang tambahkan quantitynya
        $cart = Cart::find(request('cart'));

        // if ($cart->quantity <= 1){
        //     CartController::removeItem($cart->coffee_id);
        // }else {
        //     $cart->quantity += 1;
        //     $cart->total_price = Coffee::find($cart->coffee_id)->harga_product * $cart->quantity;
        //     $cart->save();
        // }
        $cart->quantity += 1;
        $cart->total_price = Coffee::find($cart->coffee_id)->harga_product * $cart->quantity;
        $cart->save();

        return redirect()->back();
    }

    public function minusQty(){
        // jika item sudah ada dikeranjang tambahkan quantitynya
        $cart = Cart::find(request('cart'));
        
        if ($cart->quantity <= 1){
            CartController::removeItem($cart->coffee_id);
        }else {
            $cart->quantity -= 1;
            $cart->total_price = Coffee::find($cart->coffee_id)->harga_product * $cart->quantity;
            $cart->save();
        }

        return redirect()->back();
    }

    public function showCheckout() {

        $carts = Auth::user()->carts;

        dd($carts);
        // $coffeeBlendData = [];

        // if (!array_key_exists('beans', session('coffeeBlendData'))) {
        //     $coffeeBlendData['beans'] = session('coffeeBlendData');
        //     $coffeeBlendData['blend_vendor'] = Vendor::find($request->vendor_id);
        // }else {
        //     $coffeeBlendData = session('coffeeBlendData');
        // }

        // return view('coffee-blend.confirmation-buy', [
        //     // 'coffeeBlendData' => $coffeeBlendData,
        //     'partners_status_img' => Vendor::allStatusPartner(),
        //     "delivery_address_list" => User::allDeliveryAddress(),
        //     "delivery_address_default" => 'Kos',
        //     "delivery_expedition_default" => 'jnt'
        // ]);

        return view('confirmation-buy');
    }
}
