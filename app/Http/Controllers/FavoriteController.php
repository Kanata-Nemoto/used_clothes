<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Favorite;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function store(Request $request) {
        $favorite = new Favorite;
        $favorite->shop_id = $request->shop_id;
        $favorite->user_id = Auth::user()->id;
        $favorite->save();
        
        return redirect()->route('shop.detail', [$request->shop_id]);
    }
    public function destroy(Request $request) {
        $shop = Shop::findOrFail($request->shop_id);
        $shop->favorites()->delete();

        return redirect()->route('shop.detail', [$request->shop_id]);
    }
    public function destroyMypage(Request $request) {
        $shop = Shop::findOrFail($request->shop_id);
        $shop->favorites()->delete();

        return redirect()->route('shop.mypage');
    }
}
