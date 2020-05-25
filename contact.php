<?php
session_start();
//if(isset($_SESSION['room'])!="")
//{
//	header("Location: index.php");
//}
include_once 'connect.php';

if(isset($_POST['okk']))
{
	$emaii = mysqli_real_escape_string($con, $_POST['emaii']);
	$roomm = mysqli_real_escape_string($con, $_POST['roomm']);
	//$Update =  "UPDATE users SET rooms=$room WHERE email= '$_POST['emai']'";
//	$Update = "UPDATE users set rooms = $room WHERE email=$_POST['emai']";
	if(mysqli_query($con,"UPDATE users SET contact='".$roomm."' WHERE email='".$emaii."'"))
	{
            $msgs = '<div class="alert alert-success" role="alert" style="width:500px;text-align:center"> Your message has been sent successfully </div>';
		        

        
       
	}
	else
	{
            $msgs = '<div class="alert alert-danger" role="alert" style="width:500px">Error while registering you...</div>';
	        
       
        
	}
}
?>














<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <br>
       <?php echo @$msgs;?>
       <br>
       <a class="btn btn-primary" href="home.php" role="button" style="float:right;margin-right:20px">Back</a>

    <h1 style="text-align:center">Send Us Your Request</h1>
    <br><br><br>
    <form style="width:50%;margin-left:400px" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1" style="text-align:center">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="emaii">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1" style="text-align:center">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Select Your Occasion</option>
      <option>Birthday Celebration</option>
      <option>Aniversary Celebration</option>
      <option>Festival Celebration</option>
      <option>Other</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1" style="text-align:center">Your Message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write the instructions precisely (not more than 100 words)" name="roomm"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary mb-2" name="okk">Submit</button>
  
</form>
    
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>