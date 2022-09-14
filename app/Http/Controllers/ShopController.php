<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Favorite;

class ShopController extends Controller
{
    public function index(Shop $shop)
    {
        return view('shops/index')->with(['shops' => $shop->get()]);
    }
    
    public function detail(Shop $shop)
    {
        return view('shops/detail')->with(['shop' => $shop]);
    }
    
    public function mypage()
    {
        $shops = \Auth::user()->favorites()->orderBy('created_at', 'desc')->paginate(10);
        return view('shops/mypage')->with(['shops' => $shops]);
    }
}
