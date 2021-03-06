<?php
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	$account = new Account($con);

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	function getInputValue($name) {
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dobrodošli na Spotify!</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="assets/css/register.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>
<body>

	<?php

	if(isset($_POST['registerButton'])) {
		echo '<script>
				$(document).ready(function() {
					$("#loginForm").hide();
					$("#registerForm").show();
				});
			  </script>';
	}
	else {
		echo '<script>
				$(document).ready(function() {
					$("#loginForm").show();
					$("#registerForm").hide();
				});
			  </script>';
	}

	?>

	<div id="background">

		<div id="loginContainer">

			<div id="inputContainer">

				<form id="loginForm" action="register.php" method="POST">
					<h2>Prijavi se</h2>
					<p>
						<?php echo $account->getError(Constants::$loginFailed) ?>
						<label for="loginUsername">Korisničko ime</label>
						<input id="loginUsername" type="text" name="loginUsername" value="<?php getInputValue('loginUsername') ?>" placeholder="vaše korisničko ime" required>
					</p>
					<p>
						<label for="loginPassword">Lozinka</label>
						<input id="loginPassword" type="password" name="loginPassword" value="<?php getInputValue('loginPassword') ?>" placeholder="vaša lozinka" required>
					</p>	

					<button type="submit" name="loginButton">Prijava</button>	

					<div class="hasAccountText">			
						<span id="hideLogin">Nemaš račun? Izradi svoj besplatan račun ovdje.</span>
					</div>

				</form>

				<form id="registerForm" action="register.php" method="POST">
					<h2>Izradi svoj besplatan račun</h2>
					
					<p>
						<?php echo $account->getError(Constants::$usernameCharacters) ?>
						<?php echo $account->getError(Constants::$usernameTaken) ?>
						<label for="username">Korisničko ime</label>
						<input id="username" type="text" name="username" value="<?php getInputValue('username') ?>" placeholder="npr. IvanHorvat" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$firstNameCharacters) ?>
						<label for="firstName">Ime</label>
						<input id="firstName" type="text" name="firstName" value="<?php getInputValue('firstName') ?>" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$lastNameCharacters) ?>
						<label for="lastName">Prezime</label>
						<input id="lastName" type="text" name="lastName" value="<?php getInputValue('lastName') ?>" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$emailDoNotMatch) ?>
						<?php echo $account->getError(Constants::$emailInvalid) ?>
						<?php echo $account->getError(Constants::$emailTaken) ?>
						<label for="email">Email adresa</label>
						<input id="email" name="email" type="email" value="<?php getInputValue('email') ?>" required>
					</p>

					<p>
						<label for="email2">Potvrdi email adresu</label>
						<input id="email2" name="email2" type="email" value="<?php getInputValue('email2') ?>" required>
					</p>


					<p>
						<?php echo $account->getError(Constants::$passwordDoNoMatch) ?>
						<?php echo $account->getError(Constants::$passwordNotAlphanumeric) ?>
						<?php echo $account->getError(Constants::$passwordCharacters) ?>
						<label for="password">Lozinka</label>
						<input id="password" type="password" name="password" placeholder="vaša lozinka" required>
					</p>

					<p>
						<label for="password2">Potvrdi lozinku</label>
						<input id="password2" type="password" name="password2" placeholder="vaša lozinka" required>
					</p>	

					<button type="submit" name="registerButton">Izradi račun</button>	

					<div class="hasAccountText">			
						<span id="hideRegister">Već imaš račun? Prijavi se ovdje.</span>
					</div>

				</form>

			</div>

			<div id="loginText">
				<h1>Tvoja glazba, bilo gdje</h1>
				<h2>Veliki izbor pjesama, potpuno besplatno.</h2>
				<ul>
					<li>Otkrij novu glazbu</li>
					<li>Kreiraj playliste</li>
					<li>Prati svoje omiljene glazbenike</li>
				</ul>
			</div>

		</div>
	</div>	
</body>
</html>