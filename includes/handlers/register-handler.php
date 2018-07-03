<?php

function cleanFormPassword($inputText) {
	// funkcija za čišćenje inputa
	$inputText = strip_tags($inputText);
	return $inputText;
}

function cleanFormUsername($inputText) {
	// funkcija za čišćenje inputa
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	return $inputText;
}

function cleanFormString($inputText) {
	// funkcija za čišćenje inputa
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	$inputText = ucfirst(strtolower($inputText));
	return $inputText;
}


if(isset($_POST['registerButton'])) {
	// Register button je pritisnut
	$username = cleanFormUsername($_POST['username']);
	$firstName = cleanFormString($_POST['firstName']);
	$lastName = cleanFormString($_POST['lastName']);
	$email = cleanFormString($_POST['email']);
	$email2 = cleanFormString($_POST['email2']);
	$password = cleanFormPassword($_POST['password']);
	$password2 = cleanFormPassword($_POST['password2']);

	$wasSuccessful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);

	if($wasSuccessful == true) {
		$_SESSION['userLoggedIn'] = $username;
		header("Location: index.php");
	}

}

?>