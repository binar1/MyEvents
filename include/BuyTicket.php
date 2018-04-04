<!DOCTYPE html>
<html>
<head>
	<title>Buy Ticket</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-min.css">
  	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
    	.bgbox{
    		background-color: black;
    		width: 80%;
    		height: 70%;
    		padding: 10px;
    		border-radius: 5px;

    	}
    	.center {
    		display: block;
    		margin-left: auto;
    		margin-right: auto;
    		width: 50%;
		}
		.image{
			width: 100px;
			height: 100px;
			border-radius: 5px;
			display: block;
			float: right;
		}
		p{
			font-size: 18px;
			color:rgba(255, 255, 255,0.5);

		}
		@font-face{
 			 font-family:Roboto;
 			 src:'../fonts/Roboto.tff';
		}
		#font{
  			font-family:Roboto;
		}
		.form1{
			border-color: white;
			border: 3px;
			width: 100%;
			padding: 5px;
			border-radius: 5px;

		}
		.input1{
			border-radius: 5px;
			height: 20%;
			width: 100%;
			font-size: 18px;
			padding: 7px;
			padding-bottom: 7px;
		}
		label{
			font-size: 15px;
			color: white;
		}
		
    </style>
</head>
<body style="background-color: #ebebe0; ">
	<?php include 'Header.php';  ?>
	<div class="container" style="padding-top: 70px; overflow: auto;">
		<div class="row bgbox center"> 

			<div class="col-sm-6" style="float: left; font-weight: bold;font-size: 22px; color: white;">
				event name <br><p>00-00-0000</p><p>1 Ticket</p>
			</div>

			<div class="col-sm-6" style=" padding-top: 10px;">
				<img src="../images/b.jpg" class="image">
			</div>

			<div class="col-sm-6" style="">
				<h4 style="font-size: 18px; font-weight: bold; color: white;">TOTAL</h4>
				<h5 style="font-size: 20px; color: white;">20$</h5>
			</div>
			<hr width="100%">
				<h3 id="font" style="font-size: 20px; color: white; font-weight: bold;">Choose a way to pay</h3>
				<div class="btn-group-vertical" style="width: 100%;">
  					<button type="button" class="btn btn-default"><img src="../images/paypal.png" style="width: 30px;height: 30px; float: left;">PayPal</button>
 					 <button type="button" class="btn btn-default"><img src="../images/card.png" style="width: 30px;height: 30px; float: left;">Card</button>
 				</div>
 				 <span style="padding-top: 5px;"><hr></span><!-- CARD -->
 					<div class="container center form1">
 						<div class="row" style="padding:10px;">
 							<div class="col-sm-12" style="padding: 3px; background-color: white; border-radius: 5px; width: 100%;">
 								<img src="../images/card.png" style="width: 30px;height: 30px; float: left;">
 								<img src="../images/visa.png" style="width: 40%; height: 30px; float: right;">
 								<p style="color: black; padding-left: 40px;"> Pay with Card</p>
 								

 						</div></div>
 						<form style="width: 100%;">
 							<label>Card Number</label>
 							<input type="text" name="card number" placeholder=".... .... .... ...." class="input1" required="required">
 							<div class="row">
 								<div class="col-sm-6">
 							<label>Expiry Date</label>
 							<input type="text" name="card number" class="input1" style="width: 100%;" placeholder="MM/YYYY" required="required">
 							</div>
 							<div class="col-sm-6">
 							<label>CSC</label>
 							<input type="text" name="card number" placeholder="..." class="input1" style="width:100%;" required="required">
 							</div>
 							</div>
 							<label>Postcode</label>
 							<input type="text" name="card number" placeholder="" class="input1" required="required">

 						<span style="padding-top: 5px;"><hr></span> <!-- Pay Pal -->
 						<div class="row center" style="background-color: white; padding: 5px; width: 100%;">
 							<div class="col-sm-12 " ><img src="../images/paypal.png" style="width: 60px; height: 40px;" class="center">
 							</div>

 							<div class="col-sm-12 center" style="width: 100%; padding: 3px;"> 
 								<button type="button" class="btn btn-warning center" style="font-size: 18px; width: 100%;">
 									<img src="../images/pay.png" style="width:70px;height: 40px;"><h6 style="width: 100%; font-size: 18px;font-family: roboto;">checkout</h6> 
 								</button>
 							</div>

 						</div>

 							<span style="padding-top: 5px;"><hr></span><!-- PAY -->
 							<button type="button" class="btn btn-default center" style="padding: 5px;">PAY</button>
 						</form>	
 					</div>
		</div>
	</div>

	<?php include 'Footer.php';  ?>
</body>
</html>
<!-- <div class="row">
					<div class="col-sm-4"><img src=""></div>
					<div class="col-sm-4"></div>
					<div class="col-sm-4"></div>
				</div>
				<button type="button" class="btn btn-warning center" style="font-size: 18px; width: 100%;">
 									<img src="../images/pay.png" style="width:70px;height: 40px;"><h6 style="width: 100%; font-size: 18px;font-family: roboto;">checkout</h6> 
 								</button>
				-->