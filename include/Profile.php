<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap-min.css">
<style type="text/css">
 .list-group a{
padding-bottom:20px;
 }
 .pro-pic-bg{
 	background-color:#f6f6f6;width:160px;height:160px;margin-left:25.8%;margin-top:-215px;border-radius:100px; position:absolute;opacity:0;
 }
 .pro-pic-bg:hover {
  opacity:0.8;
  cursor:pointer;
 }
 
</style>
<body>
	<div class="container-fluid">
	<?php include 'Header.php'; ?>

<div class="row" >
 <div class="col-lg-4" style="width:350px;height:550px;margin-left:20px;margin-top:30px;overflow:hidden; background-color:#f6f6f6;position:relative;">
  <img src="../images/bb.jpg" style="width:160px;height:160px;margin-left:28%;margin-top:10%" class="img-circle">
  <h3 align="center">Binar</h3>
  <div class="pro-pic-bg">
  	<input type="butoon" name="Upload" value="   Upload" class="btn-warning" style="margin-top:50%;margin-left:28%;border-radius:20px;height:35px;width:80px;opacity:1;">
  	<input type="file" name="Upload"  style="margin-top:50%;margin-left:28%; width:80px;position:absolute;margin-top:-30px;opacity:0;cursor:pointer;">
  </div>
  <div class="list-group" style="margin-top:0px;width:350px;margin-left:-15px;position:absolute;">
  <a href="?part=setting" class="list-group-item list-group-item-action text-center">Setting</a>
  <a href="?part=password" class="list-group-item list-group-item-action text-center">Change Password</a>
  <a href="?part=AddEvent" class="list-group-item list-group-item-action text-center">Add Event</a>
   <a href="?part=myEvents" class="list-group-item list-group-item-action text-center">My Event</a>
  <a href="?part=myticket" class="list-group-item list-group-item-action text-center">My Tickts</a>
  <a href="?part=myintresting" class="list-group-item list-group-item-action text-center">My Intresting</a>
</div>

</div>
<div class="col-sm-7" style="margin-top:60px; width:60%;">
<?php
  if (isset($_GET['part'])) {
  	if ($_GET['part']=="setting") {
  	?>
     <form class="form-horizontal" style="margin-left:10%;" action="" >
     	<div class="form-group">
     		<label class="control-label col-sm-2">Name</label>
     		<div class="col-sm-10">
     			<input type="text" name="name" class="form-control" width="400px;">
     		</div>
     		
     	</div>
     	<div class="form-group">
     		<label class="control-label col-sm-2">Email</label>
     		<div class="col-sm-10">
     			<input type="text" name="email" class="form-control" width="400px;">
     		</div>
     		
     	</div>
     	<div class="form-group">
     		<label class="control-label col-sm-2">Phone</label>
     		<div class="col-sm-10">
     			<input type="number" name="phone" class="form-control" width="400px;">
     		</div>
     		
     	</div>
     	<div class="form-group">
     		<label class="control-label col-sm-2">Address</label>
     		<div class="col-sm-10">
     			<input type="number" name="address" class="form-control" width="400px;">
     		</div>
     		
     	</div>
     	<div class="form-group">
     		<label class="control-label col-sm-2">password</label>
     		<div class="col-sm-10">
     			<input type="text" name="pwd" class="form-control" width="400px;">
     		</div>
     		
     	</div>
     	<input type="submit" name="submit" value="Update" class="btn btn-success " style="margin-left:50%;"/>

     </form>

  	<?php
  	}
  	if($_GET['part']=="password"){
  		?>
   <form style="margin-left:10%;">
   	<div class="form-group">
   		<label >Old Password</label>
   		<input type="password" name="oldpass" class="form-control" width="400px;" required>
   	</div>
   	<div class="form-group">
   		<label ">New Password</label>
   		<input type="password" name="newpass" class="form-control" width="400px;">
   	</div>
   	<div class="form-group">
   		<label >Re-New Password</label>
   		<input type="password" name="oldpass" class="form-control" width="400px;" required>
   	</div>
   	<input type="submit" name="changepass" value="Change" class="btn btn-warning" style="margin-left:40%;">
   </form>

  	<?php
  	}
  }

  ?>
  </div>
  
</div>
<?php include 'Footer.php';  ?>	
	</div>
	

</body>
</html>