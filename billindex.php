<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>Payment Gateway</title>
</head>
<body>
    <a href="home.php">Back</a>
    <br>
    <h1 style="text-align:center">PAYMENT GATEWAY</h1>
    <br>
    <br>
    <br>
	<center>
		<div>
	<form method="post" action="bills.php">
	<table class="table">
	    <thead class="thead-dark">
	        <tr>
      <th scope="col">Name</th>
      <th scope="col">Room.No</th>
      <th scope="col">Payment </th>
      <th scope="col">MethodDate</th>
      <th scope="col">Days</th>
    </tr>
  </thead>
	 <tbody>
	     <tr>
	     <td><input type="text" name="name" placeholder="Name"></td>
      <td><input type="number" name="room_num" placeholder="Room.No"></td>
      
      
      
      <td>      <select name="Payment"><option selected>--Class--</option>
					<option value="nursery">Debit Card</option>
					<option value="lkg">Credit card</option>
					<option value="ukg">PAYTM</option>
					<option value="1">phonepay</option>
				 	<option value="2">netbanking</option>
				 	</select>      </td>
      
      
      <td><input type="text" name="date" value="<?php  echo date("d-m-Y"); ?>"></td>
      
      
      <td><input type="text" name="days" placeholder="days"></td>
      
      
      
      
      
      
      
	</tr>
			
			
			<tr class="table-danger">
			    
			    <td colspan="5">
			<fieldset style="text-align:center">
				<legend>Particulars</legend>
				
				<label>Laundary</label><input type="checkbox" name="laundary" value="laundary" style="margin-left:5px;margin-right:10px">
				
				<label>Poter</label><input type="checkbox" name="poter" value="poter" style="margin-left:5px;margin-right:10px" >
				
				<label>Rent</label><input type="checkbox" name="diary" value="diary" style="margin-left:5px;margin-right:10px">
				
				<label>Breakage Fee</label><input type="checkbox" name="breakage fee" value="breakage fee" style="margin-left:5px;margin-right:10px">
				
			</fieldset>
		</td>
			    
			    
			    
			    
			    
			    
			</tr>
			
			
			
			
			
			
			
			
			
			
	
	 </tbody>

	</table>
<input type="submit" name="print" value="Print Bill">
</form>
</center>





<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>








</body>
</html>