
<!DOCTYPE html>

<html lang="en">

<head>
    <title>BedChecker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <script>
        addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0, 1); }
        
        
        
        
        
       
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
 // x.innerHTML = "Latitude: " + position.coords.latitude + 
  //"<br>Longitude: " + position.coords.longitude;

    alert("Longitude : "+position.coords.longitude + " Latitude : "+ position.coords.latitude);
}


   
//}
        
      
        
        
        
        
        
        
    </script>
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <link href="css/style2.css" rel='stylesheet' type='text/css' media="all">
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
</head>
<body>
    <h1 class="error">Available Beds</h1>
    <div class="w3layouts-two-grids">
        <div class="mid-class">
            <div class="img-right-side">
                <h3>BEDCHECKER</h3>
                <p>Manage beds in your hospital</p>
                <img src="images/b11.png" class="img-fluid" alt="">
            </div>
            <div class="txt-left-side">
                <h2> Enter Here </h2>
               
               
               
               
              <iframe src="https://secure-mountain-49483.herokuapp.com/" style="height:400px"></iframe>
               
                                <button onclick="getLocation()">Get Your Location</button>


                <div class="clear"></div>
            </div>
        </div>
    </div>
 <p id="demo"></p>

</body>

</html>