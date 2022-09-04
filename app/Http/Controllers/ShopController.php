<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;

class ShopController extends Controller
{
    public function index(Shop $shop)
    {
        return view('shops/index');
    }
}
