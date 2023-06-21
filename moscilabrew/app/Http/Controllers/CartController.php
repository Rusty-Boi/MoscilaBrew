<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use App\Models\Coffee;
use App\Models\History;
use App\Models\DeliveryDetail;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        // dd($coffee->jumlah_stok);
        // dd((int)$request->quantity);
        if ($request->quantity > $coffee->jumlah_stok ){
            return redirect()->back()->with('failed', 'Gagal menambahkan ke keranjang!');
        }else {
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

    public function showCheckout(Request $request) {

        $orders = Auth::user()->orders;
        $vendors = Vendor::all();
        $coffees = Coffee::all();

        $deliveries = DB::table('deliveries')
            ->join('delivery_details', 'deliveries.deliveryDetail_id', '=', 'delivery_details.id')
            ->join('ms_deliveries', 'delivery_details.msDelivery_id', '=', 'ms_deliveries.id')
            ->join('ms_delivery_services', 'delivery_details.msDeliveryService_id', '=', 'ms_delivery_services.id')
            ->select('deliveries.*', 'ms_delivery_services.*', 'ms_deliveries.*')
            ->get()
            ->groupBy('vendor_id');

        // dd($deliveries[]->);
        // dd(DeliveryDetail::find($vendors[0]->deliveries[0]->deliveryDetail_id));
        // dd($vendors[0]->deliveries[0]->deliveryDetail_id);
        // dd($orders[0]->vendor_id);
        // dd(Vendor::find($orders[1]->vendor_id)->deliveries[0]->deliveryDetail->msDeliveryServiceName->service_name);
        // dd(Vendor::find($orders[1]->vendor_id)->deliveries[0]->deliveryDetail->msDeliveryName->delivery_name);
        
        if (count($orders) > 0){
            
            $transaction = new History;
            $transaction->user_id = Auth::user()->id;
            $transaction->category = 'coffees';
            $transaction->save();
            $request->session()->put('transaction', $transaction);
    
            foreach ($orders as $order) {
                $transaction_detail = new TransactionDetail;
                $transaction_detail->history_id = $transaction->id;
                $transaction_detail->vendor_id = $order->vendor_id;
                $transaction_detail->user_id = $order->user_id; 
                $transaction_detail->coffee_id = Cart::find($order->cart_id)->coffee_id;
                $transaction_detail->quantity = Cart::find($order->cart_id)->quantity;
                $transaction_detail->total_price = Cart::find($order->cart_id)->total_price;
                $transaction_detail->save();
            }

            $transaction = session('transaction');
            $transaction->action = 'belum selesai';
            foreach ($transaction->transactionDetails as $transaction_item) {
                $transaction->product_fee += $transaction_item->total_price;
            }
            $transaction->category = 'coffees';
            $transaction->delivery_fee = 20000;
            $transaction->subtotal = $transaction->product_fee + $transaction->delivery_fee;
            // dd($transaction->id);

            $transaction->save();

            
            return view('confirmation-buy', [
                'vendors' => $vendors,
                'coffees' => $coffees,
                'deliveries' => $deliveries,
                'transaction' => $transaction
            ]);
        }

            return redirect()->back();
    }

    public function setDeliveryFee(Request $request){
        dd('ok');
    }

    public function showWaitingPayment($transaction){
        $transaction = History::find(request('transaction'));

        // Auth::user()->orders->truncate();
        // Auth::user()->carts->truncate();

        $transaction->action = "menunggu pembayaran";
        $transaction->save();

        DB::table('carts')->where('user_id', '=', Auth::user()->id)->delete();
        DB::table('orders')->where('user_id', '=', Auth::user()->id)->delete();

        return view('waiting-payment-page', [
            'transaction' => $transaction
        ]);
    }

    public function showWaitingPayment2(){
        $total_harga = request('total_harga');
        return view('waiting-payment-page', [
            'total_harga' => $total_harga
        ]);
    }
}
