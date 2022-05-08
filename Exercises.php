<html>
<head>
<meta charset="utf-8">
<title>Exercises</title>
	<link rel="stylesheet" type="text/css" href="StylesEx.css" >
	<script> 
	  
window.addEventListener('load', () => {
    
    const b = sessionStorage.getItem('BMII');

    document.getElementById('yourBMI').innerHTML =b;
 
})
</script>
</head>

<body class="bg">
	
	<div class="banner-text">
	<img src="fitness-web-lol-black-color.png" alt="Logo" style="width: 100px;height: 100px;" class="logo">
		<ul>
			<li ><a href="login.php" style="text-decoration: none; color: inherit;">Home</a></li>
	<li><a href="creators.html" style="text-decoration:none; color: inherit;">Creators</a></li>
	<li><a href="Contactus.html" style="text-decoration:none; color: inherit;">Contact us</a></li>
		</ul>
		</div>

	<h1 id="home">Your BMI is:<br><span id="yourBMI"></span></h1>
<!--	<p style="color:aliceblue;">Please choose your exerscise acorrding to you the value of the BMI:
		<ul style="color:aliceblue;"><li>Less than 18.5:(UnderWeight)(Exersice 1)</li>
 <li>Between 18.5 and 24.9:(Normal)(Exersice 2)</li>
	<li>Between 25 and 29.9:(UnderWeight)(Exersice 3)</li>
	<li>Greater than 30:(Obese)(Exersice 4)</li>
	<li>Between 30 and 34.9:(Obese class 1)(Exersice 5)</li>
	<li>Between 35 and 39.9:(Obese class 2)(Exersice 6)</li>
	<li>Greater than 40:(Obese class 3)(Exersice 7)</li></ul> 
	</p>
	
<embed src="javascript-cheat-sheet.pdf" type="application/pdf" width="100%" height="100%"/>
-->
</body>
</html>
