var map;
var marker = [];
var infoWindow = [];

window.initAutocomplete = function () {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 35.66158221363777, lng: 139.66695481969188},  //下北沢駅を中心に指定
    zoom: 17,
    mapTypeId: "roadmap" // 地図のズームを指定
  });
 
 // マーカー毎の処理
  for (var i = 0; i < mypageMarkerData.data.length; i++) {
    var markerLatLng = new google.maps.LatLng(mypageMarkerData.data[i]['lat'], mypageMarkerData.data[i]['lng']); // 緯度経度のデータ作成
    marker[i] = new google.maps.Marker({ // マーカーの追加
      position: markerLatLng, // マーカーを立てる位置を指定
      map: map // マーカーを立てる地図を指定
    });
 
    infoWindow[i] = new google.maps.InfoWindow({ // 吹き出しの追加
      content: '<div class="sample">' + mypageMarkerData.data[i]['name'] + '</div>' // 吹き出しに表示する内容
    });
 
    markerEvent(i); // マーカーにクリックイベントを追加
  }
}

function markerEvent(i) {
  marker[i].addListener('mouseover', function() {
    infoWindow[i].open(map, marker[i]);
  });
  marker[i].addListener('mouseout', function() {
    infoWindow[i].close(map, marker[i]);
  });
  marker[i].addListener('click', function() {
    location.replace("/shops/" + mypageMarkerData.data[i]['id']);
  });
}
