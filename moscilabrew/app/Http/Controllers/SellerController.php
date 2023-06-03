<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function dashboard()
    {
        return view('seller/dashboard');
    }
    
    public function discuss()
    {
        return view('seller/discuss');
    }
}
