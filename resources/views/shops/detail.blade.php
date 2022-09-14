<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>下北古着Map</title>
        <script src="https://kit.fontawesome.com/4c09e16d97.js" crossorigin="anonymous"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    </head>
    <body>
        <header>
            <h1>下北古着Map</h1>
            <ul class="menus">
                <li><a href="/">Map</a></li>
                <li><a href="/mypage">Mypage</a></li>
            </ul>
        </header>
        <div id="map" class="detail_map"></div>
        <main id="detail">
            <ul>
                <li class="shop_name">店名：{{ $shop->name }}</li>
                <li class="business_hours">営業時間：{{ $shop->business_hours }}</li>
                <li class="shop_address">住所：{{ $shop->address }}</li>
                <li class="shop_phone">電話番号：{{ $shop->phone_number }}</li>
                <li class="price_range">価格帯：{{ $shop->price_range }}</li>
                <li class="shop_feature">特徴：{{ $shop->feature }}</li>
                <li class="shop_instagram"><a href="{{ $shop->instagram }}"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
            <div class="shop-control">
                @if (Auth::check())
                    @if (Auth::user()->favorites()->where('shop_id', $shop->id)->exists())
                        <form action="/favorite" method="post">
                            <input type="hidden" name="shop_id" value="{{$shop->id}}">
                            @csrf
                            @method('delete')
                            <button type="submit">お気に入り解除</button>
                        </form>
                        @else
                        <form action="{{ action('FavoriteController@store') }}" method="post">
                            @csrf
                            <input type="hidden" name="shop_id" value="{{$shop->id}}">
                            <button type="submit">お気に入り登録</button>
                        </form>
                    @endif
                @else
                    <p>お気に入り登録するに<a href="/login">ログイン</a>が必要です</p>
                @endif
            </div>
        </main>
        <script>
            const detailMarkerData = @json($shop);
        </script>
        <script type="module" src="{{ mix('/js/detail.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBoqG2pj5dVivX1cB8MWw-Evgh4D402Os&callback=initAutocomplete&libraries=places&v=weekly" defer></script>
    </body>
</html>

