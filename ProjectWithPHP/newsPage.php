<!DOCTYPE html>
<head lang = "en">
    <meta charset="UTF-8">
    <title>COSC360Project</title>
    <link rel="stylesheet" href="css/newsPage.css" />
</head>
<body>
   <div class = "header_wrap">
       <div class="header_top">
           <div class center>
               <div class="home">
                   <a href = "MainPage.php">Home</a>
               </div>
               <div class="head_top_rt" id = "users">
                   <img src = "https://cdn.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png">
				   <?php
					if (session_status() === PHP_SESSION_NONE) {
						session_start();
					}
					$loggedOn = $_SESSION["uname"];
					if (!empty($loggedOn)){
						echo '<a href="profilePage.php" class="login">My Profile</a>';
					} else {
						echo '<a href = "signin.html" class = "login">Login</a><a href = "registration.html" class = "register">Register</a>';
					}
				   ?>
               </div>
           </div>
       </div>
       <div class = "header">
           <div class = "center">
            <a href = "MainPage.php">
                <img src = "images/logo.PNG" alt = "logo" height="130px" width="130px">
            </a>
            <div class = "search">
                <input type = "text" id = "myInput" placeholder="GTA 5" name = "search1">
                    <button type="submit" class="but" style="background: rgb(0, 0, 0);"><i></i></button>
            </div>
           </div>

       </div>
       <div class="nav">
        <div class="center">
            <ul>
                <li><a href="newsPage.php">News<span class="hide"></span></a></li>
                <li><a href="games.php">Games<span class="hide"></span></a></li>
                <li><a href="forum.html">Forum<span class="hide"></span></a></li>
            </ul>
            <ol>
                <li><a href="MainPage.php" class="as">Home</a></li>
                <li><a href="">Single-Player Game</a></li>
                <li><a href="">Online Game</a></li>
            </ol>
        </div>
    </div>    
   </div>
   
   <div class="columnLeft">
        <h1>Games</h1>
        <div id = 'post'>
            <h2 id='postheader'>NBA 2k21</h2>
            <p>NBA 2K21 is a basketball game simulation video game that was developed by Visual Concepts and published by 2K Sports, based on the National Basketball Association (NBA). It is the 22nd installment in the NBA 2K franchise and the successor to NBA 2K20. The game was released on September 4, 2020 for Microsoft Windows, Nintendo Switch, PlayStation 4, Xbox One, and Stadia, and on November 12, 2020 for PlayStation 5 and Xbox Series X and Series S. The PS4, Switch, Xbox One, and PC released to mixed reviews, with critics criticizing the lack of originality in the gameplay, as well as microtransactions and bugs.</p>
            <img id="postimg" src="images/NBA1.jpg" alt="Cyberpunk2077"></a>
            <img id="postimg" src="images/NBA2.jpg" alt="Cyberpunk2077"></a>
            <p>A staple of the series, MyCareer, returns as one of the available game modes. MyCareer is a career mode in which the player creates their own customizable basketball player and plays through their basketball career. Players may make a male or female player, although female is only available on next-gen consoles. The Neighborhood also returns to MyCareer, as 2K Beach, in which players can customize their wardrobe, get haircuts and tattoos, and purchase boosts. They can also do their workouts and run drills to improve their attributes at their current team's practice facility. Progress in MyCareer may not carry over across generations, due to some changes made exclusively for next-gen.</p>
        </div> 
        <div id = 'post'>
            <h2 id='postheader'>Cyberpunk 2077</h2>
            <p>Cyberpunk 2077 is a 2020 action role-playing video game developed and published by CD Projekt. The story takes place in Night City, an open world set in the Cyberpunk universe. Players assume the first-person perspective of a customisable mercenary known as V, who can acquire skills in hacking and machinery with options for melee and ranged combat.</p>
            <img id="postimg" src="images/Cyberpunk1.jpg" alt="Cyberpunk2077"></a>
            <img id="postimg" src="images/Cyberpunk2.jpg" alt="Cyberpunk2077"></a>
            <p>CD Projekt released Cyberpunk 2077 for PlayStation 4, Stadia, Windows, and Xbox One on 10 December 2020, with PlayStation 5 and Xbox Series X/S versions planned to follow in 2021.</p>
        </div>     
        <div id = 'post'>
            <h2 id='postheader'>Fall Guys</h2>
            <p>Fall Guys: Ultimate Knockout is a platform battle royale game developed by Mediatonic and published by Devolver Digital. It was released for Microsoft Windows and PlayStation 4 on 4 August 2020. The game is planned for release on Nintendo Switch, Xbox One, and Xbox Series X/S in mid 2021.</p>
            <img id="postimg" src="images/fallguys1.jpg" alt="Fall Guys"></a>
            <img id="postimg" src="images/fallguys2.jpg" alt="Fall Guys" width="400"></a>
            <p>Up to 60 players control jelly bean-like creatures and compete against each other in a series of challenges, such as obstacle courses or tag. Many different courses have been added since the game was first released; the minority are team-based, while many require not falling into lava on a spinning, floating platform with obstacles designed to knock players in and waiting for a specified number of others to be eliminated, but most are obstacle courses that involve players racing to get to the finish line as soon as possible, lest they are annihilated—starting at 40, there is a limited number of players that can qualify, and with each round as the game progresses, the number lowers, eventually getting down to one, the player who is crowned the winner.</p>
        </div>  
        <div id = 'post'>
            <h2 id='postheader'>Assasin's Creed Odyssey</h2>
            <p>Assassin's Creed Odyssey is an action role-playing video game developed by Ubisoft Quebec and published by Ubisoft. It is the eleventh major installment, and 21st overall, in the Assassin's Creed series and the successor to 2017's Assassin's Creed Origins. Set in the years 431–422 BC, the plot tells a mythological history of the Peloponnesian War between Athens and Sparta. Players control a male or female mercenary who fights on both sides of the conflict as they attempt to find their family. </p>
            <img id="postimg" src="images/AC1.png" alt="Cyberpunk2077"></a>
            <img id="postimg" src="images/AC2.jpg" alt="Cyberpunk2077"></a>
            <p>Assassin's Creed Odyssey was released worldwide for Microsoft Windows, PlayStation 4, Xbox One, and Nintendo Switch on October 5, 2018, with a Stadia version launching alongside the service in 2019.</p>
        </div>  
        <div id = 'post'>
            <h2 id='postheader'>Overcooked2</h2>
            <p>Overcooked 2 (stylised as Overcooked! 2) is a cooperative cooking simulation video game developed by Team17 alongside Ghost Town Games, and published by Team17. The sequel to Overcooked!, it was released for Microsoft Windows, Nintendo Switch, PlayStation 4 and Xbox One on August 7, 2018. Overcooked: All You Can Eat, a compilation game that includes both Overcooked and Overcooked 2, was released for PlayStation 5 and Xbox Series X/S.</p>
            <img id="postimg" src="images/OC1.jpg" alt="Cyberpunk2077"></a>
            <img id="postimg" src="images/OC2.jpg" alt="Cyberpunk2077"></a>
            <p>In the cooking simulator game Overcooked 2, teams of up to four players cooperatively prepare and cook orders in absurd restaurants. Players gather, chop, and cook ingredients, combine them on plates, serve dishes, and wash dishes. Between coordinating short orders and bumping into each other's characters, the game tends to overwhelm. The sequel builds atop the original game, which was released in 2016, with new interactive levels, restaurant themes, chef costumes, and recipes. Some levels have moving floors and other obstacles that complicate the cooking process, including portals, moving walkways, and impassable fires. Other levels transition between settings and recipes, such as one that begins with preparing salads in a hot air balloon and ends crash-landed in a sushi kitchen. The sequel introduces ingredient tossing, such that players can throw items to another chef or pot from far away, and online multiplayer, in which teams can connect either across a local wireless network or through online matchmaking.</p>
        </div> 
        
   </div>
   <div class="columnRight">
        <h1>Hot Topics</h1>
        <div id = 'post'>
            <h2 id="postheader">Wild Rift beta released March 28</h2>
            <p>Popular MOBA from Riot Games finally launched on Mobile</p>
            <img id="postimg" src="images/League1.jpg" alt="Cyberpunk2077"></a>
            <img id="postimg" src="images/League2.png" alt="Cyberpunk2077"></a>
            <p></p>
        </div>
        <div id = 'post'>News</div>  
        <div id = 'post'>More news</div>  
        <div id = 'post'>Even more news</div> 
</div>
<div class = "footer">
    <p><a href = "aboutus.html">About us</a></p>
</div>
</body>
