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
    public function search(Request $request){
        // if ($request->ajax()) {
        //     // dd(request('search'));
        // }
        $data = [];
        if ($request->search){
            $data = Coffee::where('product_name', 'like', '%' . $request->search . '%')->get();
        }elseif ($request->search == null) {
            $data = Coffee::all();
        }

        $output = '';
        if (count($data) > 0) {
            foreach ($data as $key => $value) {
                $output .= sprintf('<button type="button"
                class="btn p-0 m-0 text-start w-100 bean_option_btn"
                data-bs-dismiss="modal">
                <input type="number" class="form-control visually-hidden"
                    aria-describedby="helpId" value="%s">
                <div class="container">
                    <div
                        class="row d-flex flex-row p-0 searchResult align-items-center justify-content-start">
                        <div class="col-2 p-0 px-2">
                            <img class="img-fluid h-auto"
                                src="%s"
                                alt="">
                        </div>
                        <div class="col p-2">
                            <h5 class="p-0 m-0">%s
                            </h5>
                        </div>
                    </div>
                </div>
            </button>', $data[$key]['id'], $data[$key]['product_img'], $data[$key]['product_name']);
            }
        }else {
            $output .= 'No result';
        }
        
        return $output;
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
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
            "primary_bean" => "",
            "secondary_bean" => "",
        ]);
        
        $valid = [];

        foreach ($validated as $key => $value) {
            if ($value !== null) {
                $valid[$key] = $value;
            }
        }
        request()->session()->put('coffeeBlendData', $valid);

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
            $coffeeBlendData[$key]['coffee'] = Coffee::find($value);
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
        // dd($request);
        
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
