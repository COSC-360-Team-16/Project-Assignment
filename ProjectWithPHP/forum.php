<!DOCTYPE html>
<html>
	<head lang = "en">
		<meta charset="UTF-8">
			<title>COSC360Project</title>
			<link rel="stylesheet" href="css/Forum.css" />
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
										<button type="submit" class="but" onclick = "gotoPage()" style="background: rgb(0, 0, 0);">
											<i/>
										</button>
									</div>
								</div>

							</div>
							<div class="nav">
								<div class="center">
									<ul>
										<li>
											<a href="newsPage.php">News<span class="hide"/>
											</a>
										</li>
										<li>
											<a href="games.php">Games<span class="hide"/>
											</a>
										</li>
										<li>
											<a href=" ">Forum<span class="hide"/>
											</a>
										</li>
									</ul>
									<ol>
										<li>
											<a href="MainPage.php" class="as">Home</a>
										</li>
										<li>
											<a href="">Single-Player Game</a>
										</li>
										<li>
											<a href="">Online Game</a>
										</li>
									</ol>
								</div>
							</div>
							<?php
							$loggedOn = $_SESSION["uname"];
							if (isset($_SESSION["uname"])){
								echo '							<div id = "content">
								<p/>
								<br>
									<p>Please login first.</p>
									<p>
										<a href = "signin.html">Go to login</a>
									</p>
									<p>If you do not have an account, please register an account.</p>
									<p>
										<a href = "registration.html">Go to register</a>
									</p>   
								</div>
								<div class = "footer">
									<p>
										<a href = "aboutus.html">About us</a>
									</p>
								</div>
								</div>';
							} else {
								echo '<p><a href = "" >news title</a></p></div><div class = "footer"><p><a href = "aboutusLogin.html">About us</a></p></div>';
							}
							?>
							</html>