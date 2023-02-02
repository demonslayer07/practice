<?php 
	include("header1.php");
	include("footer1.php");
	require("cookie.php");
?>
<!DOCTYPE html>
<html>
<head>
<style>
	* {
		font-family: sans-serif;
	}
#bg1 {
  background: url(bg1.jpg);
  height: 1000px;
  background-size: cover;
  background-repeat: no-repeat;
}

#bg1 h1 {
	color: white;
	font-size: 50px;
	padding-left: 50px;
  	padding-top: 150px;
}

#bg1 p {
	color: white;
	font-size: 25px;
	position: absolute;
	left: 50px;
	top: 350px;
}

#bg2 {
  background: url(bg2.jpg);
  height: 1000px;
  background-size: cover;
  background-repeat: no-repeat;
}
#bg2 h1 {
	color: white;
	font-size: 50px;
	padding-left: 50px;
  	padding-top: 120px;
}

#bg2 p {
	color: white;
	font-size: 23px;
	position: absolute;
	left: 50px;
	top: 1350px;
}

#btn11 {
	position: absolute;
	left: 60px;
	top: 500px;
}

#btn22 {
	position: absolute;
	left: 60px;
	top: 1530px;

}

</style>
</head>
<body>

<div id="bg1">
  <h1>City of Taguig</h1>
  <p>Taguig, officially known as the City of Taguig, is a 1st class highly urbanized city in Metro Manila, Philippines. According to the 2020 census, it has a population of 886,722 people.</p>
</div>

 	<div id="btn11">
 	<?php echo require("main.php");?>
	</div>

<div id="bg2">
  <h1>Everything You Need to Know About Taguig City</h1>
  <p>In choosing a place that will eventually be called home, discovering everything about its history, status, the good things that make people stay, and even different establishments and towering buildings near the area is important because you are not just choosing a place to stay, you’re choosing the right home for you. And frankly speaking, not every place can give you that homey vibe, a place that will make you feel you belong.

Taguig City has built its name and reputation throughout the years, making it a famous location for commercial, corporate, and even residential purposes. If you are one of those people who wants to experience a fun and thrilling life whilst feeling secure and comfortable, Taguig City might just be the perfect place you have been looking for.</p>
</div>

	<div id="btn22">
 	<?php echo require("main.php");?>
	</div>

</body>
</html>




