<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>

<?php



		$json_url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng=60.23890786,25.06669518&language=fi&sensor=true';
		$json = file_get_contents($json_url);
		$obj = json_decode($json);
		$get_osoite = $obj->results[0]->formatted_address;
		$get_osoite = explode(",", $get_osoite);

//echo $obj->results[1]->address_components[0]->long_name;
print_r($get_osoite);

/*
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Heatmaps</title>
    <style>

      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=visualization"></script>
    <script>
  var geocoder;
  var map;
  function initialize() {
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(60.23890786,25.06669518);
    var mapOptions = {
      zoom: 8,
      center: latlng
    }
    map = new google.maps.Map(document.getElementById("map"), mapOptions);
  }

  function codeAddress() {
    var address = document.getElementById("address").value;
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location
        });
      } else {
        alert("Geocode was not successful for the following reason: " + status);
      }
    });
  }
 
    </script>
  </head>
 
<body onload="initialize()">
 <div id="map" style="width: 320px; height: 480px;"></div>
  <div>
    <input id="address" type="textbox" value="Helsinki">
    <input type="button" value="Encode" onclick="codeAddress()">
  </div>
</body>




