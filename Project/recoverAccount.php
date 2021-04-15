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
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$email = $_POST['email'];
		$pass = $_POST['password'];
		if (empty($email) or empty($pass)) {
			echo "A field was left empty<br/><a href='javascript:history.go(-1)'>Return to previous page</a>";
		} else {
			$sql = "SELECT email FROM users WHERE email = '$email';";
			$results = mysqli_query($connection, $sql);
			$isIn = FALSE;
			while ($row = mysqli_fetch_assoc($results))
			{
				if ($email == $row['email']) $isIn = TRUE;
			}
			mysqli_free_result($results);
			if ($isIn) {
				$hashed = md5($pass);
				$up = "UPDATE users SET password='$hashed' WHERE email='$email';";
				$success = mysqli_query($connection, $up);
				if ($success) {
					echo "Successfully updated password";
				} else {
					echo "Failed to updated password<br/><a href='javascript:history.go(-1)'>Return to previous page</a>";
				}
			} else {
				echo "Your email is not associated with an account<br/><a href='javascript:history.go(-1)'>Return to previous page</a>";
			}
		}
	} else echo "Data needs to be passed with POST<br/><a href='javascript:history.go(-1)'>Return to previous page</a>";
  mysqli_close($connection); 
}
?>