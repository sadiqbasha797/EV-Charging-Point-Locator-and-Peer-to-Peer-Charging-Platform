<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Edit</title>
   <style>
    body {
    width: 100%;
    height: 100vh;
    margin: 0;
    background-color: #1b1b32;
    color: #f5f6f7;
    font-family: Tahoma;
    font-size: 16px;
  }

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}
  h1, p {
    margin: 1em auto;
    text-align: center;
  }

  form {
    width: 60vw;
    max-width: 500px;
    min-width: 300px;
    margin: 0 auto;
    padding-bottom: 2em;
  }

  fieldset {
    border: none;
    padding: 2rem 0;
    border-bottom: 3px solid #3b3b4f;
  }

  fieldset:last-of-type {
    border-bottom: none;
  }

  label {
    display: block;
    margin: 0.5rem 0;
  }

  input,
  textarea,
  select {
    margin: 10px 0 0 0;
    width: 100%;
    min-height: 2em;
  }

  input, textarea {
    background-color: #0a0a23;
    border: 1px solid #0a0a23;
    color: #ffffff;
  }

  .inline {
    width: unset;
    margin: 0 0.5em 0 0;
    vertical-align: middle;
  }

  input[type="submit"], .location-botton {
    display: block;
    color: white;
    width: 60%;
    margin: 1em auto;
    height: 2em;
    font-size: 1.1rem;
    background-color: #3b3b4f;
    border-color: white;
    min-width: 300px;
  }

  input[type="file"] {
    padding: 1px 2px;
  }

  a {
    color: #dfdfe2;
  }
   </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
        }

        function showPosition(position) {
            document.getElementById("loc").value="Latitude: " + position.coords.latitude + "   Longitude: " + position.coords.longitude;
        }
    </script>
    <script>
        $(document).ready(function() {
            $("#location-button").hide();
            $("input[name=has-charge]").on("click", function () {
                var selectedValue = $("input[name=has-charge]:checked").val();
                if (selectedValue == "yes") {
                    $("#location-button").show();
                }
                else {
                    if (selectedValue == "no") {
                        $("#location-button").hide();
                    }
                }

            });
        });
    </script>
  </head>
  <body>
  <?php
session_start();
$id=$_SESSION['id'];
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "power";
   $f="";
   $l="";
   $e="";
   $p="";
   // connect the database with the server
   $conn = new mysqli($servername,$username,$password,$dbname);

    // if error occurs
    if ($conn -> connect_errno)
    {
       echo "Failed to connect to MySQL: " . $conn -> connect_error;
       exit();
    }

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
                $f=$rows['first'];
                $l=$rows['last'];
                $e=$rows['email'];
                $p=$rows['pass'];
              }
?>
    <form action="#" method="post">
      <fieldset>
        <label for="first-name">First Name: <input id="first-name" name="first-name" type="text" value="<?php echo $f;?>" required /></label>
        <label for="last-name">Last Name: <input id="last-name" name="last-name" type="text" value="<?php echo $l;?>"required /></label>
        <label for="email">Email: <input id="email" name="email" type="email" value="<?php echo $e;?>" readonly required /></label>
        <label for="new-password">Password: <input id="new-password" name="new-password" type="Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" value="<?php echo $p;?>" required /></label>
        <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
<input type="checkbox" required title="Update">
    </fieldset>
      <input type="submit" value="Submit" />
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
$first = $_POST['first-name'];
$last = $_POST['last-name'];
$email = $_POST['email'];
$password = $_POST['new-password'];

$conn = new mysqli('localhost','root','','power');
if($conn->connect_error)
{
die('Connection Failed:' .$conn->connect_error);
}
else
{
$stmt = $conn->prepare("update details set first='$first',last='$last',pass='$password' where email='$id'");
$stmt->execute();
$stmt->close();
$conn->close();
}
    }
?>
<script>
var myInput = document.getElementById("new-password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
  </body>
</html>
