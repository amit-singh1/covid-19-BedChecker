<?php
session_start();
include_once 'connect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: choice.php");
}

if(isset($_POST['btn-login']))
{
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$upass = mysqli_real_escape_string($con, $_POST['pass']);
	$res=mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
	$row=mysqli_fetch_array($res);
	
	if($row['password']==md5($upass))
	{
		$_SESSION['user'] = $row['user_id'];
		header("Location: choice.php");
	}
	else
	{
            $err = "<p style='color: red'>Wrong Username or Password</p>";
		?>
       
        <?php
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Droids</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <a href="index.php">Back</a>
<center>
<div id="login-form">
<form method="post">
    <table align="center" width="30%" border="0" >
   
<tr>
    <?php echo @$err;?> 
    
   
    
<td> <h1>HOTEL-H1</h1><br> <input type="text" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
    <td>
        
        <label class="custom-file-upload">
    <input type="file"/>
    <i class="fa fa-cloud-upload"></i>  Upload Identity Proof
</label>
        
    </td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Sign In</button></td>
</tr>
<tr>
<td><a href="register.php">Sign Up Here</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>