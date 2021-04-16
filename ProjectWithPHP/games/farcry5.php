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
        <h1 style = "text-align: center;">Far Cry 5</h1> 
        <p>Far Cry 5 is a 2018 first-person shooter game developed by Ubisoft Montreal and Ubisoft Toronto and published by Ubisoft. It is the fifth main installment in the Far Cry series.</p>  
        <img src = "picture/farcry1.jpg" alt = "Far Cry 5" height="auto" width="auto">
        <p>The game takes place in Hope County, a fictional region of Montana, United States. The main story revolves around the Project at Eden's Gate, a doomsday cult that has taken over the county at the command of its charismatic and powerful leader, Joseph Seed. Players control an unnamed junior deputy sheriff who becomes trapped in Hope County and must work alongside factions of a resistance to liberate the county from the despotic rule of the Seeds and Eden's Gate. Gameplay focuses on combat and exploration; players battle enemy soldiers and dangerous wildlife using a wide array of weapons. The game features many elements found in role-playing games, such as a branching storyline and side quests. The game also features a map editor, a co-operative multiplayer mode, and a competitive multiplayer mode. 
            The game was released in March 2018 for Microsoft Windows, PlayStation 4 and Xbox One.
            </p>
        <img src = "picture/farcry2.jpg" alt = "Far Cry 5" height="500px" width="auto">
        <div class = "footer">
            <p><a href = "../aboutus.php">About us</a></p>
        </div>
    </body>
</html>