<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use \Illuminate\Validation\Rules\PASSWORD;
use \Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
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
     * Log the user out of the application.
     */
    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect(route('dashboard'));
    }

    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended(route('dashboard'));
        }

        // buat keranjang saat login
        $cart = session()->get('cart', []);
        $order_list = session()->get('order_list', []);
        
        session()->put('cart', $cart);        
        session()->put('order_list', $order_list);
 
        return back()->with('login_failed', 'Incorrect Email or Password!');
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

        return redirect(route('login'))->with('success', 'Registration Successfull! Please Login');
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

    public function editName()
    {
        $validated = request()->validate([
            'name' => 'required|max:255',
        ]);

        $user = Auth::user();
        $user->name = $validated['name'];
        $user->save();

        return redirect()->back()->with('success', 'Name changed successfull!');
    }

    public function editEmail()
    {
        $validated = request()->validate([
            'email' => 'required|unique:users,email|email:rfc,dns'
        ]);
        
        $user = Auth::user();
        $user->email = $validated['email'];
        $user->save();
        return redirect()->back()->with('success', 'Email changed successfull!');
    }

    public function editAddress()
    {
        $validated = request()->validate([
            'address' => 'required|max:255',
        ]);
        
        $user = Auth::user();
        $user->address = $validated['address'];
        $user->save();
        return redirect()->back()->with('success', 'Address changed successfull!');
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
