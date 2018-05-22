<?php require_once '../init.php';
  $event=new Event();
 ?>
<?php 
 if (Input::exist()) {
       $validation=new ValidationMember();
       $organization=new User(); 
       $validation->check($_POST,array(
       	
       	'title' => array('require' => 'true' ,'min' =>4 ),
       	'address' => array('require' => 'true' ,'min' =>4 ),
       	'startdate' => array('require' => 'true' ),
       	'starttime' => array('require' => 'true'),
       	'finishdate' => array('require' => 'true'),
       	'finishtime' => array('require' => 'true'),
       	'organizerName' => array('require' => 'true' ,'min' =>4 ),
       	'eventDescription' => array('require' => 'true' ,'min' =>4 ),
       	'Price' => array('require' => 'true','less'=>0),
       	'NumberTickts' => array('require' => 'true','less'=>0),
       	 ));   
   
   if ($validation->passed()) {
   	if (Token::check(Input::get('token'))) {
   	    $id=$organization->data()->organization_id;

         try {

       
         	$elements=array(
         		'name'=>Input::get('title'),
         		'organizername'=>Input::get('organizerName'),
         		'detail'=>Input::get('eventDescription'),
         		'address'=>Input::get('address'),
         		'start_date'=>date('Y-m-d',strtotime(Input::get('startdate'))),
         		'end_date'=>date('Y-m-d',strtotime(Input::get('finishdate'))),
         		'start_time'=>Input::get('starttime'),
         		'end_time'=>Input::get('finishtime'),
         		'publish_time'=>date('Y-m-d H:i:s'),
         		'price'=>Input::get('Price'),
         		'available_ticket'=>Input::get('NumberTickts'),
         		'organization_id'=>$id,
         		'catagorey_id'=>Input::get('catagorey'),
         		'img'=>$organization->ImagesPrepare($_FILES['image'],"Events/"));
         	
         	$event->addEvent('event',$elements);
         } catch (Exception $e){
         	die($e->getMessage());
         }
    	}else
    	{
    		echo "token pewista";
    	}
    	    

    	}else {
    		foreach ($validation->errors() as $error) {
    			echo $error."<br>";
    		}
    	} 	
 }
?>
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
		<form style="margin-top: 40px;" class="form-inline" method="POST" enctype=multipart/form-data action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
		<div>
		    <label for="ED">EVENT Title:</label>
		    <input type="text" class="form-control" id="ED" name="title" placeholder="Give it a Title" style="width:80%;">
		</div>
		<br><br>
		<div >
		    <label for="LO">LOCATION:</label>
		    <input type="text" class="form-control" name="address" id="LO" placeholder="write Event address" style="width:80%;">
		</div>
	   <br>
		<div style="margin-top: 50px;" class="form-group">
			<label for="st">STARTS</label>
			<label for="en" style="margin-left:300px;">END</label><br>
		    <input type="date" class="form-control" id="st" name="startdate" style="width:100px;">
		    <input type="time" class="form-control" id="st" name="starttime" style="width:100px;">
		    <input type="date" class="form-control" id="en" name="finishdate" style="margin-left: 130px;width:100px;">
		    <input type="time" class="form-control" id="en" name="finishtime" style="width:100px;">	
		</div> 
		<br>
	    
		
    	<div class="form-group">
      	<h4 style="margin-top: 50px;">EVENT DESCCRIPTION</h4>
      	<textarea class="form-control" name="eventDescription" rows="5" placeholder="write about your event" cols="100"></textarea>
   	 	</div>
   	 	<br><br>
   	 	<div class="form-group">
			<h4>choose Event Catagorey</h4>
			<div class="input-group">
			<select class="form-control" style="width:200px;border-radius:10px;" name="catagorey">
			<?php $db=DB::getInstance();
			      $res=$db->query("select * from catagorey");
			      if ($res->count()>0) {
			      foreach ($res->result() as $ones) {
			   ?>	
			
	    	<option value=<?php echo $ones->catagorey_id; ?>><?php echo $ones->name ?></option>
	   
	    <?php
	       }}
			  ?>
			   </select>	
			</div>
	    		
		</div>
		<br><br>
   	 	<div class="form-group">
   	 	<h4 style="margin-top: 50px;">ORGANIZER NAME</h4>
  		<div class="input-group">
  		
		      <span class="input-group-addon">Name</span>
		      <input id="msg" type="text" class="form-control" name="organizerName" placeholder="Who's organizing this event?">
		    </div>	
   	 	</div>
   	 	<br>

		<input class="btn-primary linedit" type="button" readonly disabled value="2">
		<h3 style="display: inline; margin-left: 10px;">Create Ticktes</h3>
		<div class="ticket" style="margin-bottom:20px;">
			<h4>Write Your Event Ticket Price In Dollar If Its Free Just Write 0:</h4>
			<div style="margin-top: 30px;">
			  	<input type="number" min="0" name="NumberTickts" class="btn btn-default" placeholder="Number Ticktes" >
			  	<input type="number" min="0" name="Price" class="btn btn-default" placeholder="Price In Dollar" >
			</div>
		</div>
		<h4 style="margin-top: 50px;">EVENT IMAGE</h4>
		<div class="form-group" style="margin-left:150px;margin-top:-50px;">
	    	
	      <input type="file" name="image" style="position:absolute;margin-top:5px;opacity:0" >
	      <input type="button" name="Browse" class="btn btn-primary" value="Choose"> 

		</div>
		<br>
		<div style="margin-left: 400px;margin-top:20px; margin-bottom: 30px;">
		<div style="margin-left: 150px;">
		<input type="hidden" name="token" value=<?php echo Token::genarate(); ?>>
		<input type="submit" class="btn btn-success" name="finish" style=" height: 40px;" value="MAKE YOUR EVENT LIVE" />
		</div>

		
	</div>
</form>
	</div>
       
	
	<?php include 'Footer.php'; ?>
</body>
</html>
