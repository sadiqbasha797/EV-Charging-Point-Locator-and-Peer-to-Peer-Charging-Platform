<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Page Layout with Flex Boxes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
@import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

*:focus,
*:active {
  outline: none !important;
  -webkit-tap-highlight-color: transparent;
}

html,
body {
  display: grid;
  height: 100%;
  width: 100%;
  font-family: "Poppins", sans-serif;
  place-items: center;
  background: linear-gradient(315deg, #ffffff, #d7e1ec);
}

.wrapper {
  display: inline-flex;
  list-style: none;
}

.wrapper .icon {
  position: relative;
  background: #333333;
  border-radius: 50%;
  padding: 15px;
  margin: 10px;
  width: 70px;
  height: 70px;
  font-size: 18px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .tooltip {
  position: absolute;
  top: 0;
  font-size: 14px;
  background: #ffffff;
  color: #ffffff;
  padding: 5px 8px;
  border-radius: 5px;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .tooltip::before {
  position: absolute;
  content: "";
  height: 8px;
  width: 8px;
  background: #ffffff;
  bottom: -3px;
  left: 50%;
  transform: translate(-50%) rotate(45deg);
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .icon:hover .tooltip {
  top: -45px;
  opacity: 1;
  visibility: visible;
  pointer-events: auto;
}

.wrapper .icon:hover span,
.wrapper .icon:hover .tooltip {
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
}

.wrapper .facebook:hover,
.wrapper .facebook:hover .tooltip,
.wrapper .facebook:hover .tooltip::before {
  background: #1877F2;
  color: #ffffff;
}

.wrapper .twitter:hover,
.wrapper .twitter:hover .tooltip,
.wrapper .twitter:hover .tooltip::before {
  background: #1DA1F2;
  color: #ffffff;
}

.wrapper .instagram:hover,
.wrapper .instagram:hover .tooltip,
.wrapper .instagram:hover .tooltip::before {
  background: #E4405F;
  color: #ffffff;
}

.wrapper .github:hover,
.wrapper .github:hover .tooltip,
.wrapper .github:hover .tooltip::before {
  background: #333333;
  color: #ffffff;
}

.wrapper .youtube:hover,
.wrapper .youtube:hover .tooltip,
.wrapper .youtube:hover .tooltip::before {
  background: #CD201F;
  color: #ffffff;
}
.navbars{
    align-items: center;
  margin: auto;
  width: 100%;
  padding: 10px;


}
.userimg{
    border-radius: 80%;
  margin: auto;
  width: 65%;
  padding: 10px;


}
    </style>
  </head>
  <body>
    <script lang="javascript">
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
                //alert("Latitude: " + position.coords.latitude +
            //"<br>Longitude: " + position.coords.longitude);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
            document.getElementById("loc").type="text";
            document.getElementById("loc1").type="text";
        }

        function showPosition(position) {
            document.getElementById("loc").value=position.coords.latitude;
            document.getElementById("loc1").value= position.coords.longitude;
          }
    </script>
    <div class="wrapper">
      <main class="main">
<center>
<?php
session_start();
$id=$_SESSION['id'];
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "power";

   // connect the database with the server
   $conn = new mysqli($servername,$username,$password,$dbname);

    // if error occurs
    if ($conn -> connect_errno)
    {
       echo "Failed to connect to MySQL: " . $conn -> connect_error;
       exit();
    }

  /*  $lat=$GET['lat'];
    $lon=$GET['lon'];


    $stmt = $conn->prepare("update details set current-lat='$lat',current-lon='$lon' where email='$id'");
    $stmt->execute();*/

   $sql = "select * from details where email='$id'";

    $result = ($conn->query($sql));
    //declare array to store the data of database


    if ($result->num_rows > 0)
    {
        // fetch all data from db into array
        $row = $result->fetch_all(MYSQLI_ASSOC);
    }
               if(!empty($row))
               foreach($row as $rows)
              {
                echo $rows['first']." ".$rows['last'];
              }
?>

<div class="div">
  <div class="img">
    <img class="userimg" src="servicepr.png" width="320" height="300">
    </div>
    </center>
<br>
<div class="navbars">
<ul class="wrapper">
  <li class="icon facebook">
    <span class="tooltip">Home</span>
    <span><a href="track.php">🏠</a></span>
  </li>
  <li class="icon twitter">
    <span class="tooltip">Edit</span>
    <span><a href="edit.php">✏️</a></i></span>
  </li>
  <li class="icon instagram">
    <span class="tooltip">Logout</span>
    <span><a href="index.php">🗝️</a></span>
  </li>
  <li class="icon instagram">
    <span class="tooltip">logbook/Payments</span>
    <span><a href="logbook.html">📕</a></span>
  </li>
</ul>
</div>
<br>
      </main>
      <aside class="aside aside1"></aside>
      <aside class="aside aside2"></aside>
      <footer class="footer"></footer>
    </div>
  </body>
</html>
