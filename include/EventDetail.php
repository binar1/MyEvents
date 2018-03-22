<!DOCTYPE html>
<html>
<head>
	<title>Event Detail</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="../js/map.js"></script>
	<style type="text/css">
     @font-face{
     	font-family:'Caecilia';
     	src:'../fonts/Caecilia-Roman.otf';
     }
     .detail{
     	font-family:Caecilia;
     }
     #socials >li{
     float:left;
     margin-right:20px;
     }
     h1,h4,h3,h2,p{
     	color:#f9f9f9;
     }
     .suggest:hover{
       transform:scale(1.05);
       transition:0.5s;
       cursor:pointer;
     }

	</style>
	<script type="text/javascript">
		function bb(){
			var like=document.getElementById('Like').src="../icon/like2.png";
		}
	</script>
</head>
<body style="background-color:#f9f9f9;">
<div class="container-fluid">
<?php include 'Header.php' ?>
 <div class="row" style="padding-top:55px;">
 <div class="col-lg-9" style="padding-top:10px;">
 <img src="../images/womenTech.jpg" class="img-rounded" style="width:100%;height:400px;" />	
 <div class="row" style="width:100%;padding-bottom:10px;background-color:rgba(0,0,0,0.9);padding-top:20px;margin:0;">
 	<div class="col" style="height:100%;width:20%;float:left;">
 		<img onclick="bb()" id="Like" src="../icon/like.png" width="30px" height="30" align="right" style="margin-top:20%;cursor:pointer;">
 		<p align="right" style="color:#ed0707;margin-top:40%;font-weight:bold;font-size:20px;">500</p>
 	</div>
 	<div class="col" style="height:100%;width:60%;float:left;">
 	<h1 class="text-center" style="margin:0;">IWD: Women in Tech Summit Sulaymaniyah </h1>
 	<h4 class="text-center">By Cinama salm</h4>
 	<h4 class="text-center text-light" style="font-family:serif;">Day:APR 08   3:00PM</h4>
 	<h4 class="text-center text-light" style="font-family:serif;">Address:Sulaimany AUS</h4>
 	<a href="" style="width:100%;height:50px;padding-top:15px;margin-top:10px;" class="btn btn-success">Buy Ticket</a>
 </div>
 	<div class="col" style="height:100%;width:20%;float:left;">
 		<a href="#container-socials" data-toggle="collapse"><img  id="Like" src="../icon/Share.png" width="30px" height="30" align="left" style="margin-top:20%;cursor:pointer;"></a>
 	</div>
 	
 </div>
 <div id="container-socials" class="collapse" style="height:100px;margin-top:-150px;width:300px;margin-left:58%;position:absolute;">
 	<ul id="socials" style="list-style-type:none;">
 		<li><a href=""><img src="../icon/facebook" width="50px" height="50px"></a></li>
 		<li><a href=""><img src="../icon/instagram" width="50px" height="50px"></a></li>
 		<li><a href=""><img src="../icon/twitter" width="50px" height="50px"></a></li>
 	</ul>
 </div>

 <div style="margin-top:15px;background-color:rgba(0,0,0,0.9);padding:5px;">
 <h4 class="text-muted" style="color:#f9f9f9"" >Description</h4>	
 <p style="font-size:22px;padding:10px;color:#f9f9f9;text-overflow:ellipsis;" class="detail text-justify">Postage only needs to be added to one ticket for the entire order to be delivered. To try and avoid overpayments, the system will only permit you to add 1 ticket of that price with postage.
Please ensure that if you select postage that you complete your full name, full address and postcode to ensure tickets are processed and can arrive as quickly as possible.

If you do not select postage then your order must be collected from Lincoln City FC Ticket office as there will be no tickets available to collect from Wembley. (Collection dates will be announced)

Ambulant disabled supporters need to select the age appropriate ticket then add a carer if applicable.

Wheelchair disabled supporters need to select the age appropriate ticket then add a carer if applicable. On checkout, please ensure that select "yes" to being a wheelchair user. There is no accessability for wheelchairs within the category 6 tickets.

Where multiple tickets are purchased within the same price category, we will endeavour to ensure that they are all allocated together. If multiple orders are placed on the same day, the same name will need to be put in the "group leader" box on each order. Wherever possible, we will try to allocate these muliple orders together. Should you be an organised group and require more than 9 tickets then please follow the instructions given on the Lincoln City FC website for group bookings.

Travel will need to be ordered seperately.

Tickets for this fixture, along with travel, will not be sent electronically as a physical ticket is needed for admittance.

Refund Policy

Refunds in respect of this fixture may only be granted if the ticket is returned to the ticket office before tickets are taken 'Off Sale'.

Please note, however, it is the customer's responsibility to check whether the event is going ahead at the scheduled date, time and venue, and we cannot guarantee that we will inform the customer of any changes to the event date, time or venue.

We cannot accept any liability for tickets that are not delivered, however we will endeavour to help as much as we can.</p>
<div style="margin-bottom:50px;">
	<h2 style="font-family:swift" align="center">you can find it in the map</h2>
	<div id="map" class="container-fluid" style="height:400px;margin-top:10px;">
		
	</div>


</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfzmq_dsmZCu6EhxAUAuAoYP1kNWGrp94&callback=initMap"
    async defer></script>
 </div>
 </div>
 <div class="col-lg-3" style="margin-top:10px;">
  <div style="width:100%;height:40px;background-color:rgba(0,0,0,0.9);font-family:Roboto;padding-top:0.5px;" align="center"><h4>Here's some Event you may be Like it</h4></div>    
 <div class="suggest" style="width:100%;background-color:#f9f9f9;margin-top:-50px;height:200px;background-image:url('../images/bb.jpg');background-size:cover;">
 <h4 style="margin-top:20%;margin-left:90%;color:white;background-color:#00c365;height:35px;width:30px;">12$</h4>
 <h3 style="margin-top:40%;color:white;font-weight:bold;font-family:Helvetica;margin-left:10px;">Food festival</h3>
 </div> 
 <div class="suggest" style="width:100%;background-color:#f9f9f9;margin-top:-50px;height:200px;background-image:url('../images/bb.jpg');background-size:cover;">
 <h4 style="margin-top:20%;margin-left:90%;color:white;background-color:#00c365;height:35px;width:30px;">12$</h4>
 <h3 style="margin-top:40%;color:white;font-weight:bold;font-family:Helvetica;margin-left:10px;">Food festival</h3>
 </div> 
 </div>	
 </div>
	
</div>
</body>
</html>