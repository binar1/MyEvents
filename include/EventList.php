<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	
	
	</style>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-min.css">

	<link rel="stylesheet" type="text/css" href="../css/eventliststyle.css">
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Event List</title>
</head>
<body>
<?php include ('Header.php');?>
	<div class="container" >
		<img style="height: 350px;" src="../images/maxresdefault.jpg">
		</div>
		<div class="container" style="width: 100%; height: 150px; text-align: center; font-size: 30px; font-weight: bolder; padding-top: 50px;"> Event Name</div>
		<div class="container"><form>
			<div class="input-group" style="right: 8%;">
				<input type="text" class="form-control" placeholder="Search Event" name="search" style="height: 50px; width: 25%; float: right; padding-left: 1%; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-top-left-radius: 0px; border-bottom-left-radius: 0px;">
				<input type="text" name="city" class="form-control" placeholder="City" style="height: 50px; width: 25%; float: right;padding-left:1%; ">
				<select  class="form-control" style="height: 50px;width: 25%; float: right; padding-left: 1%; border-top-left-radius: 7px; border-bottom-left-radius: 7px; ">
					<option selected>All Dates</option>
					<option>Today</option>
					<option>Tomorrow</option>
					<option>This Week</option>
					<option>Next Month</option>
				</select>
				<div class="input-group-btn">
				<button type="button" class="btn btn-info" style="height: 50px; margin-left: 3px; border-radius: 7px;">Search
       			</button></div>
				</div>
		</form></div>
<div class="row container1" style="padding: 5px; width: 100%;">
    <div class="imageBox col-sm-4" ><img src="../images/cinama.png">
   
   <a href="yourticket.php"><div class="textBox"><h1>cinama festival</h1>
   </div></a>
</div>
    <div class="imageBox col-sm-4" ><img src="../images/music.jpg">
   
   <a href="yourticket.php"><div class="textBox"><h1>Music festival</h1>
   </div></a>
</div>
    <div class="imageBox col-sm-4" ><img src="../images/dims.jpg">
   
   <a href="yourticket.php"><div class="textBox"><h1>Swimming festival</h1>
   </div></div></a>
  </div>
 
</body>
</html>
 <?php include 'Footer.php'; ?>