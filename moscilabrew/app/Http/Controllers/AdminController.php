<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    //

    function index() {
        return view('index', [
            "carousel_item" => Admin::getCarouselItem(),
            "services" => Admin::getServices(),
            'featured_coffee_catalog' => Admin::getFeaturedCoffeeCatalog()
        ]);
    }
}
