<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use \Illuminate\Validation\Rules\PASSWORD;

class UserController extends Controller
{
    /* 
        Cart
    */
    public function showCart(){
        return view('cart');
    }

    /* 
        Daftar Transaksi
    */
    public function showDaftarTransaksi(){
        return view('daftar-transaksi', [
            'transactions' => User::allTransaction()
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
    public function store(Request $request)
    {        
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users,email|email:rfc,dns',
            'password' => [Password::min(8)
                                    ->letters()
                                    ->mixedCase()
                                    ->numbers()
                                    ->symbols()
                                    ->uncompromised()],
            'address' => 'required',
            'phone_number' => 'required|unique:users,phone_number|numeric'
        ]);
        
        User::create($validated);

        return redirect(route('login'))->with($request->session()->flash('success', 'Registration Successfull! Please Login'));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
