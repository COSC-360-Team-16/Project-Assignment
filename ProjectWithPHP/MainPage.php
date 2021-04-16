<!DOCTYPE html>
<html>
<head lang = "en">
    <meta charset="UTF-8">
    <title>COSC360Project</title>
    <link rel="stylesheet" href="css/mainpage.css" />
	<script>
	window.onload = function() {
		
	}
	</script>
</head>
<body>
<div>
   <div class = "header_wrap">
       <div class="header_top">
           <div class center>
               <div class="home">
                   <a href = "MainPage.html">Home</a>
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
            <a href = "MainPage.html">
                <img src = "images/logo.PNG" alt = "logo" height="130px" width="130px">
            </a>
            <div class = "search">
                <form action = " " method = "get" target = "_blank" autocomplete= "off" id="sgames">
                    <input type = "text" placeholder="GTA 5" name = "search1">
                    <button type="submit" class="but" style="background: rgb(0, 0, 0);"><i></i></button>
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
                <li><a href="" class="as">Home</a></li>
                <li><a href="">Single-Player Game</a></li>
                <li><a href="">Online Game</a></li>
            </ol>
        </div>
    </div>
    <div class = "content" style = "margin-top: 90px;">
        <div class = "body1">
            <div class = "lis lis1">
            <a id = "p">Popular Single-Player Game</a>
            <a href = "" class = "red">Cyberpunk 2077<i></i></a>
            <a href = "" >Assassin's Creed Odyssey<i></i></a>
            <a href = "" class = "red">Far Cry 5<i></i></a>
            <a href = "" >Ghostrunner<i></i></a>
            <a href = "" class = "red">Hades<i></i></a>
            <a href = "" >Metro Exodus<i></i></a>
            <a href = "" class = "red">MO:Astray<i></i></a>
            <a href = "" >Outlast 2<i></i></a>
            <a href = "" class = "red">Dyson Sphere Program<i></i></a>
            </div>
            <div class = "lis lis2">
                <a id = "p">Popular Online Game</a>
                <a href = "" class = "red">League of Legends<i></i></a>
                <a href = "" >CS:GO<i></i></a>
                <a href = "" class = "red">GTA 5<i></i></a>
                <a href = "" >Raft<i></i></a>
                <a href = "" class = "red">Dota2<i></i></a>
                <a href = "" >Green Hell<i></i></a>
                <a href = "" class = "red">Overcooked2<i></i></a>
                <a href = "" >Sea of Thieves<i></i></a>
                <a href = "" class = "red">NBA2K21<i></i></a>
                <a href = "" >Fall Guys<i></i></a>
            </div>
        </div>
        <div class = "body2">
            <div class = "Min2_L">
                            <div class = "lis">
                            <p>TOP 10</p>
                            <ol>
                                <li><a href = "" class = "red">League of Legends<i></i></a></li>
                                <li><a href = "" class = "red">League of Legends<i></i></a></li>
                                <li><a href = "" class = "red">League of Legends<i></i></a></li>
                                <li><a href = "" class = "red">League of Legends<i></i></a></li>
                                <li><a href = "" class = "red">League of Legends<i></i></a></li>
                            </ol>
                            </div>
                            
            </div>
            <div class = "Min2_R">
                <div class = "rtwrap">
                    <a href = " " class = r_a>
                        GTA 5 NEWS
                    </a></br>
                    <a href = " " class = r_a>
                        GTA 5 NEWS
                    </a>
                </div>
                <div class = "Listwrap">
                    <div class = "lis" style = "display: block;">
                        <ul>
                            <li>
                                <i></i>
                                <a href = " " class = "hot_newnews">asdasdkajshdk</a>
                                <span>date</span>
                            </li>
                            <li>
                                <i></i>
                                <a href = " " class = "hot_newnews">asdasdkajshdk</a>
                                <span>date</span>
                            </li>
                            <li>
                                <i></i>
                                <a href = " " class = "hot_newnews">asdasdkajshdk</a>
                                <span>date</span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <i></i>
                                <a href = " " class = "hot_newnews">asdasdkajshdk</a>
                                <span>date</span>
                            </li>
                            <li>
                                <i></i>
                                <a href = " " class = "hot_newnews">asdasdkajshdk</a>
                                <span>date</span>
                            </li>
                            <li>
                                <i></i>
                                <a href = " " class = "hot_newnews">asdasdkajshdk</a>
                                <span>date</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>