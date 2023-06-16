<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Page Layout with Flex Boxes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
body,a,.main,.aside,.footer{
    background:black;
    color:white;
    font-size:20px;
}
.div{
 position:relative;
 color:white;
 border-radius:40px;
}
#img{
    border-radius:50%;
    align-items: center;
}
#log{
    font-size:25px;
    border-radius:20px;
    background:orange;
}
.edit{
    position:relative;
    background:transparent;
    text-align:right;
}
#d{
    border-radius:300px;
}
#dot{
    font-size:30px;
    border-radius:50%;
    background:transparent;
    border-color:transparent;
}
img{
    border-radius:50%;
}
.img{
  position: relative;
  width:50%;
  border-radius: 50%;
}
.ed,.set{
    position:relative;
    padding:20px;
    border-bottom: 1px solid #2a2727;
}
.ed:hover,.set:hover{
 color: aqua;
}
b{
 padding:10px;
}
a{
    color:white;
    text-decoration:none;
}
input{
  font-size: 20px;
  background-color: transparent;
  border: none;
  color:white;
}
      /* main layout */
      .wrapper {
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-flex-flow: row wrap;
        flex-flow: row wrap;
        text-align: center;
      }
      .wrapper > * {
        padding: 10px;
        flex: 1 100%;
      }
      header.header {
        padding-right:0;
        padding-left: 0;
        padding-bottom: 0;
      }
      .main {
        text-align: left;
      }

      /* medium sized screens */
      @media all and (min-width: 600px) {
        .aside {
          flex: 1 auto;
        }
      }

      /* large sized screens */
      @media all and (min-width: 800px) {
        .main {
          flex: 3 0px;
        }
        .aside1 {
          order: 1;
        }
        .main {
          order: 2;
        }
        .aside2 {
          order: 3;
        }
        .footer {
          order: 4;
        }
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
    <img src="userimg.jpg" width="320" height="300">
    </div>
    </center>
<br>
<pre>
<a href="edit.php"><div class="ed">
Edit<b>>></b>
</div>
</a>
<button name="home"><a href="track.php">Home</a></button>
<a href="index.php">
<div class="set">
Logout<b>>></b>
</div>
</a>
</pre>
<br>
      </main>
      <aside class="aside aside1"></aside>
      <aside class="aside aside2"></aside>
      <footer class="footer"></footer>
    </div>
  </body>
</html>
