<?php

$host = "localhost";
$database = "lab9";
$user = "webuser";
$password = "P@ssw0rd";

$connection = mysqli_connect($host, $user, $password, $database);
$error = mysqli_connect_error();
if($error != null){
    $output = "<p>Unable to connect to database!</p>";
  exit($output);
}else{
  if(isset($_POST['uname'],$_POST['password'])){
    $uname = $_POST["uname"];
    $password = $_POST["password"];

    $sqluser = "SELECT * FROM users WHERE (username='$uname' AND password='$password');";

    $results_su = mysqli_query($connection, $sqluser);
    $row = mysqli_fetch_assoc($results_su);
    $valid = mysqli_num_rows($results_su);

    if($valid == 1){
      header("Location: MainPage.html");
    }else{
      header("Location: signerror.html");
      
    }
   

  }
  
  mysqli_close($connection);





    
}

?>