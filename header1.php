<!DOCTYPE html>
<html>
<head>
	<title>header</title>
</head>
<body>
	<style>
		
		*{
		margin: 0;
		padding: 0;
	}
	body {
		background-color: #eeee;
	}
	nav {
		width: 100%;
		height: 100px;
		background-color: #ffff;

	}
	ul {
		margin-left: 150px;
	}
	ul li {
		list-style: none;
		display: inline-block;
		float: left;
		line-height: 100px;
	}
	ul li a {
		text-decoration: none;
		font-size: 18px;
		font-family: arial;
		color: black;
		padding: 20px;
	}
	ul li a:hover {
		color: red;
	}
	.logo {
		position: absolute;
		left: 5px;
		top: 5px;
		width: 130px;
		height: 90px;
	}
	</style>
	
	<nav>
	<img class="logo" src="logo1.png">
		<ul>
			<li>
				<a href="#">Home</a>
			</li>
			<li>
				<a href="#">Contact us</a>
			</li>
			<li>
				<a href="main.php">Features</a>
			</li>
			<li>
				<a href="#">About Us</a>
			</li>
		</ul>
	</div>
</nav>
</body>
</html>