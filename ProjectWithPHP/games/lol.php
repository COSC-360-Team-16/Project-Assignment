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
                        <a href = "../MainPage.php">Home</a>
                    </div>
                    <div class="head_top_rt" id = "users">
                        <img src = "https://cdn.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png">
								<?php
								if (session_status() === PHP_SESSION_NONE) {
									session_start();
								}
								if (isset($_SESSION["uname"])){
						echo '<a href="profilePage.php" class="login">My Profile</a><a href="logout.php">Log Out</a>';
								} else {
									echo '<a href = "../signin.html" class = "login">Login</a>
			<a href = "../registration.html" class = "register">Register</a>';
								}
							   ?>
                    </div>
                </div>
            </div>
        <h1 style = "text-align: center;">League of Legends</h1> 
        <p>League of Legends is a 2009 multiplayer online battle arena video game developed and published by Riot Games. Inspired by Defense of the Ancients, a custom map for Warcraft III, Riot's founders sought to develop a stand-alone game in the same genre. Since its release in October 2009, the game has been free-to-play, and is monetized through purchasable character customization. The game is available for Microsoft Windows and macOS.</p>  
        <img src = "picture/LOL1.jpg" alt = "League of Legends" height="350px" width="auto">
        <p>In the game, two teams of five players battle in player versus player combat, each team occupying and defending their own half of the map. Each of the ten players controls a character, known as a "champion", with unique abilities and differing styles of play. During a match, champions become more powerful by collecting experience points and purchasing items to defeat the opposing team. In the game's main mode, Summoner's Rift, a team wins by pushing through to the enemy base and destroying their "nexus", a large structure located within it.</p>
        <img src = "picture/lol2.png" alt = "League of Legends" height="500px" width="auto">
        <div class = "footer">
            <p><a href = "../aboutus.php">About us</a></p>
        </div>
    </body>
</html>