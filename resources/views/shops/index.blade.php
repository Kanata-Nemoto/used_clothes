@extends('layouts.app')

@section('content')
    <input id="pac-input" class="controls" type="text" placeholder="Search Box"/>
    <div id="map"></div>
    
    <script>const markerData = @json($shops);</script>
    <script type="module" src="{{ mix('/js/index.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBoqG2pj5dVivX1cB8MWw-Evgh4D402Os&callback=initAutocomplete&libraries=places&v=weekly" defer></script>
@endsection