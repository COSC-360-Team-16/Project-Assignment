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
        <h1 style = "text-align: center;">Ghostrunner</h1> 
        <p>Ghostrunner is a cyberpunk action video game developed by Polish development studio One More Level and co-published by All In! Games and 505 Games. It was released for Microsoft Windows, PlayStation 4 and Xbox One in October 2020, and Nintendo Switch in November 2020 and will also release for PlayStation 5 and Xbox Series X/S in 2021. </p>  
        <img src = "picture/header.jpg" alt = "Ghostrunner" height="auto" width="auto">
        <p>Ghostrunner is co-produced by 3D Realms and co-developed by Slipgate Ironworks. As Jack the Ghostrunner, the player must traverse dangerous environments by dashing, jumping, wall-running, and grappling. The player will also encounter enemies, which must be handled carefully, as both enemies and the player can be killed in one hit. Jack can use a mechanic called Sensory Boost, allowing him to slow down time and dodge and deflect bullets in midair. As the player progresses through the story, they will unlock new abilities and upgrades, which they can apply using tetramino-like pieces on a grid system.</p>
        <img src = "picture/Ghostrunner2.jpg" alt = "Ghostrunner" height="500px" width="auto">
        <div class = "footer">
            <p><a href = "../aboutus.php">About us</a></p>
        </div>
    </body>
</html>