
<?php

include("includes/config.php");

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dobrodošli na Spotify</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Spotify</h1>
</body>
</html>