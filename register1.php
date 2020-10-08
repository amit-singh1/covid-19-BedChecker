<?php
session_start();

include_once 'connect.php';

if(isset($_POST['btn-signup']))
{
	$uname = mysqli_real_escape_string($con, $_POST['uname']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$upass = mysqli_real_escape_string($con, $_POST['pass']);
	
	if(mysqli_query($con, "INSERT INTO users1(username,email,password) VALUES('".$uname."','".$email."','".$upass."')"))
	{
            $msg = 'Congratulation you have successfully registered.';
		
        
       
	}
	else
	{
            $msg = 'Error while registering you...';
	
       
        
	}
}

$_SESSION['usernam'] = $_POST['uname'];


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>BedChecker</title>
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <script>
        addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0, 1); }
    </script>
  
  
    <link href="css/style3.css" rel='stylesheet' type='text/css' media="all">
 
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
</head>

<body>
    
            <?php echo @$msg;?>
            <?php echo $_SESSION['usernam'];?>
    
    <h1 class="error">Register</h1>
    <div class="w3layouts-two-grids">
        <div class="mid-class">
            <div class="txt-left-side">
                <h2> Register Here </h2>
                <form action="#" method="post">
				
                    <div class="form-left-to-w3l">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                        <input type="email" name="email" placeholder="Email" required="">

                        <div class="clear"></div>
                    </div>
					
					<div class="form-left-to-w3l">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                        <input type="text" name="uname" placeholder="Full Name" required="">

                        <div class="clear"></div>
                    </div>
					
                    <div class="form-left-to-w3l ">

                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <input type="password" name="pass" placeholder="Password" required="">
                        <div class="clear"></div>
                    </div>
                 
                    <div class="btnn">
                        <button type="submit" name="btn-signup">Register </button>
                    </div>
                </form>
                
<a href="login1.php" style="color:white">Log In</a>
            </div>
            <div class="img-right-side">
                <h3>Welcome To BedChecker</h3>
                <img src="images/b124.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    
</body>

</html>















