<?php
session_start();
//if(isset($_SESSION['room'])!="")
//{
//	header("Location: index.php");
//}
include_once 'connect.php';

if(isset($_POST['ok']))
{
	$emai = mysqli_real_escape_string($con, $_POST['emai']);
	$room = mysqli_real_escape_string($con, $_POST['room']);
	//$Update =  "UPDATE users SET rooms=$room WHERE email= '$_POST['emai']'";
//	$Update = "UPDATE users set rooms = $room WHERE email=$_POST['emai']";
if($emai=="" || $room=="")
{
    echo "Please Enter the details";
    
}
else {
	if(mysqli_query($con,"UPDATE users SET rooms='".$room."' WHERE email='".$emai."'"))
	{
            $msgs = '<div class="alert alert-success" role="alert" style="width:500px"> Congratulations you have successfully Confirmed Your Room. You can now click the below button </div>';
		        $link_address = 'home.php';

        
       
	}
	else
	{
            $msgs = '<div class="alert alert-danger" role="alert" style="width:500px">Error while registering you...</div>';
	        
       
        
	}
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
    <?php echo $userRow['username']; ?>&nbsp;<a class="btn btn-primary" href="logout.php?logout" role="button" style="float:right;margin-right:20px;margin-top:10px">Sign Out</a>
    <a class="btn btn-primary" href="choice.php" role="button" style="float:right;margin-right:20px;margin-top:10px">Back</a>

    <?php echo @$msgs;?> <a href="<?php echo $link_address;?>"> Check In Now ! </a>

	
	<h1 style="text-align:center;margin-top:40px"> SELECT YOUR ROOM </h1>
	
	

	
<script src="https://360player.io/static/dist/scripts/embed.js" async></script>
	
	


<div class="row" style="margin-top:100px;margin-left:200px">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Deluxe Room</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">King Size Room</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Queen Size Room</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Regular Room</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list"><iframe src="https://360player.io/p/k6f7rb/" frameborder="0" width=560 height=315 allowfullscreen data-token="k6f7rb"></iframe></div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list"><iframe src="https://360player.io/p/k6f7rb/" frameborder="0" width=560 height=315 allowfullscreen data-token="k6f7rb"></iframe>
</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list"><iframe src="https://360player.io/p/k6f7rb/" frameborder="0" width=560 height=315 allowfullscreen data-token="k6f7rb"></iframe></div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list"><iframe src="https://360player.io/p/k6f7rb/" frameborder="0" width=560 height=315 allowfullscreen data-token="k6f7rb"></iframe></div>
    </div>
  </div>
</div>


<form class="form-inline" method="post" style="margin-left:520px;margin-top:40px">
 
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only"></label>
    <input type="text" class="form-control" id="inputPassword2" name="room" placeholder="Select Your Room" >
    <input type="email" class="form-control" id="inputPassword2" name="emai" placeholder="Confirm Your Email Address" style="margin-left:10px">
    <!--<input type="email" name ="emai" placeholder = "Confirm Your Email Address" style="margin-left:10px">-->
  </div>
  <button type="submit" class="btn btn-primary mb-2" name="ok">Confirm Room</button>
</form>
	
	
	
	
	
	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>





