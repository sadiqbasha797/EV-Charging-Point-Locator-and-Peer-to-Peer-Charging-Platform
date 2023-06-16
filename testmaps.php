<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
        <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
        <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
        <script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
                alert("Latitude: " + position.coords.latitude +
            "<br>Longitude: " + position.coords.longitude);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
            //document.getElementById("loc").type="text";
            //document.getElementById("loc1").type="text";
        }

        function showPosition(position) {
            document.getElementById("loc").value=position.coords.latitude;
            document.getElementById("loc1").value= position.coords.longitude;
            alert("Latitude: " + position.coords.latitude +
        "<br>Longitude: " + position.coords.longitude);
          }
        </script>
        <script>
          getLocation();
        </script>
        <script>
        document.getElementById("lat").value=document.getElementById("loc");
        document.getElementById("lon").value=document.getElementById("loc1");
      </script>
        <script>
            $(document).ready(function() {
              //getLocation();
              $("#cont").hide();
              $(".marked-locations").hide();

            });
        </script>
        <style>
            #map {
                position: absolute;
                top: 25%;
                bottom: 0;
                right: 0;
                left: 0;
                margin: auto;
            }
            .container {
                display: block;
                height: 10%;
                top:0;
                width: 100%;
                margin: auto;
            }
            .search {
                display: block;
                height: 10%;
                top: 22%;
                width: 100%;
                margin: auto;
            }
            #results {
                display: block;
                height: 10%;
                top: 33%;
                margin: auto;

            }
        </style>

    </head>
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Home</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    

    <!-- Bootstrap core CSS -->
<link href="bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    nav{
      background-color: rgb(20, 44, 100);
    }
    
    .btn1 {
      background-color: black; 
      color:white;
    }

    .bimg{
  background-image: url("https://img.freepik.com/free-vector/clean-medical-background_53876-97927.jpg?w=900&t=st=1684086136~exp=1684086736~hmac=0366bd4774f538a6fd21d47e4b197c3e3a5a80d704f70484cb2028040c97c381");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
    }
     body{
      background-color: whitesmoke;
     }
 
    </style>
   
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div>
      <i class="bi bi-person" style="font-size:25px; color:white;"></i>
      <a class="navbar-brand" href="#" style="color:white;">Profile</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="color:white;">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active" >
          <a class="nav-link" href="#" style="color:white;">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color:white;">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color:white;">Pricing</a>
        </li>
        
      </ul>
    </div>
  </nav>
    <body>

    <?php
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $lat = $_POST['lat'];
    $lon = $_POST['lon'];
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "power";
   $lat1="";
   $lon1="";
   $lat2="";
   $lon2="";
   $lat3="";
   $lon3="";
   $lat4="";
   $lon4="";
   $lat5="";
   $lon5="";
   // connect the database with the server
   $conn = new mysqli($servername,$username,$password,$dbname);

    // if error occurs
    if ($conn -> connect_errno)
    {
       echo "Failed to connect to MySQL: " . $conn -> connect_error;
       exit();
    }

    $sql = "SELECT lat,lon, ABS( lon - '$lon' ) AS distance FROM details ORDER BY distance LIMIT 6;";
    $result = ($conn->query($sql));
    //declare array to store the data of database

    if ($result->num_rows > 0)
    {
        // fetch all data from db into array
        $row = $result->fetch_all(MYSQLI_ASSOC);
    }
    $i=0;
               if(!empty($row))
               foreach($row as $rows)
              {
                if($rows['lat']!=NULL){
                    if($i==0){
                $lat1=$rows['lat'];
                $lon1=$rows['lon'];
                    }
                    if($i==1){
                        $lat2=$rows['lat'];
                        $lon2=$rows['lon'];
                            }
                            if($i==2){
                                $lat3=$rows['lat'];
                                $lon3=$rows['lon'];
                                    }
                                    if($i==3){
                                        $lat4=$rows['lat'];
                                        $lon4=$rows['lon'];
                                            }
                                            if($i==5){
                                                $lat5=$rows['lat'];
                                                $lon5=$rows['lon'];
                                                    }
                                    $i++;
                }
              }
            }
?>
<div class="marked-locations">
    <input type="text" value="<?php echo $lat;?>" id="latitude" placeholder="points">
    <input type="text" value="<?php echo $lon;?>" id="longitude" placeholder="points">
    <input type="text" value="<?php echo $lat1;?>" id="lat1" placeholder="points">
    <input type="text" value="<?php echo $lon1;?>" id="lon1" placeholder="points">
    <input type="text" value="<?php echo $lat2;?>" id="lat2" placeholder="points">
    <input type="text" value="<?php echo $lon2;?>" id="lon2" placeholder="points">
    <input type="text" value="<?php echo $lat3;?>" id="lat3" placeholder="points">
    <input type="text" value="<?php echo $lon3;?>" id="lon3" placeholder="points">
    <input type="text" value="<?php echo $lat4;?>" id="lat4" placeholder="points">
    <input type="text" value="<?php echo $lon4;?>" id="lon4" placeholder="points">

        </div>
        <div class="container" id="cont">
            <b>Coordinates</b>
            <form>
            <input type="text" name="lat" id="lat" size=20 placeholder="Destination">
            <input type="text" name="lon" id="lon" size=20 placeholder="Destination">
            <input type="text" id="loc">
            <input type="text" id="loc1">
            </form>
        </div>
        <style>
          .inp{
            width:180px;
          }
          .search{
            padding-left: 30px;
            padding:5px;
          }
          .bt{
            border-radius: 5px;
          }
        </style>
        <div id="search" class="search">
            <input type="text" class="inp" name="addr" value="" id="addr" size="58" placeholder="Enter destination"/>
            <button type="button" class="bt" onclick="addr_search();">Search</button>
        </div>
        <div id="results"></div>
        <div id="map"></div>
        <script>
            var map = L.map("map").setView([16.4961434,80.5006358],9);
            L.tileLayer('https://api.maptiler.com/maps/openstreetmap/{z}/{x}/{y}.jpg?key=KlYmGsrhwo5JVGHwz1sL', {
                attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
            }).addTo(map);
            document.getElementById('lat').value = '';
            document.getElementById('lon').value = '';
            var myMarker=L.marker([16.4961434,80.5006358], {title: "Coordinates", alt: "Coordinates", draggable: true}).addTo(map).on('dragend', function() {
            //var lat = myMarker.getLatLng().lat.toFixed(8);
            //var lon = myMarker.getLatLng().lng.toFixed(8);
            //var czoom = map.getZoom();
            //if(czoom < 18) { nzoom = czoom + 2; }
            //if(nzoom > 18) { nzoom = 18; }
            //if(czoom != 18) { map.setView([lat,lon], nzoom); } else { map.setView([lat,lon]); }
            //document.getElementById('lat').value = lat;
          //  document.getElementById('lon').value = lon;
            myMarker.bindPopup("Lat " + lat + "<br />Lon " + lon);
            });
            myMarker.bindPopup("<h3 style='text-align:center'>Price Details</h3><p>Average price per unit for below 50units: 6/-</p><p>Average price per unit for below 150units: 5.47/-</p><p>Average price per unit for below 250units: 4.222/-</p>").openPopup();
            //var lat=document.getElementById("latitude").value;
            //var lon=document.getElementById("longitude").value;
            /*var lat1=document.getElementById("lat1").value;
            var lon1=document.getElementById("lon1").value;
              var lat2=document.getElementById("lat2").value;
              var lon2=document.getElementById("lon2").value;
              var lat3=document.getElementById("lat3").value;
              var lon3=document.getElementById("lon3").value;
              var lat4=document.getElementById("lat4").value;
              var lon4=document.getElementById("lon4").value;*/
              //var lat5=document.getElementById("lat5").value;
              //var lon5=document.getElementById("lon5").value;
            //var marker1=L.marker([lat,lon]).addTo(map).addTo(map).bindPopup("<h3 style='text-align:center'>Price Details</h3><p>Average price per unit for below 50units: 6/-</p><p>Average price per unit for below 150units: 5.47/-</p><p>Average price per unit for below 250units: 4.222/-</p>").openPopup();
             //var marker2=L.marker([lat1,lon1]).addTo(map).addTo(map).bindPopup("<h3 style='text-align:center'>Price Details</h3><p>Average price per unit for below 50units: 6/-</p><p>Average price per unit for below 150units: 5.47/-</p><p>Average price per unit for below 250units: 4.222/-</p>").openPopup();
             // var marker3=L.marker([lat2,lon2]).addTo(map).addTo(map).bindPopup("<h3 style='text-align:center'>Price Details</h3><p>Average price per unit for below 50units: 6/-</p><p>Average price for below 150units: 5.47/-</p><p>Average price per unit for below 250units: 4.222/-</p>").openPopup();
           // var marker4=L.marker([lat3,lon3]).addTo(map).addTo(map).bindPopup("<h3 style='text-align:center'>Price Details</h3><p>Average price per unit for below 50units: 6/-</p><p>Average price oer unit for below 150units: 5.47/-</p><p>Average price per unit for below 250units: 4.222/-</p>").openPopup();
            //var marker5=L.marker([lat4,lon4]).addTo(map).addTo(map).bindPopup("<h3 style='text-align:center'>Price Details</h3><p>Average price per unit for below 50units: 6/-</p><p>Average price per unit for below 150units: 5.47/-</p><p>Average price per unit for below 250units: 4.222/-</p>").openPopup();
            //var marker6=L.marker([lat5,lon5]).addTo(map).addTo(map).bindPopup("<h3 style='text-align:center'>Price Details</h3><p>Average price for below 50units: 6/-</p><p>Average price for below 150units: 5.47/-</p><p>Average price for below 250units: 4.222/-</p>").openPopup();
            var marker1=L.marker([16.1809,81.1303]).addTo(map);//machilipatnam
            var marker2=L.marker([16.5062,80.6480]).addTo(map);//bza
            /*var marker3=L.marker([16.5419,80.8050]).addTo(map);//gannavaram
            var marker4=L.marker([16.3487,81.0492]).addTo(map);//hyd
            var marker5=L.marker([17.3850,78.4867]).addTo(map);//khammam
            var marker6=L.marker([16.4760,79.4394]).addTo(map);//nagarjuna sagar
            var marker7=L.marker([17.2473,80.1514]).addTo(map);//nandigama
            var marker8=L.marker([16.5760,79.3124]).addTo(map);//kodada
            var marker9=L.marker([17.1314,79.6336]).addTo(map);//jagayyapeta
            var marker10=L.marker([17.2041,79.9750]).addTo(map);//suryapet*/
            var marker3=L.marker([16.7724,80.2859]).addTo(map);//nandigama
            var marker4=L.marker([16.2359,80.0496]).addTo(map);//narasapet
            var marker5=L.marker([17.0005,81.8040]).addTo(map);//rajamendry
            var marker11=L.marker([16.236719,80.647476]).addTo(map);//tenali
            var marker12=L.marker([16.5449,81.5212]).addTo(map);//bhimavaram
            var marker13=L.marker([15.8107,79.9724]).addTo(map);//addanki
            var marker14=L.marker([16.7850,80.8488]).addTo(map); //nujiveedu
            var marker6=L.marker([16.4344,80.9931]).addTo(map);//gudivada
            var marker7=L.marker([16.6356,80.9716]).addTo(map);//junction
            var marker8=L.marker([16.8108,81.2637]).addTo(map);//bhimadole
            var marker9=L.marker([16.9563,81.2560]).addTo(map);//dwaraka tirumala
            var marker10=L.marker([17.2789,82.4012]).addTo(map);//annavaram
            var marker15=L.marker([17.6986,83.0024]).addTo(map);//anakaapalle
            var marker16=L.marker([17.7144,82.9972]).addTo(map);//thummapalla
            var marker17=L.marker([17.0500,82.1679]).addTo(map);
            var marker18=L.marker([17.5018,82.7920]).addTo(map);
            var marker19=L.marker([17.6868,83.2185]).addTo(map);
            var marker20=L.marker([17.6664,82.6105]).addTo(map);

            function chooseAddr(lat1, lng1)
            {
                myMarker.closePopup();
                map.setView([lat1, lng1],18);
                myMarker.setLatLng([lat1, lng1]);
                lat = lat1.toFixed(8);
                lon = lng1.toFixed(8);
                document.getElementById('lat').value = lat;
                document.getElementById('lon').value = lon;
                myMarker.bindPopup("Lat " + lat + "<br />Lon " + lon).openPopup();
            }

            function myFunction(arr)
            {
                var out = "<br />";
                var i;

                if(arr.length > 0)
                {
                    for(i = 0; i < arr.length; i++)
                    {
                        out += "<div class='address' title='Show Location and Coordinates' onclick='chooseAddr(" + arr[i].lat + ", " + arr[i].lon + ");showRoute();return false;'>" + arr[i].display_name + "</div>";
                    }
                    document.getElementById('results').innerHTML = out;
                }
                else
                {
                    document.getElementById('results').innerHTML = "Sorry, no results...";
                }

            }

            function addr_search()
            {
                var inp = document.getElementById("addr");
                var xmlhttp = new XMLHttpRequest();
                var url = "https://nominatim.openstreetmap.org/search?format=json&limit=3&q=" + inp.value;
                xmlhttp.onreadystatechange = function()
                {
                    if (this.readyState == 4 && this.status == 200)
                    {
                        var myArr = JSON.parse(this.responseText);
                        myFunction(myArr);
                    }
                };
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
            }
             /*function getDistance(origin, destination) {
             // return distance in meters
            var lon1 = toRadian(origin[1]),
                lat1 = toRadian(origin[0]),
                lon2 = toRadian(destination[1]),
                lat2 = toRadian(destination[0]);

                var deltaLat = lat2 - lat1;
                var deltaLon = lon2 - lon1;

                var a = Math.pow(Math.sin(deltaLat/2), 2) + Math.cos(lat1) * Math.cos(lat2) * Math.pow(Math.sin(deltaLon/2), 2);
                var c = 2 * Math.asin(Math.sqrt(a));
                var EARTH_RADIUS = 6371;
                return c * EARTH_RADIUS * 1000;
            }
            function toRadian(degree) {
                return degree*Math.PI/180;
            }
            var points=[[16.1809,81.1303],[16.5062,80.6480],[16.7724,80.2859],[16.2359,80.0496],[17.0005,81.8040],[16.236719,80.647476],[16.5449,81.5212],[15.8107,79.9724],[16.7850,80.8488]];
            var distances=[];
            var copyDistances=[];
            for(let i=0;i<points.length;i++) {
               distances.push(getDistance([16.4961434,80.5006358],points[i]));
               copyDistances.push(distances[i]); 
            }
            //var marker2=L.marker([16.3530921,81.0421419]).addTo(map);
            function displayRoute(current,destination,milage,via=[]) {
                var min=Math.min(...distances);
                var index=copyDistances.indexOf(min);
                if(current==destination||milage>=getDistance(current,destination)) {
                     L.routing.control({
                        waypoints: [
                            ...via,
                        ]
                     }).addTo(map);
                } else if(milage>=min) {
                    via.push(L.latLng(...current));
                    current=points[index];
                    distances.remove(min);ge
                    displayRoute(current,destination,mila,via);

                } else {
                    L.Routing.control({
                        waypoints: [
                            L.latLng(...current),
                            L.latLng(...destination);
                            return;
                        ]
                    })
                }
            }*/
            //var marker2=L.marker([16.3530921,81.0421419]).addTo(map);
            function showRoute() {
            var dlat=document.getElementById('lat').value;
            var dlon=document.getElementById('lon').value;
            if(dlat==17.36058900) {
                L.Routing.control({
                waypoints: [
                  L.latLng(16.4961434,80.5006358),
                  L.latLng(16.7724,80.2859),
                  L.latLng(dlat,dlon),
                ]
              }).addTo(map);
            } else if(dlat==15.50587140) {
                L.Routing.control({
                waypoints: [
                  L.latLng(16.4961434,80.5006358),
                  L.latLng(16.2359,80.0496),
                  L.latLng(15.8107,79.9724),
                  L.latLng(dlat,dlon),
                ]
              }).addTo(map);
            } else if(dlat==17.72312760) {
                L.Routing.control({
                waypoints: [
                  L.latLng(16.4961434,80.5006358),
                  L.latLng(16.5062,80.6480),
                  L.latLng(16.6356,80.9716),
                  L.latLng(16.8108,81.2637),
                  L.latLng(17.0005,81.8040),
                  L.latLng(17.2789,82.4012),
                  L.latLng(17.6986,83.0024),
                  L.latLng(dlat,dlon),
                ]
              }).addTo(map); 
            }
            else {
            L.Routing.control({
                waypoints: [
                  L.latLng(16.4961434,80.5006358),
                  L.latLng(dlat,dlon),
                ]
              }).addTo(map);
            }
            //var lat3
            //var lon3
            /*if(dlat==16.50875860) { //for vijayawada via gudivada
            var lat3=document.getElementById("lat1").value;
              var lon3=document.getElementById("lon1").value;
              L.Routing.control({
                waypoints: [
                  L.latLng(16.3530921,81.0421491),
                  L.latLng(lat3,lon3),
                  L.latLng(dlat,dlon),
                ]
              }).addTo(map);
            } else if(dlat==16.76120390) {//for mylavaram via junction
              var lat3=document.getElementById("lat2").value;
               var lon3=document.getElementById("lon2").value;
              L.Routing.control({
              waypoints: [
              L.latLng(16.3530921,81.0421491),
              L.latLng(lat3,lon3),
              L.latLng(dlat,dlon),
              //L.latLng(16.4344,80.9931),
              //L.latLng(17.6868,83.2185),
              //L.latLng(16.3530921,81.0421419),
              ]}).addTo(map);
            } else if(dlat==16.09495020) {//for chpeta via tenali
              var lat3=document.getElementById("lat3").value;
              var lon3=document.getElementById("lon3").value;
              L.Routing.control({
              waypoints: [
              L.latLng(16.3530921,81.0421491),
              L.latLng(16.4344,80.9931),
              L.latLng(lat3,lon3),
              L.latLng(dlat,dlon),
              //L.latLng(16.4344,80.9931),
              //L.latLng(17.6868,83.2185),
              //L.latLng(16.3530921,81.0421419),
              ]}).addTo(map);
            } else if(dlat==15.71498775) {//for markapur via ongole
              var lat3=document.getElementById("lat4").value;
              var lon3=document.getElementById("lon4").value;
              L.Routing.control({
              waypoints: [
              L.latLng(16.3530921,81.0421491),
              //L.latLng(16.4344,80.9931),
              L.latLng(lat3,lon3),
              L.latLng(dlat,dlon),
              //L.latLng(16.4344,80.9931),
              //L.latLng(17.6868,83.2185),
              //L.latLng(16.3530921,81.0421419),
              ]}).addTo(map);
            }
             else {
              L.Routing.control({
              waypoints: [
              L.latLng(16.3530921,81.0421491),
              //L.latLng(lat3,lon3),
              L.latLng(dlat,dlon),
              //L.latLng(16.4344,80.9931),
              //L.latLng(17.6868,83.2185),
              //L.latLng(16.3530921,81.0421419),
              ]}).addTo(map);
            }*/

            }
            /*function showOriginalRoute() {
              var dlat=document.getElementById('lat').value;
              var dlon=document.getElementById('lon').value;
              if(dlon>80.9931 && dlat<16.6356) {
                L.Routing.control({
                  waypoints: [
                    L.latLng(16.4851695,80.6912911),
                    L.latLng(16.4344,80.9931),
                    L.latLng(dlat,dlon),
                  ]}).addTo(map);
              } else if(dlat>16.6356) {
                L.Routing.control({
                  waypoints: [
                    L.latLng(16.4851695,80.6912911),
                    L.latLng(16.6356,80.9716),
                    L.latLng(dlat,dlon),
                  ]}).addTo(map);
              } else if(dlat<16.2379 && dlon>80.6444) {
                L.Routing.control({
                  waypoints: [
                    L.latLng(16.4851695,80.6912911),
                    L.latLng(16.2379,80.6444);,
                    L.latLng(dlat,dlon),
                  ]}).addTo(map);
              } else if(dlat<16.3067) {
                L.Routing.control({
                  waypoints: [
                    L.latLng(16.4851695,80.6912911),
                    L.latLng(16.3067,80.4365;,
                    L.latLng(dlat,dlon),
                  ]}).addTo(map);
              } else {
                L.Routing.control({
                  waypoints: [
                    L.latLng(16.4851695,80.6912911),
                    //L.latLng(16.2379,80.6444);,
                    L.latLng(dlat,dlon),
                  ]}).addTo(map);
              }
            }
            /*function createMarker()
            {
                var markerFrom = L.circleMarker([16.1809,81.1303], { color: "#F00", radius: 10 });
                var markerTo =  L.circleMarker([17.6868,83.2185], { color: "#4AFF00", radius: 10 });
                var from = markerFrom.getLatLng();
                var to = markerTo.getLatLng();
                markerFrom.bindPopup('machilpatnam ' + (from).toString());
                markerTo.bindPopup('vizag ' + (to).toString());
                map.addLayer(markerTo);
                map.addLayer(markerFrom);
                getDistance(from, to);
            }

            function getDistance(from, to)
            {
            alert(("New Delhi to Mumbai - " + (from.distanceTo(to)).toFixed(0)/1000) + ' km');
            }*/
        </script>

    </body>
</html>
