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
        <h1 style = "text-align: center;">Overcooked2</h1> 
        <p>Overcooked 2 (stylised as Overcooked! 2) is a cooperative cooking simulation video game developed by Team17 alongside Ghost Town Games, and published by Team17. The sequel to Overcooked!, it was released for Microsoft Windows, Nintendo Switch, PlayStation 4 and Xbox One on August 7, 2018. Overcooked: All You Can Eat, a compilation game that includes both Overcooked and Overcooked 2, was released for PlayStation 5 and Xbox Series X/S.</p>  
        <img src = "picture/overcooked1.jpg" alt = "Overcooked2" height="350px" width="auto">
        <p>In the cooking simulator game Overcooked 2, teams of up to four players cooperatively prepare and cook orders in absurd restaurants. Players gather, chop, and cook ingredients, combine them on plates, serve dishes, and wash dishes. Between coordinating short orders and bumping into each other's characters, the game tends to overwhelm. The sequel builds atop the original game, which was released in 2016, with new interactive levels, restaurant themes, chef costumes, and recipes. Some levels have moving floors and other obstacles that complicate the cooking process, including portals, moving walkways, and impassable fires. Other levels transition between settings and recipes, such as one that begins with preparing salads in a hot air balloon and ends crash-landed in a sushi kitchen. The sequel introduces ingredient tossing, such that players can throw items to another chef or pot from far away, and online multiplayer, in which teams can connect either across a local wireless network or through online matchmaking.</p>
        <img src = "picture/overcooked2.jpg" alt = "Overcooked2" height="500px" width="auto">
        <div class = "footer">
            <p><a href = "../aboutus.php">About us</a></p>
        </div>
    </body>
</html>