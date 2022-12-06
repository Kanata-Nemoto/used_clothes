@extends('layouts.app')

@section('content')
    <form action="/search" method="post" class="form-search">
        @csrf
        <select class="form-feature-search" name="feature" class="form-search">
            <option disabled selected value="">選択してください</option>
            @foreach (config('const.features') as $number => $feature)
                <option value="{{ $feature }}" @if($feature == $input_feature) selected @endif>{{ $feature }}</option>
            @endforeach
        </select>
        <button type="submit" class="feature-search-btn">検索</button>
    </form>
    <div id="map"></div>
    
    <script>const markerData = @json($shops);</script>
    <script type="module" src="{{ mix('/js/index.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAEy2ZBniYWTER1gjWopuBuBiguwcPpvo&callback=initAutocomplete&libraries=places&v=weekly" defer></script>
@endsection