<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Page Layout with Flex Boxes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
body{
  background-image: url('car.png');
  background-repeat: no-repeat;
  background-size: cover;
    font-size:15px;
}
* {
	box-sizing: border-box;
	margin: 0;
	padding-left: 20px;
  padding:5px;
	font-family: Raleway, sans-serif;
}
.screen {
	background:orange;
	position: relative;
	height: 600px;
	width: 360px;
	box-shadow: 0px 0px 24px #5C5696;
  border-radius:30px;
}

.screen__content {
	z-index: 1;
	position: relative;
	height: 100%;
}

.screen__background {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 0;
	-webkit-clip-path: inset(0 0 0 0);
	clip-path: inset(0 0 0 0);
}

.screen__background__shape {
	transform: rotate(45deg);
	position: absolute;
}

.screen__background__shape1 {
	height: 520px;
	width: 560px;
	background: #FFF;
	top: -50px;
	right: 120px;
	border-radius: 0 72px 0 0;
}
.login {
	width: 360px;
	padding: 30px;
	padding-top: 156px;
}

.login__field {
	padding: 20px 0px;
	position: relative;
}

.login__icon {
	position: absolute;
	top: 30px;
	color: #7875B5;
}

.login__input {
	border: none;
	border-bottom: 2px solid #363030a3;
	background: none;
	padding: 10px;
	padding-left: 24px;
	font-weight: 700;
	width: 75%;
    font-size:15px;
	transition: .2s;
}

.login__input:active,
.login__input:focus,
.login__input:hover {
	outline: none;
	border-bottom-color: orange;
}

.login__submit {
	background: #fff;
	font-size: 14px;
	margin-top: 30px;
	padding: 16px 20px;
	border-radius: 26px;
	border: 1px solid #D4D3E8;
	text-transform: uppercase;
	font-weight: 700;
	display: flex;
	align-items: center;
	width: 100%;
	color: black;
	box-shadow: 0px 2px 2px #5C5696;
	cursor: pointer;
	transition: .2s;
}

.login__submit:active,
.login__submit:focus,
.login__submit:hover {
	border-color: #6A679E;
	outline: none;
}

.button__icon {
	font-size: 14px;
	margin-left: auto;
	color: black;
}

.social-login {
	position: absolute;
	height: 140px;
	width: 160px;
	text-align: center;
	bottom: 0px;
	right: 0px;
	color: #fff;
}

.social-icons {
	display: flex;
	align-items: center;
	justify-content: center;
}

.social-login__icon {
	padding: 20px 10px;
	color: #fff;
	text-decoration: none;
	text-shadow: 0px 0px 8px #7875B5;
}

.social-login__icon:hover {
	transform: scale(1.5);
}
b{
	color:red;
}
    </style>
  </head>
  <body>
    <div class="wrapper">
      <main class="main">
      <div class="screen">
		<div class="screen__content">
			<form class="login" action="#" method="post">
        <h2>LOGIN</h2><br>
		<?php
	    if($_SERVER["REQUEST_METHOD"]=="POST"){
session_start();
   $username = $_POST['email'];
$password = $_POST['password'];
if(!is_null($username)){
$conn = new mysqli('localhost','root','','power');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM details";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      if($row["email"]== $username && $row["pass"]==$password){
		$_SESSION['id'] = $row["email"];
          header("Location: profile.php");
          exit();
      }
      else{
          $m="Incorrect Username or Password";
      }
  }
}
echo "<b>".$m."</b>";

$conn->close();
}
		}
   ?>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="email" class="login__input" placeholder="Email" name="email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Password" name="password">
				</div>
				<br>
				Don't have account please <a href="reg.php">Register</a>
				<button class="button login__submit" type="submit">
					<span class="button__text">LogIn</span>
					<i class="button__icon fas fa-chevron-right">>></i>
				</button>
			</form>
			<div class="social-login">
				<div class="social-icons">
				</div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>
	</div>
      </main>
      <aside class="aside aside1"></aside>
      <aside class="aside aside2"></aside>
      <footer class="footer"></footer>
    </div>
  </body>
</html>
