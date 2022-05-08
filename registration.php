<?php
include 'gym.php';
?>
<html>

<head>
<meta charset="utf-8">
<title>Rigister</title>
	<link rel="stylesheet" type="text/css" href="StylesRi.css" >
			<script type="text/javascript">
	function BMI(){

const w=parseInt(document.getElementById("weight").value);
const h=parseInt(document.getElementById("height").value);
const r=document.getElementById("yourBMI");
const b=w/(h/100*h/100);
const a=(b).toFixed(2);
	
sessionStorage.setItem("BMII",a);


    return;
	
	}
	</script>
</head>

<body class="bg">
	<div class="banner-text">
	<img src="fitness-web-lol-black-color.png" alt="Logo" style="width: 100px;height: 100px;" class="logo">
		<ul>
			<li ><a href="login.php" style="text-decoration: none; color: inherit;">Home</a></li>
	<li><a href="creators.html" style="text-decoration:none; color: inherit;">Creators</a></li>
	<li><a href="Contactus.php" style="text-decoration:none; color: inherit;">Contact us</a></li>
		</ul>
		</div>


	<form action="regis.php" method="POST">
		<p class="all-input" style="padding-top: 10%;">
		Name
			<br>
		<input style="color:#353535;background-color:#D3D3D3" class="input" name="Name" required ><span style="color:red;">*</span><br><br>
		Age<br>
		<input style="color:#353535;background-color:#D3D3D3" class="input" name="Age" required ><span style="color:red;" >*</span>
		<br><br>
			Weight(kg)
			<br>
		<input style="color:#353535;background-color:#D3D3D3" class="input" name="weight" required id="weight"><span style="color:red;">*</span><br><br>
		Height(m)<br>
		<input style="color:#353535;background-color:#D3D3D3" class="input" name="height" required id="height"><span style="color:red;">*</span>
		<br><br>
			Username
			<br>
		<input style="color:#353535;background-color:#D3D3D3" class="input" name="username" required ><span style="color:red;">*</span><br><br>
		Password<br>
		<input style="color:#353535;background-color:#D3D3D3" class="input" name="password" required ><span style="color:red;">*</span>
		<br><br>
			<input type="reset" value="Reset" class="submit-button">
			<input type="submit" value="Ready" name="ready" class="submit-button" onClick="BMI();">
		</p>

		
	</form>

	
</body>
</html>
