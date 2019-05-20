<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Europe/London");
	$con = mysqli_connect("localhost", "root", "", "geet");
//	$con = mysqli_connect("127.0.0.1:50753", "root", "MyNewPass", "geet");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>
