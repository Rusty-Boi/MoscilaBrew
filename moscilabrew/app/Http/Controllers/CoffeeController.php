<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\Coffee;
use App\Http\Requests\StoreCoffeeRequest;
use App\Http\Requests\UpdateCoffeeRequest;

class CoffeeController extends Controller
{

    public function showProductPage($vendor_name, Coffee $coffee)
    {
        return view('product-page', [
            'coffee' => $coffee
            // 'coffee' => Coffee::findProductByVendorAndProductId($vendor_id, $product_id)
        ]);
    }

    /* 
        Catalog
    */
    public function showCatalog()
    {
        return view('catalog', [
            'coffees' => Coffee::all(),
            'bean_categories' => Coffee::getBeanCategories(),
            'vendors' => Vendor::all()
            // 'test' => Coffee::all()->where('vendor-id', 'VD0001')->merge(Coffee::getVendors())

        ]);
    }

    /* 
        Vendor Product
    */
    public function showProductsByBeanCat($bean_cat)
    {
        return view('catalog', [
            'coffees' => collect(Coffee::getProductsByBeanCat($bean_cat)),
            'bean_categories' => Coffee::getBeanCategories(),
            'vendors' => Vendor::all(),
            // 'test' => Coffee::all()->where('vendor-id', 'VD0001')->merge(Coffee::getVendors())

        ]);
    }    

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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCoffeeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Coffee $coffee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coffee $coffee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCoffeeRequest $request, Coffee $coffee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coffee $coffee)
    {
        //
    }
}
