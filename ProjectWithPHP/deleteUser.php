<?php
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
		session_start();
		$admin = $_SESSION["uname"];
		$toDelete = $_GET['uName'];
		$checkAdmin = "SELECT administrator FROM users WHERE userName='$admin';";
		$isAdmin = mysqli_query($connection, $checkAdmin);
		$row = mysqli_fetch_assoc($isAdmin);
		mysqli_free_result($isAdmin);
		if ($row['administrator']){
			echo $toDelete;
			$delete = "DELETE FROM users WHERE userName='$toDelete'";
			$deleted = mysqli_query($connection, $delete);
			if ($deleted) {
				echo "We did it";
			} else {
				echo "yo I messed up";
			}
		}
		mysqli_close($connection);
		header("Location: MainPage.php");
	}
?>