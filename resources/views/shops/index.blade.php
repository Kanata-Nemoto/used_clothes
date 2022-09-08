<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>下北古着Map</title>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    </head>
    <body>
        <header>
            <h1>下北古着Map</h1>
            <ul class="menus">
                <li>Map</li>
                <li><a href="/mypage">Mypage</a></li>
            </ul>
        </header>
        <input id="pac-input" class="controls" type="text" placeholder="Search Box"/>
        <div id="map"></div>
        <script>
            const markerData = @json($shops);
        </script>
        <script type="module" src="{{ mix('/js/index.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBoqG2pj5dVivX1cB8MWw-Evgh4D402Os&callback=initAutocomplete&libraries=places&v=weekly" defer></script>
    </body>
</html>

