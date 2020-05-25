<?php
//to hide warning of undefined index or checkboxes
error_reporting(E_ERROR | E_WARNING | E_PARSE);





$name= $_POST['name'];
$room_num= $_POST['room_num'];
$days=$_POST['days'];

$particulars= "".$_POST['diary']." ".$_POST['tie']." ".$_POST['belt']." ".$_POST['adform']." ".$_POST['icard']." ".$_POST['yearly']." ".$_POST['admission'];


$depositer= $_POST['depositer'];

$date=$_POST['date'];



?>
<div align="center"><!DOCTYPE html>
<html>
<head>

	<title></title>
		

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<style type="text/css">
	
	table{
		margin-left: 600px;
	}
	button{
		margin-left: 700px;
		
	}
	input{
		background-color: #008CBA;
		font-size: 25px;
		
	}
</style>
</head>


	<body style="height: 147mm; width: 102mm; margin-top: 10px; margin-left: 8px;">
<table border="">
	<tr> <td  style= "text-align:center; border-width: 0px;" colspan="4" ><b style="font-size: 20px;">BILLING Status</b></td></tr>
	<tr>
		<td colspan="2" style="border-width: px;" rowspan="2"> Name: <b style="text-transform: uppercase; text-align: right;"><?php echo "".$_POST['name']." / ".$_POST['reg_num'];?></b><br>
		Paid by: <?php echo $_POST['depositer'];?><br>
		Class:<b><?php echo $_POST['class'];?></b>

		</td>
		<td align="right" colspan="2">Date: <?php echo $_POST['date'];?></td>
	</tr>
	<tr>
		<td colspan="3" align="right">Rc. No: <b><?php echo $rcv_no; ?></b></td>
	</tr>
	<tr>
		<td style="padding-left: 0px;"><b>Particulars</b></td>
		<td><b>Fee </b></td>
		<td><b>Total</b></td>
		<td><b>Balance</b></td>
	</tr>
	<tr >
		<td style="padding-bottom: 150px; max-width: 25ch">
			<?php
			//Set item and their price
			if($_POST['days'])
			{
                echo ""."Room charges";
            
                $money = 1000;
                $amount = $money*$days;
				echo "$amount";

			}
			if ($_POST['laundary']) {
				echo " "."laundary"." = 100Rs,";
				$amount=$amount+100;
			}
			if ($_POST['poter']) {
				echo " "."poter"." = 100Rs,";
				$amount=$amount+100;
			}

			if ($_POST['breakage fee']) {
				echo " "."breakage fee"." = 500Rs,";
				$amount=$amount+500;
			}
			

			else  { 

				echo "<br><div align=center>-------<br>";				
			    echo "-------</div>";
				
			}

			?>


		</td>
		<td style="padding-bottom: 150px; max-width: 15ch">
			<?php
			echo "<div style='text-transform:uppercase'>";
			echo $fee_fetch['fee_month'];
			?>
		</td>
		<td style="padding-bottom: 150px;"><?php echo $amount;?>+<?php echo 250*$no_of_month;?></td>
		<td style="padding-bottom: 150px;" align="right"></td>
		</tr>
	
	<tr><td colspan="2">Total :</td><td><?php echo $total= $amount+250*$no_of_month;?>/-</td><td align="right"></td></tr>
	<?php
	
	?>
</table>
<input type="button" onclick="window.print()" value="Print now"  style="margin-top: 15px; margin-left: 600px;">
<br><br>
<a href="billindex.php" style="margin-left: 600px;"><strong>BACK</strong></a>

</div>

<br>
<br>
<h1 style="text-align:center">Thanks for choosing us!</h1>



	<h2 style="margin-left:20px"><strong> PAY WITH:</strong></h2>

          <ul class="social">
            <li><a href="https://www.paypal.com/in/webapps/mpp/paypal-checkout" class="icons-sm fb-ic"><i class="fab fa-cc-paypal fa-4x"></i></a></li><br>
            <li><a href="https://www.amazon.in/gp/sva/dashboard?ref_=nav_cs_apay" class="icons-sm pin-ic"><i class="fab fa-amazon-pay fa-4x"></i></a></li><br>
            <li><a href="https://www.apple.com/apple-pay/" class="icons-sm gplus-ic"><i class="fab fa-cc-apple-pay fa-4x"></i></a></li>
            
          </ul>
        </li>

		

</body>
</html>