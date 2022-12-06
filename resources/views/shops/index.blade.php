@extends('layouts.app')

@section('content')
    <form action="/search" method="post" class="form-search">
        @csrf
        <select class="form-feature-search" name="feature">
            <option disabled selected value="">選択してください</option>
            @foreach (config('const.features') as $number => $feature)
                <option value="{{ $feature }}">{{ $feature }}</option>
            @endforeach
        </select>
        <button type="submit" class="feature-search-btn">検索</button>
    </form>
    <div id="map"></div>
    
    <script>var markerData = @json($shops);</script>
    <script type="module" src="{{ mix('/js/index.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAEy2ZBniYWTER1gjWopuBuBiguwcPpvo&callback=initAutocomplete&libraries=places&v=weekly" defer></script>
@endsection