<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Registration Form</title>
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
            document.getElementById("loc1").type="text";
        }

        function showPosition(position) {
            document.getElementById("loc").value=position.coords.latitude;
            document.getElementById("loc1").value= position.coords.longitude;
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
    <form action="maps.php" method="post">
      <fieldset>
        <label for="yes"><input id="yes" type="radio" name="has-charge" class="inline" value="yes" /> Yes</label>
        latitude<input type="hidden" id="loc" name="lat">
       longitude<input type="hidden" id="loc1" name="lon">
        <button onclick="getLocation()" class="location-botton" id="location-button">Give location</button>
        <label for="terms-and-conditions" name="terms-and-conditions">
          <input id="terms-and-conditions" type="checkbox" required name="terms-and-conditions" class="inline" /> I accept the <a href="https://www.freecodecamp.org/news/terms-of-service/">terms and conditions</a>
        </label>
      </fieldset>
      <input type="submit" value="Track" />
    </form>
  </body>
</html>
