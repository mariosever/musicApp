
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

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<h1>Spotify</h1>


	<div id="nowPlayingBarContainer">

		<div id="nowPlayingBar">
			
			<div id="nowPlayingLeft">
				<div class="content">
					<span class="albumLink">
						<img src="https://i.ytimg.com/vi/rb8Y38eilRM/maxresdefault.jpg" class="albumArtwork">		
					</span>

					<div class="trackInfo">
						
						<span class="trackName">				
							<span>Happy Birthday</span>
						</span>

						<span class="artistName">				
							<span>My Name</span>
						</span>

					</div>

				</div>

			</div>

			<div id="nowPlayingCenter">

				<div class="content playerControls">
					
					<div class="buttons">

						<button class="controlButton shuffle" title="Shuffle button">
							<img src="assets/images/icons/shuffle.png" alt="Shuffle">
						</button>

						<button class="controlButton previous" title="Previous button">
							<img src="assets/images/icons/previous.png" alt="Previous">
						</button>

						<button class="controlButton play" title="Play button">
							<img src="assets/images/icons/play.png" alt="Play">
						</button>

						<button class="controlButton pause" title="Pause button" style="display: none;">
							<img src="assets/images/icons/pause.png" alt="Pause">
						</button>

						<button class="controlButton next" title="Next button">
							<img src="assets/images/icons/next.png" alt="Next">
						</button>

						<button class="controlButton repeat" title="Repeat button">
							<img src="assets/images/icons/repeat.png" alt="Repeat">
						</button>
						
					</div>

					<div class="playbackBar">
						
						<span class="progressTime current">0.00</span>
						<div class="progressBar">
							<div class="progressBarBg">
								<div class="progress"></div>		
							</div>
						</div>
						<span class="progressTime remaining">0.00</span>

					</div>

				</div>

			</div>

			<div id="nowPlayingRight">
				

			</div>

		</div>

	</div>
</body>
</html>