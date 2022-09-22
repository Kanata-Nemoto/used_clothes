var map;
var marker = [];
var infoWindow = [];

window.initAutocomplete = function () {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 35.66158221363777, lng: 139.66695481969188},  //下北沢駅を中心に指定
    zoom: 18,
    mapTypeId: "roadmap" // 地図のズームを指定
  });
 
 // マーカー毎の処理
  for (var i = 0; i < markerData.length; i++) {
    var markerLatLng = new google.maps.LatLng(markerData[i]['lat'], markerData[i]['lng']); // 緯度経度のデータ作成
    marker[i] = new google.maps.Marker({ // マーカーの追加
      position: markerLatLng, // マーカーを立てる位置を指定
      map: map // マーカーを立てる地図を指定
    });
 
    infoWindow[i] = new google.maps.InfoWindow({ // 吹き出しの追加
      content: '<div class="sample">' + markerData[i]['name'] + '</div>' // 吹き出しに表示する内容
    });
 
    markerEvent(i); // マーカーにクリックイベントを追加
  }
  
  const input = document.getElementById("pac-input");
  const searchBox = new google.maps.places.SearchBox(input);

  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  map.addListener("bounds_changed", () => {
    searchBox.setBounds(map.getBounds());
  });

  let markers = [];
  searchBox.addListener("places_changed", () => {

    const places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }
    
    markers.forEach((marker) => {
      marker.setMap(null);
    });
    markers = [];
    
    const bounds = new google.maps.LatLngBounds();
    places.forEach((place) => {
      if (!place.geometry) {
        console.log("Returned place contains no geometry");
        return;
      }
      const icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25),
      };
     
      markers.push(
        new google.maps.Marker({
          map,
          icon,
          title: place.name,
          position: place.geometry.location,
        })
      );

      if (place.geometry.viewport) {
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    
    map.fitBounds(bounds);
  });
}

function markerEvent(i) {
  marker[i].addListener('mouseover', function() {
    infoWindow[i].open(map, marker[i]);
  });
  marker[i].addListener('mouseout', function() {
    infoWindow[i].close(map, marker[i]);
  });
  marker[i].addListener('click', function() {
    location.replace("/shops/" + markerData[i]['id']);
  });
}
