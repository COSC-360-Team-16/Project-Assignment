<!DOCTYPE html>
<html>
	<head lang = "en">
		<meta charset="UTF-8">
			<title>COSC360Project</title>
			<link rel="stylesheet" href="gameinformation.css" />
		</head>
		<body>
			<div class = "header_wrap">
				<div class="header_top">
					<div class center>
						<div class="home">
							<a href = "MainPage.php">Home</a>
						</div>
						<div class="head_top_rt" id = "users">
							<img src = "https://cdn.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png">
								<?php
								if (session_status() === PHP_SESSION_NONE) {
									session_start();
								}
								$loggedOn = $_SESSION["uname"];
								if (!empty($loggedOn)){
									echo '<a href="../profilePage.php" class="login">My Profile</a>';
								} else {
									echo '<a href = "../signin.html" class = "login">Login</a>
			<a href = "../registration.html" class = "register">Register</a>';
								}
							   ?>
							</div>
						</div>
					</div>
					<h1 style = "text-align: center;">Sea of Thieves</h1> 
					<p>Sea of Thieves is a 2018 action-adventure game developed by Rare and published by Microsoft Studios. The player assumes the role of a pirate who completes voyages from different trading companies in order to become the ultimate pirate legend. Sea of Thieves is a first-person multiplayer video game in which players cooperate with each other to explore an open world via a pirate ship. The game is described as a "shared world adventure game", which means groups of players will encounter each other regularly during their adventures, sometimes forming alliances, sometimes going head-to-head.</p>  
					<img src = "image//picture/sea2.jpg" alt = "Sea of Thieves" height="350px" width="auto">
						<img src = "image//picture/sea1.jpg" alt = "Sea of Thieves" height="500px" width="auto">
							<div class = "footer">
								<p>
									<a href = "../aboutus.php">About us</a>
								</p>
							</div>
						</body>
					</html>