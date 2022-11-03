var map;
var marker = [];
var infoWindow = [];

window.initAutocomplete = function () {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 35.66158221363777, lng: 139.66695481969188},  //下北沢駅を中心に指定
    zoom: 17,
    mapTypeId: "roadmap" // 地図のズームを指定
  });
  
  if (navigator.geolocation) {
    // 現在地を取得
    navigator.geolocation.getCurrentPosition(
      // 取得成功した場合
      function(position) {
        // 緯度・経度を変数に格納
        var currentLatLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
        //　マップにマーカーを表示する
        var currentMarker = new google.maps.Marker({
          map : map,             // 対象の地図オブジェクト
          position : currentLatLng,   // 緯度・経度
          icon: {
            url: '../image/current_position_icon.png',    // マーカー画像を指定
            scaledSize: new google.maps.Size(50, 60)
          }
        });
      },
      // 取得失敗した場合
      function(error) {
        // エラーメッセージを表示
        switch(error.code) {
          case 1: // PERMISSION_DENIED
            alert("位置情報の利用が許可されていません");
            break;
          case 2: // POSITION_UNAVAILABLE
            alert("現在位置が取得できませんでした");
            break;
          case 3: // TIMEOUT
            alert("タイムアウトになりました");
            break;
          default:
            alert("その他のエラー(エラーコード:"+error.code+")");
            break;
        }
      }
    );
      // Geolocation APIに対応していない
  } else {
    alert("この端末では位置情報が取得できません");
  }
 
 // マーカー毎の処理
  for (var i = 0; i < mypageMarkerData.data.length; i++) {
    var markerLatLng = new google.maps.LatLng(mypageMarkerData.data[i]['lat'], mypageMarkerData.data[i]['lng']); // 緯度経度のデータ作成
    marker[i] = new google.maps.Marker({ // マーカーの追加
      position: markerLatLng, // マーカーを立てる位置を指定
      map: map // マーカーを立てる地図を指定
    });
 
    var url = /shops/ + mypageMarkerData.data[i]['id'];
    infoWindow[i] = new google.maps.InfoWindow({ // 吹き出しの追加
      content: '<div class="sample">' + '<a href=' + url + '>' + mypageMarkerData.data[i]['name'] + '<a>' + '</div>' // 吹き出しに表示する内容
    });
 
    markerEvent(i); // マーカーにクリックイベントを追加
  }
}

function markerEvent(i) {
  marker[i].addListener('click', function() {
    infoWindow[i].open(map, marker[i]);
  });
}
