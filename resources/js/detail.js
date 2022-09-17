var map;
var marker = [];
var infoWindow = [];

window.initAutocomplete = function () {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: detailMarkerData['lat'], lng: detailMarkerData['lng']},  //下北沢駅を中心に指定
    zoom: 18,
    mapTypeId: "roadmap" // 地図のズームを指定
  });
 
 // マーカー毎の処理
  
  var markerLatLng = new google.maps.LatLng({lat: detailMarkerData['lat'], lng: detailMarkerData['lng']}); // 緯度経度のデータ作成
  marker = new google.maps.Marker({ // マーカーの追加
      position: markerLatLng, // マーカーを立てる位置を指定
      map: map // マーカーを立てる地図を指定
  });
 
  infoWindow = new google.maps.InfoWindow({ // 吹き出しの追加
    content: '<div class="sample">' + detailMarkerData['name'] + '</div>' // 吹き出しに表示する内容
  });
}