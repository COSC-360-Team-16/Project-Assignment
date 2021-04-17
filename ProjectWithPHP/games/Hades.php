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
        <h1 style = "text-align: center;">Hades</h1> 
        <p>Hades is a roguelike action role-playing video game developed and published by Supergiant Games. It was released for Microsoft Windows, macOS, and Nintendo Switch on September 17, 2020, which followed an early access release in December 2018.</p>  
        <img src = "picture/hade1.jpg" alt = "Hades" height="auto" width="auto">
        <p>Players control Zagreus, the son of Hades, as he attempts to escape from Underworld to reach Mount Olympus, at times aided by gifts bestowed on him from the other Olympians. Each run challenges the player through a random series of rooms populated with enemies and rewards. The game has a hack and slash combat system; the player uses a combination of their main weapon attack, dash power, and magic ability to defeat them while avoiding damage to progress as far as possible. While Zagreus will often die, the player can use gained treasure to improve certain attributes or unlock new weapons and abilities to improve chances of escaping on subsequent runs.</p>
        <img src = "picture/hade2.jpg" alt = "Hades" height="500px" width="auto">
        <div class = "footer">
            <p><a href = "../aboutus.php">About us</a></p>
        </div>
    </body>
</html>