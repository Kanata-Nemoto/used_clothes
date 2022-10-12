@extends('layouts.app')

@section('content')
    <div id="map" class="mypage_map"></div>
    <main id=mypage>
        <h2 class="favorite-title"><i class="fa-solid fa-star"></i>お気に入りリスト</h2>
        <div class="favorite-wrapper">
            @foreach($shops as $shop)   
                <div class="favorite-item">
                    <p class="item-name">{{ $shop->name }}</p>
                    <div class="item-detail"><a class="detail-btn" href=/shops/{{ $shop->id }}>詳細</a></div>
                    <form action="/favorite/mypage" method="post">
                        <input type="hidden" name="shop_id" value="{{$shop->id}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="favorite-btn is-favorite">解除</button>
                    </form>
                </div>
            @endforeach    
        </div>
        <div class="pagination-wrapper">{{ $shops->links() }}</div>
    </main>
    
    <script>var mypageMarkerData = @json($shops);</script>
    <script type="module" src="{{ mix('/js/mypage.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBoqG2pj5dVivX1cB8MWw-Evgh4D402Os&callback=initAutocomplete&libraries=places&v=weekly" defer></script>
@endsection