/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/detail.js":
/*!********************************!*\
  !*** ./resources/js/detail.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var map;
var marker = [];
var infoWindow = [];

window.initAutocomplete = function () {
  var markerLatLng = new google.maps.LatLng(detailMarkerData['lat'], detailMarkerData['lng']); // 緯度経度のデータ作成

  map = new google.maps.Map(document.getElementById('map'), {
    center: markerLatLng,
    zoom: 18,
    mapTypeId: "roadmap" // 地図のズームを指定

  });

  if (navigator.geolocation) {
    // 現在地を取得
    navigator.geolocation.getCurrentPosition( // 取得成功した場合
    function (position) {
      // 緯度・経度を変数に格納
      var currentLatLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude); //　マップにマーカーを表示する

      var currentMarker = new google.maps.Marker({
        map: map,
        // 対象の地図オブジェクト
        position: currentLatLng,
        // 緯度・経度
        icon: {
          url: '../image/current_position_icon.png',
          // マーカー画像を指定
          scaledSize: new google.maps.Size(50, 60) // 大きさ指定

        }
      });
    }, // 取得失敗した場合
    function (error) {
      // エラーメッセージを表示
      switch (error.code) {
        case 1:
          // PERMISSION_DENIED
          alert("位置情報の利用が許可されていません");
          break;

        case 2:
          // POSITION_UNAVAILABLE
          alert("現在位置が取得できませんでした");
          break;

        case 3:
          // TIMEOUT
          alert("タイムアウトになりました");
          break;

        default:
          alert("その他のエラー(エラーコード:" + error.code + ")");
          break;
      }
    }); // Geolocation APIに対応していない
  } else {
    alert("この端末では位置情報が取得できません");
  }

  marker = new google.maps.Marker({
    // マーカーの追加
    position: markerLatLng,
    // マーカーを立てる位置を指定
    map: map // マーカーを立てる地図を指定

  });
  infoWindow = new google.maps.InfoWindow({
    // 吹き出しの追加
    content: '<div class="sample">' + detailMarkerData['name'] + '</div>' // 吹き出しに表示する内容

  });
};

/***/ }),

/***/ 2:
/*!**************************************!*\
  !*** multi ./resources/js/detail.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/ec2-user/environment/used_clothes/resources/js/detail.js */"./resources/js/detail.js");


/***/ })

/******/ });