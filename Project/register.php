<?php

$host = "localhost";
$database = "p360";
$user = "project"; 
$password = "c0sc360"; 

$connection = mysqli_connect($host, $user, $password, $database);
$error = mysqli_connect_error();
if($error != null){
    $output = "<p>Unable to connect to database!</p>";
    exit($output);
}else{
    if(isset($_POST['submitreg'])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $uname = $_POST["uname"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $path = "./Projects/images";
        $img = strtolower($_FILES['image']['tmp_name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $path.$img);
       
       
        $sqluser = "SELECT * FROM Users WHERE (userName='$uname' OR email='$email');";

        $results_su = mysqli_query($connection, $sqluser);
        $row = mysqli_fetch_assoc($results_su);

        if($row>0){
            header("Location: regerror.html");
        }else{
            $sql = "INSERT INTO Users (firstName,lastName,userName, email, password, profilePic) 
            VALUES ('$fname','$lname','$uname', '$email', '$password', '$img')";
            $results = mysqli_query($connection, $sql);
            header("Location: signin.html");
        }


    }
    
    mysqli_close($connection);
    
}
    




?>