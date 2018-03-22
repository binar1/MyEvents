<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-min.css">
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<style type="text/css">
		#form{
			padding-top: 100px;
			background-color: rgba(0,0,0,0.9);
			height:600px;
			margin-top:100px;
			border-radius:20px;
		}
       label{
       	color:white;
       	font-family:Time New Roman;
       }
       .btn{
       	margin-top:80px;
       }
       .organization-btn{
       margin-left:30%;
       border:.5px solid #d9534f;
       color:#d9534f;
       width:110px;
          height:32.4px;
       
       }
       .organization-btn:hover{
       	background-color:#d9534f;
        border:.5px solid black;
        color:black;
         border-radius:5px;
       }
       .member-btn{
          border:.5px solid #5bc0de;
          color:#5bc0de;
          width:110px;
          height:32.4px;
       }
       .member-btn:hover{
        background-color:#5bc0de;
        border:.5px solid black;
         color:black;
         border-radius:5px;
       }
    .form-group{
    	padding-left:50px;
    }

	</style>
</head>
<body style="background-color: #ebebe0">
	<div class="container-fluid">
	<?php include 'Header.php';  ?>
    <div class="container" style="<?php if(isset($_GET['register'])){ echo "display:none;"; }  ?>background-color:rgba(0,0,0,.9);height:200px;margin-top:100px;width:600px;border-radius:10px;">
    <a href="?register=organization" class="btn organization-btn">Organization</a>
    <a href="?register=member" class="btn member-btn">Member</a>
    </div>

    <div class="container form-form" style="<?php if(!isset($_GET['register'])){ echo "display:none;"; }  ?>height:600px;background-color:rgba(0,0,0,.9);margin-top: 60px;width:700px;border-radius:20px;">
<?php if (isset($_GET['register'])) {

 if ($_GET['register']=="organization") {

  ?>
    <form class="form-horizontal" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> style="margin-top:30px;">
  <h1 align="center" style="margin-bottom: 50px;font-family:swift;font-weight:bold;color:#f9f9f9">Oganization Register</h1>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10">
      <input type="text" style="width:200px; float:left;" class="form-control" id="fname" placeholder="First Name" >
      <input type="text" style="width: 200px;float:left;margin-left:10px;" class="form-control" id="lname" placeholder="Last Name">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" style="width:410px;" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="number">Phone:</label>
    <div class="col-sm-10">
      <input type="number" style="width:410px;" class="form-control" id="email" placeholder="Enter Phone Number">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="address">Address:</label>
    <div class="col-sm-10">
      <input type="text" style="width:410px;" class="form-control" id="address" placeholder="Enter address ">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2"  for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" style="width:410px;" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group" style="padding-left:53px;">
    <label class="control-label col-sm-2" style="width:200px;margin-left:-95px;"  for="pwd">Re-Password:</label>
    <div class="col-sm-10"> 
      <input type="password" style="width:410px;" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>

  <div class="form-group" style="margin-top:-100px;"> 
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" onmouseover="this.style.backgroundColor='#5cb85c';this.style.color='black'" onmouseout="this.style.backgroundColor='transparent';this.style.color='#5cb85c'" name="register" style="width:200px;margin-left: 15%;color:#5cb85c;background-color:transparent;border:0.5px solid #5cb85c;" 
      class="btn submit-btn" value="Register" />
  </div>
</form>	
<?php }elseif($_GET['register']='Member'){

	?>
	 <form class="form-horizontal" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> style="margin-top:60px;">
  <h1 align="center" style="margin-bottom: 50px;font-family:swift;font-weight:bold;color:#f9f9f9">Member Register </h1>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10">
      <input type="text" style="width:200px; float:left;" class="form-control" id="fname" placeholder="First Name" >
      <input type="text" style="width: 200px;float:left;margin-left:10px;" class="form-control" id="lname" placeholder="Last Name">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" style="width:410px;" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="number">Phone:</label>
    <div class="col-sm-10">
      <input type="number" style="width:410px;" class="form-control" id="email" placeholder="Enter Phone Number">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="address">Address:</label>
    <div class="col-sm-10">
      <input type="text" style="width:410px;" class="form-control" id="address" placeholder="Enter address ">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2"  for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" style="width:410px;" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group" style="padding-left:53px;">
    <label class="control-label col-sm-2" style="width:200px;margin-left:-95px;"  for="pwd">Re-Password:</label>
    <div class="col-sm-10"> 
      <input type="password" style="width:410px;" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
<div class="form-group">
    <label class="control-label col-sm-2"  for="date">Birthday</label>
    <div class="col-sm-10"> 
      <input type="Date" style="width:200px;"  id="date"  >
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2"  for="pwd">Gender:</label>
    <div class="col-sm-10" style="padding-top:6px;"> 
      <input type="radio" style="width:50px;"  id="gender" value="1" name="gender"><label>Male</label>
      <input type="radio" style="width:50px;"  id="gender" value="0" name="gender"><label>Female</label>
    </div>
  </div>
  <div class="form-group" style="margin-top:-100px;"> 
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" onmouseover="this.style.backgroundColor='#5cb85c';this.style.color='black'" onmouseout="this.style.backgroundColor='transparent';this.style.color='#5cb85c'" name="register" style="width:200px;margin-left: 15%;color:#5cb85c;background-color:transparent;border:0.5px solid #5cb85c;" 
      class="btn submit-btn" value="Register" />
  </div>
</form>

<?php	
}}
	?>
	
    </div>
	
 </div>

</body>
</html>



<?php include 'Footer.php';  ?>