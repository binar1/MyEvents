<!DOCTYPE html>
<html>
<head>
	<title>My Event</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-min.css">
	<link rel="stylesheet" type="text/css" href="../css/your_event.css">
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style type="text/css">
    	.jumbotron{
    		color: #cd7f32;
    		margin-top: 80px;
    		height: 450px;
    		background-image: url(../images/ye.jpg);
    	}
    	.tex{
    		margin-bottom:40px;
    		font-family: monospace;
    		text-shadow: 3px 4px 3px dimgray;
    		font-style:  oblique;
    		letter-spacing: 3px;
    	}
    	.tex:hover{
    		font-size: 80px;
    		font-family: initial;
    		font-style: oblique;
    	}
    	.tow{
    		margin-top: 0;
    		margin-left: 250px;
    		width: 450px;
    		margin-bottom: 0px;
    	}
    </style>
</head>
<body>
	<?php include ('Header.php');?>
	<div class="container jumbotron text-center">
		<h1 class="tex">Company Name</h1>  
		<form class="form-inline">
			<div class="input-group">
			    <input type="Search" class="form-control" size="50" placeholder="Search for your Event" required>
			    <div class="input-group-btn">
			    	<button type="button" class="btn btn-danger">Search</button>
			    </div>
			</div>
		</form>
	</div>
	<div class="container">
		<div class="row">
		    <div class="col-sm-4">
		    	<div class="box img-rounded">
					<div class="fegure">
						<img src="../images/ev.jpg">
						<div class="caption">
							<div class="about">
								<h3>Your Events Here</h3>
							</div>
						</div>
					</div>
				</div>
		    </div>
		    <div class="col-sm-4">
		    	<div class="box img-rounded">
					<div class="fegure">
						<img src="../images/ev.jpg">
						<div class="caption">
							<div class="about">
								<h3>Your Events Here</h3>
							</div>
						</div>
					</div>
				</div>
		    </div>
	    	<div class="col-sm-4">
	    		<div class="box img-rounded">
					<div class="fegure">
						<img src="../images/ev.jpg">
						<div class="caption">
							<div class="about">
								<h3>Your Events Here</h3>
							</div>
						</div>
					</div>
				</div>
	    	</div>
	  	</div>
	  	<dir class="row">
	  		<div class="col-sm-6">
		    	<div class="box img-rounded tow">
					<div class="fegure">
						<img src="../images/ev1.jpg">
						<div class="caption">
							<div class="about">
								<h3>Your Events Here</h3>
							</div>
						</div>
					</div>
				</div>
		    </div>
		    <div class="col-sm-6">
		    	<div class="box img-rounded tow" >
					<div class="fegure">
						<img src="../images/ev1.jpg">
						<div class="caption">
							<div class="about">
								<h3>Your Events Here</h3>
							</div>
						</div>
					</div>
				</div>
		    </div>
	  	</dir>
	</div>
	<?php include 'Footer.php'; ?>
</body>
</html>