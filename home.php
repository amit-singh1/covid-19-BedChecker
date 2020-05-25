<?php
session_start();
include_once 'connect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index1.php");
}
$res=mysqli_query($con, "SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysqli_fetch_assoc($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



<title>Droids</title>
<link rel="stylesheet" href="style.css" type="text/css"/>

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<style>
    
    .clear1{
        
        clear:both;
        
    }
    
    .effect{
        
        margin-left:300px;
        
        
    }
    
    
h1{
        
        
        text-align:center;
        margin-top:30px;
        
        
    }
    
    















    
    
    
  .image1{
      
      
      width:150px;height:160px;float:left;margin-left:280px
      
      
  }  
  
  .image2{
      
      width:170px;height:170px;float:left;margin-left:190px;margin-bottom:25px
      
  }
    
    .image3{
        
        width:150px;height:150px;float:left;margin-left:220px
        
    }
    
    
    .button1{
        
        
        margin-left:670px;margin-top:-41px
        
    }
    
    .button2{
        
        
        margin-left:1030px;margin-top:-41px
        
        
    }
    
    
    
    @media (max-width: 575.98px) { 
        
        
        .image1 {
    width: 150px;
    height: 160px;
    float: left;
    margin-left: 20px;
    margin-bottom:10px;
}
       .image2 {
    width: 170px;
    height: 170px;
    float: left;
    margin-left: 20px;
    margin-bottom: 25px;
    margin-top:10px;
} 

.image3 {
    width: 150px;
    height: 150px;
    float: left;
    margin-left: 20px;
    margin-top:50px;
}

button{
    
    dsiplay:block;
    
}

.dropdown{
    
    display:none;
    
}

        
        
    }
    
    
    

  .mobileShow {display: none;}

  /* Smartphone Portrait and Landscape */
  @media only screen
    and (min-device-width : 320px)
    and (max-device-width : 480px){ 
      .mobileShow {display: inline;}
  }
  
    <style type="text/css">
  .mobileHide { display: inline; }

  /* Smartphone Portrait and Landscape */
  @media only screen
    and (min-device-width : 320px)
    and (max-device-width : 480px){
     .mobileHide { display: none;}
  }
</style>
    
    
</style>






</head>
<body>
    
 <div class="mobileShow">

<div id="header">
	<div id="left">
    <label>HackJini</label>
    </div>
    <div id="right">
    	
    </div>
</div>
Welcome <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
<br>
<a href="tel:+918218273082"><img class="image1" src = "reception.png" ></a>
<br>
<a href="tel:+918218273082"><img class="image2" src = "offer.png" ></a>
<br>
<a href="tel:+918218273082"><img class="image3" src = "services.png" ></a>
<a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="margin-top:50px;margin-right:300px" >Special Dates</a>
<br><a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="margin-top:10px;margin-right:500px" data-aos="slide-up">Bill</a>











</div>   

    <div class="mobileHide">  
    
<div id="header">
	<div id="left">
    <label>HackJini</label>
    </div>
    <div id="right">
    	<div id="content">
    	    
        	Welcome <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout" style="margin-right:25px">  Sign Out</a> <a href="contact.php" style="margin-right:20px">Special Requests</a> <a href="tourist.php" style="margin-right:20px">Tourist Guide</a> <a href="billindex.php" style="margin-right:20px">Check Out</a>
        </div>
    </div>
</div>

<h1 data-aos="flip-up"> Services We Provide !</h1>
<br><br><br>
<div id="body" data-aos="fade-in">
	<img class="image1  " src = "reception.png" data-aos="slide-up">
	<img class="image2" src = "offer.png" data-aos="slide-up">
	<img class="image3" src = "services.png" data-aos="slide-up">
</div>

<div class="dropdown clear1 effect" data-aos="zoom-in">
 
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Reception
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a href="tel:+918218273082" class="dropdown-item" href="#">Laundary</a>
    <a href="tel:+918218273082" class="dropdown-item" href="#">Room Service</a>
  </div>
</div>

<div class="btn-group" data-aos="zoom-in">
  <button type="button" class="btn btn-primary dropdown-toggle button1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Offers
  </button>
  <div class="dropdown-menu">
    <a href="tel:+918218273082" class="dropdown-item" href="#">Call Hotel Receptionist</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item"  href="mailto:vrh.sigma@gmail.com" title="vrh.sigma@gmail.com">Message Us</a>
  </div>
</div>


<div class="btn-group" data-aos="zoom-in">
  <button type="button" class="btn btn-primary dropdown-toggle button2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Services
  </button>
  <div class="dropdown-menu">
    <a href="tel:+918218273082" class="dropdown-item" href="#">Call Hotel Staff Head</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item"  href="mailto:vrh.sigma@gmail.com" title="vrh.sigma@gmail.com">Message Us</a>
  </div>
</div>
</div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>
    
    AOS.init();
    
    AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  

  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 100, // values from 0 to 3000, with step 50ms
  duration: 1000, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});
    
    
    
    
    
    
    
    
    
    
    
    
    
</script>



</body>
</html>