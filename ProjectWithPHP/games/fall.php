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
									echo '<a href="../profilePage.php" class="login">My Profile</a>';
								} else {
									echo '<a href = "../signin.html" class = "login">Login</a>
			<a href = "../registration.html" class = "register">Register</a>';
								}
							   ?>
                    </div>
                </div>
            </div>
        <h1 style = "text-align: center;">Fall Guys</h1> 
        <p>Fall Guys: Ultimate Knockout is a platform battle royale game developed by Mediatonic and published by Devolver Digital. It was released for Microsoft Windows and PlayStation 4 on 4 August 2020. The game is planned for release on Nintendo Switch, Xbox One, and Xbox Series X/S in mid 2021.</p>  
        <img src = "picture/fall1.jpg" alt = "Fall Guys" height="350px" width="auto">
        <p>Up to 60 players control jelly bean-like creatures and compete against each other in a series of challenges, such as obstacle courses or tag. Many different courses have been added since the game was first released; the minority are team-based, while many require not falling into lava on a spinning, floating platform with obstacles designed to knock players in and waiting for a specified number of others to be eliminated, but most are obstacle courses that involve players racing to get to the finish line as soon as possible, lest they are annihilated—starting at 40, there is a limited number of players that can qualify, and with each round as the game progresses, the number lowers, eventually getting down to one, the player who is crowned the winner.</p>
        <img src = "picture/fall2.jpg" alt = "Fall Guys" height="500px" width="auto">
        <div class = "footer">
            <p><a href = "../aboutus.php">About us</a></p>
        </div>
    </body>
</html>