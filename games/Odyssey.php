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
        <h1 style = "text-align: center;">Assassin's Creed Odyssey</h1> 
        <p>Assassin's Creed Odyssey is an action role-playing video game developed by Ubisoft Quebec and published by Ubisoft. It is the eleventh major installment, and 21st overall, in the Assassin's Creed series and the successor to 2017's Assassin's Creed Origins. Set in the years 431–422 BC, the plot tells a mythological history of the Peloponnesian War between Athens and Sparta. Players control a male or female mercenary who fights on both sides of the conflict as they attempt to find their family. </p>  
        <img src = "picture/ody1.png" alt = "Odyssey" height="auto" width="auto">
        <p>Assassin's Creed Odyssey was released worldwide for Microsoft Windows, PlayStation 4, Xbox One, and Nintendo Switch on October 5, 2018, with a Stadia version launching alongside the service in 2019.</p>
        <img src = "picture/ody2.jpg" alt = "Odyssey" height="500px" width="auto">
        <div class = "footer">
            <p><a href = "../aboutus.php">About us</a></p>
        </div>
    </body>
</html>