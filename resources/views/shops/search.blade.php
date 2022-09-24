@extends('layouts.app')

@section('content')
    <form action="/search" method="post" class="form-search">
        @csrf
        <select class="form-feature-search" name="feature" class="form-search">
            <option disabled selected value="">選択してください</option>
            <option value="古着初心者おすすめ" @if("古着初心者おすすめ" == $feature) selected @endif>古着初心者おすすめ</option>
            <option value="コスパ〇" @if("コスパ〇" == $feature) selected @endif>コスパ〇</option>
            <option value="気軽に買える価格設定" @if("気軽に買える価格設定" == $feature) selected @endif>気軽に買える価格設定</option>
            <option value="きれいめな古着" @if("きれいめな古着" == $feature) selected @endif>きれいめな古着</option>
            <option value="一点ものが多い" @if("一点ものが多い" == $feature) selected @endif>一点ものが多い</option>
            <option value="個性のあるデザイン" @if("個性のあるデザイン" == $feature) selected @endif>個性のあるデザイン</option>
            <option value="派手なデザイン" @if("派手なデザイン" == $feature) selected @endif>派手なデザイン</option>
            <option value="カラフル" @if("カラフル" == $feature) selected @endif>カラフル</option>
            <option value="店内の雰囲気〇" @if("店内の雰囲気〇" == $feature) selected @endif>店内の雰囲気〇</option>
            <option value="若者に人気" @if("若者に人気" == $feature) selected @endif>若者に人気</option>
            <option value="品揃え多い" @if("品揃え多い" == $feature) selected @endif>品揃え多い</option>
            <option value="リメイク品多い" @if("リメイク品多い" == $feature) selected @endif>リメイク品多い</option>
        </select>
        <button type="submit" class="feature-search-btn">検索</button>
    </form>
    <div id="map"></div>
    
    <script>const markerData = @json($shops);</script>
    <script type="module" src="{{ mix('/js/index.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBoqG2pj5dVivX1cB8MWw-Evgh4D402Os&callback=initAutocomplete&libraries=places&v=weekly" defer></script>
@endsection