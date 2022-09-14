<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>下北古着Map</title>
        <script src="https://kit.fontawesome.com/4c09e16d97.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    </head>
    <body>
        <header>
            <h1>下北古着Map</h1>
            <ul class="menus">
                <li><a href="/">Map</a></li>
                <li>Mypage</li>
            </ul>
        </header>
        <main>
        {{ dd($shops) }}
            <h2 class="favorite-title"><i class="fa-light fa-star" style="color: yellow"></i>お気に入りリスト</h2>
            <div class="favorite-wrapper">
                @forEach($shops as $shop)   
                    <div class="favorite">
                        <p>{{ $shop->name }}</p>
                        <a href=/shops/{{ $shop->id }}>詳細</a>
                        <form action="/favorite/mypage" method="post">
                            <input type="hidden" name="shop_id" value="{{$shop->id}}">
                            @csrf
                            @method('delete')
                            <button type="submit">お気に入り解除</button>
                        </form>
                    </div>
                @endforeach    
            </div>
            {{ $shops->links() }}
        </main>
    </body>
</html>