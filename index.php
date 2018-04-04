 <?php require_once 'init.php';
  $catagorey=new Catagorey();
  
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="binar,bahroz,ardin,choman">
    <link rel="icon" href="images/logo.png">
    <title>MyEvents</title>
    <link rel="stylesheet" type="text/css" href="css/header.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap-min.css">
    <link href="bug-workaround.css" rel="stylesheet">
    <link href="navbar.css" rel="stylesheet">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  </head>

    <style type="text/css">
    .carousel-inner > .item >img,
    .carousel-inner > .item > a >img{
         width:100%;
         margin:0px;
    }	
    .carousel-caption{
    	left:0;
    	right:0;
    	width:100%;
    	height:100%;
        padding:0px;
        top:50%;
    }
    @font-face {
       font-family: "Roboto";
       src: url("fonts/Roboto.ttf");  }
       .carousel-caption h3,p{
       	right:0
       	left:0;
       	top:45%;
       	transform:translateY(-50%);
        font-family:'Roboto',sans-serif;
       }
    .carousel-caption h3{
     font-size:5em;
     text-transform:capitalize;
    }
    .carousel-caption p{
    	font-size:2em;
   }
   .catagory-images{
   	width:100%;
   	height:220px;
   	border-radius:7px;
   }
   .col-lg-7{
     height:220px;padding:0;
     margin-bottom:25px;
   }
   .left-images{
   	margin-right:25px;
   }
   .col-lg-4{
    height:220px;padding:0; margin-bottom:25px;
   
   }
    .catagory-images:hover{
    transform: scale(1.05);
    transition:0.7s;
    cursor:pointer;
   }
   
   .catagory-images:hover .detail{
    visibility:visible;
   }
   .detail{
   	visibility:hidden;
   }
   
 .container-cols{
 	position:absolute;
    top:50%;
    left:40%;
    width:100%;
    height:100%;
    margin:0;
	  padding:0;
    font-size:40px;
    color:white;
    text-transform:capitalize;
    font-family:Roboto;
 }
 
.col-lg-4 .container-cols{
  left:30%;
}
.col-lg-7 .container-cols{
  left:50%;
  top:50%;
}
.footer-links:hover{
	text-decoration:none;
}


    </style>

  </head>
    <?php # include 'Header.php' ?>
  <body data-spy="scroll" data-target=".navbar" data-offset="50" style="">

   <div class="container-fluid" style="padding:0;">
    <?php 
     $user=DB::getInstance()->query('select * from user');
    // $update=DB::getInstance()->update('user',3,array('username' =>'Mr.binar','password'=>1234 ));
     
    //$insert= DB::getInstance()->insert('user',array('username' => 'binar','password'=>123));
    // if ($insert) {
    //  echo "success";
    // }
    /** if (!$user->count()) {
            echo "nimana";
           }else {
            echo "dastxosh";
            foreach ( $user->result() as $key) {
               echo $key->username ."<br>".$key->password;
               
            }
           }**/
      
          $user=new User();
           if ($user->isLoggedIn()){ ?>
           <div class="alert alert-success alert-dismissible" style="margin-top:70px;" >
             <button type="button" class="close" data-dismiss="alert">&times;</button>
             <strong>Success!</strong> Welcome Back <?php if($_SESSION['type']==='customer'){echo escape($user->data()->firstname);}elseif ($_SESSION['type']==='organization') {
                 echo escape($user->data()->name)." Organization";
             }   ?>
            </div>
             
         <?php  }else{
            ?>
            <div class="alert alert-warning alert-dismissible" style="margin-top:60px;position:sticky;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Warning!</strong> you need to be <a href="include/Register.php">Register</a>
          </div>
          <?php
           }
     ?>
         
   <?php  include 'Header.php';  ?>

   
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
   <div id="myCarousel" class="carousel slide" style="margin-top:50px;" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active" style="text-align:center;font-size:40px;font-weight: bold;color:white;"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/bb.jpg" alt="Los Angeles" style="width:100%;height:500px;">

      <div class="carousel-caption">
      	<h3>food festival</h3>
      	<p>welcome to food festival</p>
      </div>
    </div>

    <div class="item">
      <img src="images/bbb.jpg" alt="Chicago" style="width:100%;height:500px; ">
      <div class="carousel-caption">
      	<h3>DJ festival</h3>
      	<p>welcome to DJ festival</p>
      </div>
    </div>

    <div class="item">
      <img src="images/b.jpg" alt="New York" style="width:100%;height:500px;">

      <div class="carousel-caption">
      	<h3 class="carousel-title">music festival</h3>
      	<p>welcome to music festival</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div  class="container" style="margin-top:100px;" >
	<h1 align="center">Browse by Top Categories</h1>
	<div class="row" style="margin-top:40px;margin-bottom:30px;">
    <div class="col-lg-7 left-images" >
    <a href=<?php echo "include/EventList.php?name=".$catagorey->result()[0]->name; ?>>	<img src=<?php echo "images/catagorey/".$catagorey->result()[0]->img ?> class="catagory-images" />
    	<div class="container-cols"><p><?php echo $catagorey->result()[0]->name; ?></p></div></a>
    </div>
    <div class=" col-lg-4" >
    <a href=<?php echo "include/EventList.php?name=".$catagorey->result()[1]->name; ?>>	<img src=<?php echo "images/catagorey/".$catagorey->result()[1]->img ?> class="catagory-images"/>
    	<div class="container-cols"><p><?php echo $catagorey->result()[1]->name; ?></p></div></a>
    </div>
    <div class="col-lg-4 left-images" >
    	<a href=<?php echo "include/EventList.php?name=".$catagorey->result()[2]->name; ?>><img src=<?php echo "images/catagorey/".$catagorey->result()[2]->img ?> class="catagory-images" />
    	<div class="container-cols"><p><?php echo $catagorey->result()[2]->name; ?></p></div></a>
    </div>
    <div class=" col-lg-7" >
    	<a href=<?php echo "include/EventList.php?name=".$catagorey->result()[3]->name; ?>> <img src=<?php echo "images/catagorey/".$catagorey->result()[3]->img ?> class="catagory-images"/>
    	<div class="container-cols"><p><?php echo $catagorey->result()[3]->name; ?></p></div></a>
    </div>
    <div class="left-images col-lg-4">
    	<a href=<?php echo "include/EventList.php?name=".$catagorey->result()[4]->name; ?>><img src=<?php echo "images/catagorey/".$catagorey->result()[4]->img ?> class="catagory-images"/>
      <div class="container-cols"><p><?php echo $catagorey->result()[4]->name; ?></p></div></a>
    </div>
    <div class="left-images col-lg-4">
    <a href=<?php echo "include/EventList.php?name=".$catagorey->result()[5]->name; ?>>	<img src=<?php echo "images/catagorey/".$catagorey->result()[5]->img ?> class="catagory-images"/>
      <div class="container-cols"><p><?php echo $catagorey->result()[5]->name; ?></p></div></a>

    </div>
    <div class="col-lg-3">
    	<a href=<?php echo "include/EventList.php?name=".$catagorey->result()[6]->name; ?>><img src=<?php echo "images/catagorey/".$catagorey->result()[6]->img ?> class="catagory-images"/>
      <div class="container-cols"><p><?php echo $catagorey->result()[6]->name; ?></p></div></a>

    </div>
    
  </div>

</div>

   <?php include 'Footer.php';   ?> 
</div>   

  </body>
</html>
