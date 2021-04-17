<!DOCTYPE html>
<html>
    <head lang = "en">
        <meta charset="UTF-8">
        <title>COSC360Project</title>
        <link rel="stylesheet" href="css/games.css" />
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
					if (isset($_SESSION["uname"])){
						echo '<a href="profilePage.php" class="login">My Profile</a><a href="logout.php">Log Out</a>';
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
                        <button type="submit" class="but" onclick = "gotoPage()" style="background: rgb(0, 0, 0);"><i></i></button>
                </div>
               </div>
    
        </div>
        <div class="nav">
            <div class="center">
                <ul>
                    <li><a href="newsPage.php">News<span class="hide"></span></a></li>
                    <li><a href="games.php">Games<span class="hide"></span></a></li>
                    <li><a href="forum.php">Forum<span class="hide"></span></a></li>
                </ul>
                <ol>
                    <li><a href="MainPage.php" class="as">Home</a></li>
                    <li><a href="">Single-Player Game</a></li>
                    <li><a href="">Online Game</a></li>
                </ol>
            </div>
        </div>
        <div>
            <table style = "width: 100%;">
            <tr>
                <td>
                    <img src = "games/picture/csgo1.jpg" alt = "Counter-Strike: Global Offensive" height="350px" width="auto">
                    <figcaption><a href = "games/csgo.php">CSGO</a></figcaption>
                </td>
                <td>
                    <img src = "games/picture/fall1.jpg" alt = "Fall Guys" height="350px" width="auto">
                    <figcaption><a href = "games/fall.php">Fall Guys</a></figcaption>
                </td>
            </tr>
            <tr>
                <td>
                    <img src = "games/picture/dota1.jpg" alt = "Dota2" height="350px" width="auto">
                    <figcaption><a href = "games/dota2.php">Dota2</a></figcaption>
                </td>
                <td>
                    <img src = "games/picture/DSP1.png" alt = "Dyson Sphere Program" height="350px" width="auto">
                    <figcaption><a href = "games/DSP.php">Dyson Sphere Program</a></figcaption>
                </td>
            </tr>
            <tr>
                <td>
                    <img src = "games/picture/cyber1.jpg" alt = "Cyberpunk 2077" height="350px" width="auto">
                    <figcaption><a href = "games/cyberpunk2077.php">Cyberpunk 2077</a></figcaption>
                </td>
                <td>
                    <img src = "games/picture/Outlast2.png" alt = "Outlast2" height="350px" width="auto">
                    <figcaption><a href = "games/outlast2.php">Outlast2</a></figcaption>
                </td>
            </tr>
            <tr>
                <td>
                    <img src = "games/picture/farcry1.jpg" alt = "Far Cry 5" height="350px" width="auto">
                    <figcaption><a href = "games/farcry5.php">Far Cry 5</a></figcaption>
                </td>
                <td>
                    <img src = "games/picture/header.jpg" alt = "Ghostrunner" height="350px" width="auto">
                    <figcaption><a href = "games/Ghostrunner.php">Ghostrunner</a></figcaption>
                </td>
            </tr>
            <tr>
                <td>
                    <img src = "games/picture/green1.jpg" alt = "Green Hell" height="350px" width="auto">
                    <figcaption><a href = "games/Green.php">Green Hell</a></figcaption>
                </td>
                <td>
                    <img src = "games/picture/gta1.jpg" alt = "GTA5" height="350px" width="auto">
                    <figcaption><a href = "games/GTA5.php">GTA5</a></figcaption>
                </td>
            </tr>
            <tr>
                <td>
                    <img src = "games/picture/hade1.jpg" alt = "Hades" height="350px" width="auto">
                    <figcaption><a href = "games/Hades.php">Hades</a></figcaption>
                </td>
                <td>
                    <img src = "games/picture/LOL1.jpg" alt = "LOL" height="350px" width="auto">
                    <figcaption><a href = "games/lol.php">League of Legends</a></figcaption>
                </td>
            </tr>
            <tr>
                <td>
                    <img src = "games/picture/metro1.jpg" alt = "Metro Exodus" height="350px" width="auto">
                    <figcaption><a href = "games/Metro.php">Metro Exodus</a></figcaption>
                </td>
                <td>
                    <img src = "games/picture/mo1.jpg" alt = "Mo" height="350px" width="auto">
                    <figcaption><a href = "games/mo.php">MO:Astray</a></figcaption>
                </td>
            </tr>
            <tr>
                <td>
                    <img src = "games/picture/nba1.jpg" alt = "NBA2K21" height="350px" width="auto">
                    <figcaption><a href = "games/nba.php">NBA2K21</a></figcaption>
                </td>
                <td>
                    <img src = "games/picture/sea2.jpg" alt = "sea" height="350px" width="auto">
                    <figcaption><a href = "games/sea.php">Sea of Thieves</a></figcaption>
                </td>
            </tr>
            <tr>
                <td>
                    <img src = "games/picture/overcooked1.jpg" alt = "Overcooked2" height="350px" width="auto">
                    <figcaption><a href = "games/Over.php">Overcooked2</a></figcaption>
                </td>
                <td>
                    <img src = "games/picture/raft1.jpg" alt = "Raft" height="350px" width="auto">
                    <figcaption><a href = "games/raft.php">Raft</a></figcaption>
                </td>
            </tr>
            <tr>
                <td>
                    <img src = "games/picture/ody1.png" alt = "Odyssey" height="350px" width="auto">
                    <figcaption><a href = "games/Odyssey.php">Assassin's Creed Odyssey</a></figcaption>
                </td>
            </tr>
            </table>
        </div>
        <div class = "footer">
            <p><a href = "aboutus.php">About us</a></p>
        </div>
</html>