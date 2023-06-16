<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\User;
use App\Models\Coffee;
use App\Models\CoffeeBlend;
use App\Http\Requests\StoreCoffeeBlendRequest;
use App\Http\Requests\UpdateCoffeeBlendRequest;
use Illuminate\Http\Request;

class CoffeeBlendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('coffee-blend.index', [
            'coffees' => Coffee::all()
        ]);
    }

    /* 
        Bean Chooser
    */
    public function beanChooser(){
        // diterima id coffee
        $validated = request()->validate([
            "base_bean" => "required",
        ]);

        request()->session()->put('coffeeBlendData', $validated);

        return redirect()->route('coffeeBlend.create.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $coffeeBlendData = session('coffeeBlendData');

        $request_keys = $request->keys();
        $coffeeBlendData_keys = array_keys($coffeeBlendData);


        for ($i=0; $i < count($coffeeBlendData); $i++) { 
            $coffeeBlendData[$coffeeBlendData_keys[$i]]['ratio'] = $request[$request_keys[$i+2]];
        }

        $request->session()->put('coffeeBlendData', $coffeeBlendData);

        return redirect()->route('coffeeBlend.blendVendors');
    }

    public function createView(){      
        $coffeeBlendData = [];
        
        foreach (session('coffeeBlendData') as $key => $value) {
            if ($value != null){
                $coffeeBlendData[$key]['coffee'] = Coffee::find($value);
            }
        }
    
        request()->session()->put('coffeeBlendData', $coffeeBlendData);

        return view('coffee-blend.create', [
            "coffeeBlendData" => session('coffeeBlendData')
        ]);
    }

    /* 
        Blend Vendors
    */

    public function showBlendVendors()
    {        
        return view('coffee-blend.blend-vendors', [
            'blend_vendors' => Vendor::all(),
            // 'coffee_blend_data' => session('coffeeBlendData'),
            'partners_status_img' => Vendor::allStatusPartner()
        ]);
    }

    public function showConfirmationCustomBlend(Request $request)
    {
        $coffeeBlendData = [];

        if (!array_key_exists('beans', session('coffeeBlendData'))) {
            $coffeeBlendData['beans'] = session('coffeeBlendData');
            $coffeeBlendData['blend_vendor'] = Vendor::find($request->vendor_id);
        }else {
            $coffeeBlendData = session('coffeeBlendData');
        }
        
        $request->session()->put('coffeeBlendData', $coffeeBlendData);

        return view('coffee-blend.confirmation-buy', [
            'coffeeBlendData' => $coffeeBlendData,
            'partners_status_img' => Vendor::allStatusPartner(),
            "delivery_address_list" => User::allDeliveryAddress(),
            "delivery_address_default" => 'Kos',
            "delivery_expedition_default" => 'jnt'
        ]);
    }

    /* 
        Buy
    */
    public function buy(Request $request){
        dd($request);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCoffeeBlendRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CoffeeBlend $coffeeBlend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CoffeeBlend $coffeeBlend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCoffeeBlendRequest $request, CoffeeBlend $coffeeBlend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CoffeeBlend $coffeeBlend)
    {
        //
    }
}
