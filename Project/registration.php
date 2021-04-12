<?php include('regdata.php') ?>
<!DOCTYPE html>
<head>
    <link href="css/registration.css" rel="stylesheet">
    <script type="text/javascript" src="script/register.js"></script>

    <div id="top">
        <a id="main" href="#MainPage.html">Return to Home page</a>
        <a id="sign" href="#MainPage.html">Sign in here</a>
    </div>


</head>
<body>
<form  method="POST" action="registration.php" name="regform" onsubmit="return validateForm()">
    <div class="register">
            <h1>Account Registration Form</h1>
            <div id="image">
                <img src = "images/logo.PNG" alt = "logo" height="100px" width="100px">
            </div>
            <p id="back">Fill in form below to create an account.</p>
        
        
                <div <?php if (isset($name_error)): ?> class="form_error" <?php endif ?> >
                <label>Username: </label>
	            <input type="text" name="uname" id="uname" placeholder="Enter Username" value="<?php echo $uname; ?>">
	            <?php if (isset($name_error)): ?>
	  	        <span><?php echo $name_error; ?></span>
	            <?php endif ?>
        
                
                <label>First Name: </label>
                <input type="text" name="fname" id="fname"  placeholder="Enter First Name">


                <label>Last Name: </label>
                <input type="text" name="lname" id="lname" placeholder="Enter Last Name">
           
            
                <div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
                <label>Enter Email Address: </label>
                <input type="email" name="email" id="email" placeholder="Enter Email" value="<?php echo $email; ?>">
                <?php if (isset($email_error)): ?>
      	        <span><?php echo $email_error; ?></span>
                <?php endif ?>
  	            </div>
            
           
                <label>Password: </label>
                <input type="password" name="password" id="password" placeholder="Choose Password">


                <div class="checkrules">
                    <input type="checkbox" name="rules" id="rules" class="required">
                    <label>I agree to follow the websites rules</label>
                    <p id="checkerror"></p> 
                </div>

                <input type="submit" class="submit" name="submitreg" value="Register" />
                <input type="reset" class="clear" value="Clear Form" />

                
            
    </div>
    
   

    

</form>

</body>
<div id="footer">
    <p>footer</p>
</div>
</html>