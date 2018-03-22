<!DOCTYPE html>
<html>
<head>
	<title>Your Ticket</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-min.css">
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
      .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}
.a1:hover{
text-decoration: none;
}

    </style>
</head>
<?php include ('Header.php');?>

<body style="background-color: #ebebe0;">

<div class="row center" style="padding: 100px; width: 100%;">

	<div class="imageBox col-sm-4" ><img src="../images/ticket1.png" style="width: 200px; height: 200px; float: left;">
</div>
<div class="imageBox col-sm-4"  ><h1 style="text-align: center; color:#ff9933; font-weight: bold; font-family: Times New Roman; padding-top: 50px; font-size: 60px;">Welcome</h1>
	<h2 style="text-align: center; color:#b35900; font-weight: bold; font-family: Times New Roman;  font-size: 20px;">Bahroz Mohammed</h2>

</div>
    <div class="imageBox col-sm-4" ><img src="../images/ticket3.png" style="width: 200px; height: 200px; float: right;"> 
</div>
    
</div>
<div class="container"><h1 style="text-align: center; font-size: 20px; color: #4d2600; padding-top: 20px padding-bottom:20px; font-weight: bolder; white-space: 1px;"> My Ticket
</h1></div>

<div class="table-responsive">          
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>#</th>
        <th>Event Name</th>
        <th>Category</th>
        <th>Date</th>
        <th>price</th>
        <th>City</th>
        <th>Country</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>nawroz</td>
        <td>music</td>
        <td>21/3/2018</td>
        <td>20$</td>
        <td>Sulaymany</td>
        <td>Iraq</td>
      </tr>
    </tbody>
  </table>
  </div>
  <div class="container" style="width: 100%; ">
      <div > <img style="width: 50%" src="../images/empty.png" class="center">
      </div>
        <div style="width: 100%;" >
          <a class="a1" href="../index.php"><input style="width: 50%;" type="submit" class="btn btn-danger btn-lg center " value="DISCOVER EVENTS"></button></a>
        </div>
</div>
</body>
</html>


<?php include 'Footer.php'; ?>