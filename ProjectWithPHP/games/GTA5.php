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
        <h1 style = "text-align: center;">GTA 5</h1> 
        <p>Grand Theft Auto Online is an online multiplayer action-adventure game developed by Rockstar North and published by Rockstar Games. It was released on 1 October 2013 for PlayStation 3 and Xbox 360, 18 November 2014 for PlayStation 4 and Xbox One, and 14 April 2015 for Microsoft Windows; PlayStation 5 and Xbox Series X/S versions are scheduled for late 2021. The game is the online component of Grand Theft Auto V. Set within the fictional state of San Andreas (based on Southern California), Grand Theft Auto Online allows up to 30 players[a] to explore its open world environment and engage in cooperative or competitive game matches.</p>  
        <img src = "picture/gta1.jpg" alt = "GTA 5" height="350px" width="auto">
        <p>The open-world design lets players freely roam San Andreas, which includes an open countryside and the fictional city of Los Santos (based on Los Angeles). Players control a silent protagonist in their journey to become a prominent crime figure, building up their own syndicate as they complete increasingly difficult tasks. Set both months before and a few years after the single-player campaign,[b] Grand Theft Auto Online comprises cooperative missions where multiple players complete tasks to advance the narrative. The game also features numerous side missions and events, including the more advanced "Heists", and various businesses that players can purchase with in-game money to generate income.</p>
        <img src = "picture/gta2.jpg" alt = "GTA 5" height="500px" width="auto">
        <div class = "footer">
            <p><a href = "../aboutus.php">About us</a></p>
        </div>
    </body>
</html>