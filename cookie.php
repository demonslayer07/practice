<?php

	$cookie_name = "user";
	$cookie_value = "kian";
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

?>

<html>
<body>
	<style>
		.cookie {
			display: flex;
			text-align: center;
			color: green;

		}
	</style>

<div class="cookie">
<?php
	if(!isset($_COOKIE[$cookie_name])) {
	  echo "Cookie named '" . $cookie_name . "' is not set!";
	} else {
	  echo "Cookie '" . $cookie_name . "' is set!<br>";
	  echo "Value is: " . $_COOKIE[$cookie_name];
	}
?>
</div>
</body>
</html>