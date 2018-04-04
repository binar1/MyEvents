<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="../css/OrganizationStyle.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-min.css">
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php include 'header.php';?>
<body>
<div class="container" style="padding-top: 50px;">
<div class="row divbg">
	<div class="col-sm-3 divimage" >
		<img src="../images/b.jpg" style="width: 200px; height: 200px; border-radius: 25px; ">
	</div>
	<div class="col-sm-3 divname" style="margin-top: 80px;">company name
	</div>
	<div class="col-sm-5 divname">
		<p style="margin-top: 80px;">
			<label>Address : Sulaymany</label>
			<label>Phone Number : +9647700000000</label>
		</p>
	</div>

	<div class="btn-group btn-group-justified" style="width: 100%;">
  <a href="#" class="btn btn-danger" style="width: 25%;">Events</a>
  <a href="AboutOrganization.php" class="btn btn-danger" style="width: 25%;">About</a>
  <a href="AddressOrganization.php" class="btn btn-danger" style="width: 25%;">Address</a>
  <a href="CertificationOrganization.php" class="btn btn-danger" style="width: 25%;">Certificate</a>

</div>
</div>
</div>
<div class="container">
	<div class="row" style="background-color: white; width: 100%">
		<div class="col-sm-12">
			<div class="col-sm-3 divimage">
				<img src="../images/b.jpg" style="width: 150px;height: 150px;">
			</div>
			<div class="col-sm-8">
				<table style="width: 100%;font-size: 20px;font-weight: bold; margin: 20px;">
					<tr>
						<td>Name Event</td>
					</tr>
					<tr>
						<td>Date & Time</td>
					</tr>
					<tr>
						<td>Location</td>
					</tr>

				</table>
			</div>
		</div>
		<hr style="width: 100%;">
		<div class="col-sm-12">
			<div class="col-sm-3 divimage">
				<img src="../images/b.jpg" style="width: 150px;height: 150px;">
			</div>
			<div class="col-sm-8">
				<table style="width: 100%;font-size: 20px;font-weight: bold; margin: 20px;">
					<tr>
						<td>Name Event</td>
					</tr>
					<tr>
						<td>Date & Time</td>
					</tr>
					<tr>
						<td>Location</td>
					</tr>

				</table>
			</div>
		</div>
	</div>

</div>
</body>
<?php include 'Footer.php';?>

</html>