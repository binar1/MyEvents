
<!DOCTYPE html>
<html>
<head>
	<title>ContactUs</title>	
	<link href="../css/bootstrap-min.css" rel="stylesheet">
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    

p{
	font-size: 17px;
	font-weight: bold;
	padding-left: 3px;
	padding-right: 3px;
	padding: 1px;
	color:#10100a;
}
h2{
	font-size: 35px;
	font-weight: bolder;
	padding: 1px;
	color: #6d6d46;

}

</style>
   
</head>
<body style="background-color: #ebebe0;">
	<?php include("Header.php"); ?>
<div  class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12" style="padding-top: 50px;">    			   			
					<h2 class="title text-center">Contact Us</h2>    			    		<div style="background-color: rgba(93, 93, 60,0.2); border-radius: 5px; padding: 15px;" >
						
							<p style="color: #2f2f1e; font-weight: bolder; font-size: 22px; text-decoration-style: wavy;text-shadow: transparent; text-align: left; ">Have questions about a large or complex event?<br> 
						Our team of experts will track down the answers.
					    Simply fill out the form to the right, and we’ll be in touch shortly.</p>
					</div>		    				
				</div>			 		
			</div> 
			<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Get In Touch</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>                        
				            <div class="form-group col-md-12" style="text-align: center; padding: 3px;">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Send" style="padding: 3px; border-color: black; background-color: #6d6d46; ">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>My Event</p>
							<p>Sulaymaniah,Iraq</p>							
							<p>Mobile: +964 111 111 1111</p>							
							<p>Email: contact@myevent.com</p>
	    				</address>
	    				<div >
	    					<h2 class="title text-center">Social Networking</h2>
							<table class="table table-striped " style="text-align: center;
							">
								<td><a  href="https://www.facebook.com/baahroz">
 									 <img     src="../images/fb.png" alt="facebook"  
 									      onmouseover="this.src='../images/fbh.png';" 
 									       onmouseout="this.src='../images/fb.png';"
 
 									 style="width:40px;height:40px;"  >
									</a></td>
								<td><a  href="https://plus.google.com/u/0/112740290666375187219">
 									 <img     src="../images/g+.png" alt="google+"  
 									      onmouseover="this.src='../images/g+h.png';" 
 									       onmouseout="this.src='../images/g+.png';"
 
 									 style="width:40px;height:40px;"  >
									</a></td>
								<td><a  href="https://www.instagram.com/baahroz">
 									 <img     src="../images/ig.png" alt="instagram"  
 									      onmouseover="this.src='../images/igh.png';" 
 									       onmouseout="this.src='../images/ig.png';"
 
 									 style="width:40px;height:40px;"  >
									</a></td>
							</table>
							
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div>   

    
</body>
</html>
 <?php include 'Footer.php'; ?>