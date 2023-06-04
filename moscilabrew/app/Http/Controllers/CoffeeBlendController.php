<?php

namespace App\Http\Controllers;

use App\Models\CoffeeBlend;
use App\Http\Requests\StoreCoffeeBlendRequest;
use App\Http\Requests\UpdateCoffeeBlendRequest;

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
            'blend_vendors' => CoffeeBlend::allBlendVendors(),
            'partners_status_img' => CoffeeBlend::allStatusPartner()
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
