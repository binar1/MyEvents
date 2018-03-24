<!DOCTYPE html>
<html>
<head>
	<title>Add Event</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-min.css">
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	.linedit{
		margin-top: 80px;
		width: 60px;
		height: 40px;
		text-align: center;
		font-size: 20px;
		background-color: skyblue;
	}
	form input[type="date"]{
		width: 110px;
		display: inline;
	}
	form input[type="time"]{
		width: 110px;
		display: inline;
	}
	div a .imagee:hover{
		background-color: lightcyan;
		padding: 30px;
	}
	.ticket{
		margin-top: 60px;
		text-align: center;
	}
</style>
<body>
	<?php include ('Header.php');?>
	<p id="goo"></p>
	<div class="container" style="background-color: whitesmoke;">
		<input class="btn-primary linedit" type="button" readonly disabled value="1">
		<h3 style="display: inline; margin-left: 10px;">Event Details</h3>
		<form style="margin-top: 40px;">
		<div class="form-group">
		    <label for="ED">EVENT DITALS:</label>
		    <input type="text" class="form-control" id="ED" placeholder="Give it a short distnict name">
		</div>
		<div class="form-group">
		    <label for="LO">LOCATION:</label>
		    <input type="text" class="form-control" id="LO" placeholder="Search for a venue or addres">
		</div>
		</form>
		</style>
		<form style="margin-top: 50px;">
			<label for="st">STARTS</label>
			<label for="en" style="margin-left:300px;">END</label><br>
		    <input type="date" class="form-control" id="st">
		    <input type="time" class="form-control" id="st">
		    <input type="date" class="form-control" id="en" style="margin-left: 130px;">
		    <input type="time" class="form-control" id="en">	
		</form> 
		<h4 style="margin-top: 50px;">EVENT IMAGE</h4>
		<a href="">
			<img id="dll" src="../images/upload.png" class="img-thumbnail imagee" alt="Cinque Terre" width="304" height="236">
		</a>
		<h4 style="margin-top: 50px;">EVENT DESCCRIPTION</h4>
		<form>
    	<div class="form-group">
      	<textarea class="form-control" rows="5" placeholder="write about your event"></textarea>
   	 	</div>
  		</form>
  		<h4 style="margin-top: 50px;">ORGANIZER NAME</h4>
  		<form>
		    <div class="input-group">
		      <span class="input-group-addon">Name</span>
		      <input id="msg" type="text" class="form-control" name="msg" placeholder="Who's organizing this event?">
		    </div>
		</form>
		<input class="btn-primary linedit" type="button" readonly disabled value="2">
		<h3 style="display: inline; margin-left: 10px;">Create Ticktes</h3>
		<div class="ticket">
			<h4>What type of ticket would you like to start with?</h4>
			<div style="margin-top: 30px;">
				<input type="button" class="btn btn-default" value="▼ FREE TICKET">
			  	<input type="button" class="btn btn-default" value="▼ PAID TICKET">
			   	<input type="button" class="btn btn-default" value="▼ DONATION">
			</div>
		</div>
		<input class="btn-primary linedit" type="button" readonly disabled value="3">
		<h3 style="display: inline; margin-left: 10px;">Additional Settings</h3>
		<div class="container">
			<h4 style="margin-top: 35px;"><strong>LISTING PRIVACY</strong></h4>
			<form>
			<div class="radio">
			    <label><input type="radio" name="optradio"><strong>Public Page</strong></label>
			</div>
			<div class="radio">
			    <label><input type="radio" name="optradio"><strong>Private Page</strong></label>
			</div>
			</form>
		</div>
		<h4>EVENT TYPE</h4>
		<div class="form-group">
			<select class="form-control" id="sel1" style="width: 600px;">
			    <option>1</option>
			    <option>2</option>
			    <option>3</option>
			    <option>4</option>
			</select>
		</div>
		<h4>EVENT TOPIC</h4>
		<div class="form-group">
			<select class="form-control" id="sel1" style="width: 300px;">
			    <option>1</option>
			    <option>2</option>
			    <option>3</option>
			    <option>4</option>
			</select>
		</div>
		<h4>REMAINING TECKTES</h4>
		<form>
			<div class="checkbox">
    			<label><input type="checkbox"> Remember me</label>
  			</div>
		</form>
	</div>
	<div style="margin-left: 400px;margin-top: 80px; margin-bottom: 30px;">
		<h1>Nice job! You're almost done.</h1>
		<div style="margin-left: 100px; margin-top: 20px;">
		<button type="button" class="btn btn-primary" style=" height: 40px;">SAVE</button>
		<button type="button" class="btn btn-success" style=" height: 40px;">MAKE YOUR EVENT LIVE</button>
		</div>
	</div>
	<div style="margin-left: 610px;">
		<a href="#goo"><img src="../images/go.png" style="width: 40px; height: 40px;"></a>
	</div>
	<?php include 'Footer.php'; ?>
</body>
</html>