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
        <h1 style = "text-align: center;">Metro Exodus</h1> 
        <p>Metro Exodus is a first-person shooter video game developed by 4A Games and published by Deep Silver. It is the third installment in the Metro video game trilogy based on Dmitry Glukhovsky's novels, following the events of Metro 2033 and Metro: Last Light. It released in 2019 for Microsoft Windows, PlayStation 4, Xbox One and Stadia and in 2020 for Amazon Luna. A Linux and MacOS conversion is set to release on April 14, 2021. An enhanced version of the game is also planned to release for PlayStation 5 and Xbox Series X/S later in 2021. The game received positive reviews from critics.</p>  
        <img src = "picture/metro1.jpg" alt = "Metro Exodus" height="auto" width="auto">
        <p>Metro Exodus is a first-person shooter game with survival horror and stealth elements. Set in the post-apocalyptic wasteland of the former Russian Federation and Republic of Kazakhstan, the player must cope with the new hazards and engage in combat against mutated creatures as well as hostile humans. The player wields an arsenal of hand-made weaponry which can be customised through scavenging materials and a crafting system. The game features a mixture of linear levels and sandbox environments. It also includes a dynamic weather system, a day-night cycle, and environments that change along with the seasons as the story progresses. It is set over the course of one whole in-game year.</p>
        <img src = "picture/metro2.jpg" alt = "Metro Exodus" height="500px" width="auto">
        <div class = "footer">
            <p><a href = "../aboutus.php">About us</a></p>
        </div>
    </body>
</html>