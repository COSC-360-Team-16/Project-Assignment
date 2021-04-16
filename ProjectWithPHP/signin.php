<?php

session_start();

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
  if(isset($_POST['uname'],$_POST['password'])){
    $uname = $_POST["uname"];
    $password = $_POST["password"];
	$hashed = md5($password);
    $sqluser = "SELECT * FROM users WHERE (username='$uname' AND password='$hashed');";
    $results_su = mysqli_query($connection, $sqluser);
    $row = mysqli_fetch_assoc($results_su);
    $valid = mysqli_num_rows($results_su);

    if($valid == 1){
      $_SESSION["firstName"] = $row['firstName'];
	  $_SESSION["uname"] = $row['userName'];
	  echo 'set uname to '.$_SESSION["uname"];
	  header("Location: profilePage.php");
    }else{
      header("Location: signerror.html");
      
    }
   

  }
  
  mysqli_close($connection);





    
}

?>