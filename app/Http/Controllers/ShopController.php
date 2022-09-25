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
    
    public function search(Request $request)
    {
        $input_feature = $request->feature;
        $shops = Shop::where('feature', 'like', "%$input_feature%")->get();
        
        return view('shops/search')->with(['shops' => $shops, 'input_feature' => $input_feature]);
    }
    
    public function detail(Shop $shop)
    {
        return view('shops/detail')->with(['shop' => $shop]);
    }
    
    public function mypage()
    {
        $shops = \Auth::user()->favorite_shops()->orderBy('created_at', 'desc')->paginate(10);
        return view('shops/mypage')->with(['shops' => $shops]);
    }
}
