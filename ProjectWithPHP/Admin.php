<!DOCTYPE html>
<head lang = "en">
    <meta charset="UTF-8">
    <title>COSC360Project</title>
    <link rel="stylesheet" href="css/profilePage.css" />
	<script>
		function search() {
		  // Declare variables
		  var input, filter, table, tr, td, i, txtValue;
		  input = document.getElementById("myInput");
		  filter = input.value.toUpperCase();
		  table = document.getElementById("users");
		  tr = table.getElementsByTagName("tr");

		  // Loop through all table rows, and hide those who don't match the search query
		  for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[0];
			if (td) {
			  txtValue = td.textContent || td.innerText;
			  if (txtValue.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
				console.log("found a match");
			  } else {
				tr[i].style.display = "none";
				console.log("noMatch");
			  }
			}
		  }
		}
</script>
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
		if (!empty($loggedOn)){		
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
					echo "<img id='profileImage' src='$profile' alt='profilePicture' width='100' height='100'/><br><br><br><h1>$uName</h1><input type='text' class='posts' id='myInput' onkeyup='search()' placeholder='Search for users'>";
					echo "<table id='users' class='posts'>";
					$users = "SELECT userName, email FROM users;";
					$result = mysqli_query($connection, $users);
					while ($row = mysqli_fetch_assoc($result)){
						echo "<tr><td>".$row['userName']."</td><td>".$row['email']."</td></tr>";
					}
					mysqli_free_result($result);
					echo "</table>";
				} else {
					header("Location: MainPage.php");
				}
			}
		} else {
			header("Location: signin.html");
		}
   ?>
   </div>
</body>
