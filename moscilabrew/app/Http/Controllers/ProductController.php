<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
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
    public function viewAddProduct()
    {
        $bean_category_list = Coffee::all()->pluck('bean_category_name')->unique();
        $process_num = 1;
        if (session('process_num')){
            $process_num = session('process_num');

        }
        
        return view('seller/add-product/add-product', [
            'deliveryOptions' => Product::get_delivery_options(),
            'beanCategoryList' => $bean_category_list,
            "process_num" => $process_num
        ]);
    }

    // post to add new product
    public function storeProduct()
    {
        dd("ok");
        
        // $bean_category_list = Coffee::all()->pluck('bean_category_name')->unique();

        // return view('seller/add-product/add-product', [
        //     'deliveryOptions' => Product::get_delivery_options(),
        //     'beanCategoryList' => $bean_category_list
        // ]);
    }
    
    public function addProductProcess(Request $request, $process_num)
    {
        if ($process_num == '1') {
            $new_product = new Coffee;
            
            $new_product->product_name = request('product_name');
            $new_product->bean_category_name = request('bean_category_name');
            $new_product->product_desc = request('product_desc');
            $new_product->jumlah_stok = request('jumlah_stok');
            $new_product->harga_product = request('harga_product');
            
            // request()->session()->put('new_product', $new_product);
            session(['new_product' => $new_product]);
            // dd($new_product);
            return redirect()->back()->with('process_num', 2);
        }
        elseif ($process_num == '2'){
            $new_product = session('new_product');
            $photos = $request->file('product_img');

            // dd($photos);
            
            $new_product->product_img = $photos->store('public');
            $new_product->product_img = str_replace('public/', '', 'storage/' . $new_product->product_img);
            // dd(str_replace("1", "2", "This is number 1"));
            // dd('storage/' . $new_product->product_img);
            // dd($photos->store('public'));
            // dd($new_product->product_img);

            // dd($new_product->product_img);
            $new_product->vendor_id = 1;
            $new_product->save();
            $coffee_id = $new_product->id;

            $request->session()->forget('new_product');
            
            return view('seller.add-product.finish')->with('coffee', Coffee::find($coffee_id));
            // return redirect()->back()->with("message", 'berhasil menambahkan product');
        }
        elseif ($process_num == '3'){
            $new_product = session('new_product');

            dd($new_product);
            dd(request());

            // $new_product->product_name = request('product_name');
            // $new_product->bean_category_name = request('bean_category_name');
            // $new_product->product_desc = request('product_desc');
            // $new_product->jumlah_stok = request('jumlah_stok');
            // $new_product->harga_product = request('harga_product');
            
            // request()->session()->put('new_product', $new_product);
            // session(['new_product' => $new_product]);
            // dd($new_product);
            return redirect()->back()->with('process_num', 4);
        }
        else if ($process_num == '4') {
            $new_product = session('new_product');

            $new_product->product_name = request('product_name');
            // dd($new_product);
            dd(request());
        }
        // dd(request()->session()->get('new_product'));

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
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
