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
    if(isset($_POST['fname'],$_POST['lname'],$_POST['uname'],$_POST['email'],$_POST['password'] )){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $uname = $_POST["uname"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sqluser = "SELECT * FROM users WHERE (username='$uname' OR email='$email');";

        $results_su = mysqli_query($connection, $sqluser);
        $row = mysqli_fetch_assoc($results_su);

        if($row>0){
            header("Location: regerror.html");
        }else{
            $sql = "INSERT INTO users (firstName,lastName,username, email, password) 
            VALUES ('$fname','$lname','$uname', '$email', '$password')";
            $results = mysqli_query($connection, $sql);
            header("Location: signin.html");
        }


    }
    
    mysqli_close($connection);
    
}
    




?>