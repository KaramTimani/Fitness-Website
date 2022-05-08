<?php
include 'gym.php';
?>
<html>
<head>
<meta charset="utf-8">
<title>Fitness Web</title>
<link rel="stylesheet" type="text/css" href="Styles.css" >	
	
	</head>
																	
	<body class="animation">
		
<div class="banner-text">
	<img src="fitness-web-lol.png" alt="Logo" style="width: 100px;height: 100px;">
		<ul>
			<li ><a href="#home" style="text-decoration: none; color: inherit;">Home</a></li>
	<li><a href="creators.html" style="text-decoration:none; color: inherit;">Creators</a></li>
	<li><a href="Contactus.php" style="text-decoration:none; color: inherit;">Contact us</a></li>
		</ul>
		
		</div> 


	</body>
	<h1 id="home" >Fitness Web</h1>
	
	<form action="login4" method="POST">
		<p class="all-input">
		Username
			<br>
		<input style="color:#ABA8A8;background-color:#D3D3D3" class="input" name="UserName"  ><br><br>
		Password<br>
		<input style="color:#ABA8A8;background-color:#D3D3D3" class="input" name="Password"  >
		<br><br>
			<a href="registration.php"><input type="button" value="Register" class="submit-button"></a>
			<input type="submit" name="login" value="Login" class="submit-button">
		</p>




	</form>
	
	</html>