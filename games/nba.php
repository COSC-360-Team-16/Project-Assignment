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
        <h1 style = "text-align: center;">NBA2K21</h1> 
        <p>NBA 2K21 is a basketball game simulation video game that was developed by Visual Concepts and published by 2K Sports, based on the National Basketball Association (NBA). It is the 22nd installment in the NBA 2K franchise and the successor to NBA 2K20. The game was released on September 4, 2020 for Microsoft Windows, Nintendo Switch, PlayStation 4, Xbox One, and Stadia, and on November 12, 2020 for PlayStation 5 and Xbox Series X and Series S. The PS4, Switch, Xbox One, and PC released to mixed reviews, with critics criticizing the lack of originality in the gameplay, as well as microtransactions and bugs.</p>  
        <img src = "picture/nba1.jpg" alt = "NBA2K21" height="350px" width="auto">
        <p>A staple of the series, MyCareer, returns as one of the available game modes. MyCareer is a career mode in which the player creates their own customizable basketball player and plays through their basketball career. Players may make a male or female player, although female is only available on next-gen consoles. The Neighborhood also returns to MyCareer, as 2K Beach, in which players can customize their wardrobe, get haircuts and tattoos, and purchase boosts. They can also do their workouts and run drills to improve their attributes at their current team's practice facility. Progress in MyCareer may not carry over across generations, due to some changes made exclusively for next-gen.</p>
        <img src = "picture/nba2.jpg" alt = "NBA2K21" height="500px" width="auto">
        <div class = "footer">
            <p><a href = "../aboutus.php">About us</a></p>
        </div>
    </body>
</html>