@extends('layouts.app')

@section('content')
    <main id=mypage>
        <h2 class="favorite-title"><i class="fa-solid fa-star" style="color: yellow"></i>お気に入りリスト</h2>
        <div class="favorite-wrapper">
            @forEach($shops as $shop)   
                <div class="favorite-item">
                    <p class="item-name">{{ $shop->name }}</p>
                    <a class="item-detail" href=/shops/{{ $shop->id }}>詳細</a>
                    <form class="favorite-btn" action="/favorite/mypage" method="post">
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
@endsection