@extends('layouts.app')

@section('content')
    <form action="/search" method="post" class="form-search">
        @csrf
        <select class="form-feature-search" name="feature">
            <option disabled selected value="">選択してください</option>
            <option value="古着初心者おすすめ">古着初心者おすすめ</option>
            <option value="コスパ〇">コスパ〇</option>
            <option value="気軽に買える価格設定">気軽に買える価格設定</option>
            <option value="きれいめな古着">きれいめな古着</option>
            <option value="一点ものが多い">一点ものが多い</option>
            <option value="個性のあるデザイン">個性のあるデザイン</option>
            <option value="派手なデザイン">派手なデザイン</option>
            <option value="カラフル">カラフル</option>
            <option value="店内の雰囲気〇">店内の雰囲気〇</option>
            <option value="若者に人気">若者に人気</option>
            <option value="品揃え多い">品揃え多い</option>
            <option value="リメイク品多い">リメイク品多い</option>
        </select>
        <button type="submit" class="feature-search-btn">検索</button>
    </form>
    <div id="map"></div>
    
    <script>const markerData = @json($shops);</script>
    <script type="module" src="{{ mix('/js/index.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBoqG2pj5dVivX1cB8MWw-Evgh4D402Os&callback=initAutocomplete&libraries=places&v=weekly" defer></script>
@endsection