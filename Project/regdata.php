<?php
session_start();


$connection = mysqli_connect();
$username ="";
$email="";




if(isset($_POST['submitreg'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];

    $sqluser = "SELECT * FROM users WHERE (username='$username' OR email='$email');";

    $results_su = mysqli_query($connection, $sqluser);
    $row = mysqli_fetch_assoc($results_su);

    if($row>0){
        echo "<p>User already exists with this name and/or email</p>";
        echo "<a href=lab9-1.html>Return to user entry</a>";
    }else{
        $sql = "INSERT INTO users (firstName,lastName,username, email, password) 
        VALUES ('$firstname','$lastname','$username', '$email', '".md5($password)."')";
        $results = mysqli_query($connection, $sql);
        echo "<p>An account for the user has been created</p>";
    }



      
}

?>