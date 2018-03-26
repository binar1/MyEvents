<!DOCTYPE html>
<html>
<head>
	<title>Forget Password</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-min.css">
	<style type="text/css">
		.center {
    		display: block;
    		margin-left: auto;
    		margin-right: auto;
    		width: 50%;
		}
		.bgbox{
			background-color: black;
			width: 50%;
			height: 50%;
			border-radius: 5px;
			padding: 10px;
		}
			@font-face{
 			 font-family:Roboto;
 			 src:'../fonts/Roboto.tff';
		}
		#font{
  			font-family:Roboto;
		}
		h3{
			font-family: Roboto;
			color: white;
		}
		label{
			color: white;
			font-size: 20px;
			font-family: roboto;
		}
		
		
	</style>
</head>
<body style="background-color: #ebebe0;">
<?php include 'Header.php'; ?>
	<div style="padding: 60px;"></div>
	<div class="container center bgbox">
		<h3 align="center">Forget Password</h3>

		<div class="input-group" style="padding: 10px;">
			<span class="input-group-addon">Email</span>
			<input id="email" type="text" class="form-control" name="email" placeholder="Write Your Email">
		</div>
   	    <input type="submit" name="submit" value="send" class="btn btn-danger center" >
		
		
	</div>

<?php include 'Footer.php'; ?>

</body>
</html>