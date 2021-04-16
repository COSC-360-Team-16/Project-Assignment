<!DOCTYPE html>
<head lang = "en">
    <meta charset="UTF-8">
    <title>COSC360Project</title>
    <link rel="stylesheet" href="css/profilePage.css" />
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
					session_start();
					if (isset($_SESSION["uname"])){
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
                <form action = " " method = "get" target = "_blank" autocomplete= "off" id="sgames">
                    <input type = "text" placeholder="GTA 5" name = "search1">
                    <button type="submit" class="but" style="background: rgb(0, 0, 0);"><i></i></button>
            </div>
           </div>

       </div>
       <div class="nav">
        <div class="center">
            <ul>
                <li><a href=" ">News<span class="hide"></span></a></li>
                <li><a href="">Games<span class="hide"></span></a></li>
                <li><a href="">Forum<span class="hide"></span></a></li>
            </ul>
            <ol>
                <li><a href="" class="as">Home</a></li>
                <li><a href="">Single-Player Game</a></li>
                <li><a href="">Online Game</a></li>
            </ol>
        </div>
    </div>    
   </div>
   <div class='profile'>
   <?php
		if (session_status() === PHP_SESSION_NONE) {
			session_start();
		}
		$loggedOn = $_SESSION["uname"];
		if (!isset($_SESSION["uname"])){		
			$host = "localhost";
			$database = "project";
			$user = "project"; 
			$password = "c0sc360"; 

			$connection = mysqli_connect($host, $user, $password, $database);
			$error = mysqli_connect_error();
			if($error != null){
				$output = "<p>Unable to connect to database!</p>";
				exit($output);
			}else{
				$sql = "SELECT userName, profilePic, administrator FROM users WHERE userName = '$loggedOn';";
				$results = mysqli_query($connection,$sql);
				$row = mysqli_fetch_assoc($results);
				$uName = $row['userName'];
				$profile = $row['profilePic'];
				$administrator = $row['administrator'];
				if ($administrator) {
					echo "<img id='profileImage' src='$profile' alt='profilePicture' width='100' height='100'/><h1>$uName</h1><p><a href='Admin.php'>Admin tools</a></p><p id='posts'>Posts placeholder</p>";
				} else {
					echo "<img id='profileImage' src='$profile' alt='profilePicture' width='100' height='100'/><h1>$uName</h1><p id='posts'>Posts placeholder</p>";
				}
			}
		} else {
			header("Location: signin.html");
		}
   ?>
   </div>
</body>
