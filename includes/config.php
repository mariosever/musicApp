<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Europe/Zagreb");

	$con = mysqli_connect("localhost", "root", "", "spotify");

	if(mysqli_connect_errno()){
		echo "Neuspješno spajanje na bazu. " . mysqli_connect_errno();
	}

?>