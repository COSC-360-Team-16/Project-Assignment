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
		
		
        //$imagecode = rand(1000,10000)."-".$_FILES["file"]["name"];
        //$temp = $_FILES["files"]["tmp_name"];
        //$uploads_dir = '/images';
        //move_uploaded_file($temp,$uploads_dir.'/'.$imagecode);

        $sqluser = "SELECT * FROM users WHERE (username='$uname' OR email='$email');";

        $results_su = mysqli_query($connection, $sqluser);
        $row = mysqli_fetch_assoc($results_su);
		
        if($row>0){
            header("Location: regerror.html");
        }else{
			//upload profilePicture to the server
			$filePath;
			$target_directory = "images/profilePictures";
			$targetFile = $target_dir . basename($_FILES["profilePicture"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			  if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			  } else {
				echo "File is not an image.";
				$uploadOk = 0;
			  }
			}
			
			// Check if file already exists
			if (file_exists($target_file)) {
			  echo "Sorry, file already exists.";
			  $uploadOk = 0;
			}

			// Check file size
			if ($_FILES["profilePicture"]["size"] > 500000) {
			  echo "Sorry, your file is too large.";
			  $uploadOk = 0;
			}
			
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
			  echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
			  $uploadOk = 0;
			}
			
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			  echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
			  } else {
				echo "Sorry, there was an error uploading your file.";
			  }
			}
			
			//insert the user into the database
			$hashed = md5($password);
			if (empty($filePath)){
				$sql = "INSERT INTO users (firstName,lastName,username, email, password) 
            VALUES ('$fname','$lname','$uname', '$email', '$hashed')";
			} else {
				$sql = "INSERT INTO users (firstName,lastName,username, email, password, profilePic) 
            VALUES ('$fname','$lname','$uname', '$email', '$hashed', $filePath)";
			}
            $success = mysqli_query($connection, $sql);
            //header("Location: signin.html");
        }


    }
    
    mysqli_close($connection);
    
}
    




?>