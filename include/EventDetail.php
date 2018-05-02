<?php require_once '../init.php';
$event=false;
if (isset($_GET['number'])) {
 $event=new Event($_GET['number'],null); 
}
 

  ?>
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
<?php if (isset($_GET['number'])) {
  if ($_GET['number']) {
 
  ?>
 <div class="row" style="padding-top:55px;">
 <div class="col-lg-9" style="padding-top:10px;">
 <img src=<?php echo "../images/Events/".$event->data()->img; ?> class="img-rounded" style="width:100%;height:400px;" />	
 <div class="row" style="width:100%;padding-bottom:10px;background-color:rgba(0,0,0,0.9);padding-top:20px;margin:0;">
 	<div class="col" style="height:100%;width:20%;float:left;">
 		<img onclick="bb()" id="Like" src="../icon/like.png" width="30px" height="30" align="right" style="margin-top:20%;cursor:pointer;">
 		<p align="right" style="color:#ed0707;margin-top:40%;font-weight:bold;font-size:20px;">500</p>
 	</div>
 	<div class="col" style="height:100%;width:60%;float:left;">
 	<h1 class="text-center" style="margin:0;"> </h1>
 <a href=<?php echo "ProfileOrganization.php?profile=".$event->data()->organization_id; ?>>  <h4 class="text-center">By:<?php echo $event->data()->oranizername; ?></h4></a>
 	<h4 class="text-center text-light" style="font-family:serif;">Day:<?php echo $event->data()->start_date."&nbsp;&nbsp; Time:".$event->data()->start_time;  ?></h4>
 	<h4 class="text-center text-light" style="font-family:serif;">Address:<?php echo $event->data()->address;  ?></h4>
  <h4 class="text-center text-light" style="font-family:serif;">Finsh-Day:<?php echo $event->data()->end_date."&nbsp;&nbsp; Time:".$event->data()->end_time; ?></h4>
 	<a href=<?php echo "BuyTicket.php?Ticket=".base64_encode($event->data()->event_id); ?> style="width:100%;height:50px;padding-top:15px;margin-top:10px;" class="btn btn-success">Buy Ticket</a>
 </div>
 	<div class="col" style="height:100%;width:20%;float:left;">
 		<a href="#container-socials" data-toggle="collapse"><img  id="Like" src="../icon/Share.png" width="30px" height="30" align="left" style="margin-top:20%;cursor:pointer;"></a>
 	</div>
 	
 </div>
 <div id="container-socials" class="collapse" style="height:100px;margin-top:-150px;width:300px;margin-left:58%;position:absolute;">
 	<ul id="socials" style="list-style-type:none;">
 		<li><a href=""><img src="../icon/facebook.png" width="50px" height="50px"></a></li>
 		<li><a href=""><img src="../icon/instagram.png" width="50px" height="50px"></a></li>
 		<li><a href=""><img src="../icon/twitter.png" width="50px" height="50px"></a></li>
 	</ul>
 </div>

 <div style="margin-top:15px;background-color:rgba(0,0,0,0.9);padding:5px;">
 <h4 class="text-muted" style="color:#f9f9f9"" >Description</h4>	
 <p style="font-size:22px;padding:10px;color:#f9f9f9;text-overflow:ellipsis;" class="detail text-justify"><?php echo $event->data()->detail; ?></p>
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
  <?php $events=new Event(null,$event->data()->catagorey_id); 
   if ($events->result()) {
    foreach ($events->result() as $ones) {
    $price='';
    if (!$ones->price) {
       $price='Free';
    }else{ $price .=$ones->price;}
    ?>
 <a href=<?php echo "EventDetail.php?number=".$ones->event_id; ?>><div class="suggest" style="width:100%;background-color:#f9f9f9;margin-top:-50px;height:200px;background-image:url(<?php echo "../images/Events/$ones->img";?>);background-size:cover;">
 <h4 style="margin-top:20%;margin-left:87%;color:white;background-color:#00c365;height:35px;width:35px;"><?php echo $price; ?></h4>
 <h3 style="margin-top:40%;color:white;font-weight:bold;font-family:Helvetica;margin-left:10px;"><?php echo $ones->name; ?></h3>
 </div> </a>
 <?php }  }

    ?>
 </div>	
 </div>
	<?php  } 
}else{
?>
<div class="col-lg-11">
 <h1 align="center" style="margin-top:150px;"> you are failed to open Event detail</h1> 
</div>

<?php }?>
</div>
</body>
</html>