<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
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
        return view('coffee-blend.index');
    }

    /* 
        Blend Vendors
    */

    public function showBlendVendors()
    {
        return view('coffee-blend.blend-vendors', [
            'blend_vendors' => Vendor::all(),
            'coffee_blend_data' => session('coffee_blend_data'),
            'partners_status_img' => CoffeeBlend::allStatusPartner()
        ]);
    }

    public function showConfirmationCustomBlend(Request $request)
    {
        
        return view('coffee-blend.confirmation-buy', [
            'vendor' => Vendor::find($request['vendor_id']),
            'partners_status_img' => CoffeeBlend::allStatusPartner()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $coffee_blend_data = [
            'primary_ratio' => $request->primary_ratio,
            'base_ratio' => $request->base_ratio,
            'secondary_ratio' => $request->secondary_ratio
        ];   
        return redirect()->route('coffeeBlend.blendVendors')->with('coffee_blend_data', $coffee_blend_data);
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
