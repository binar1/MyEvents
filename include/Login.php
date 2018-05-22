<?php require_once '../init.php';
 if (Input::exist()) {
 	if(Token::check(Input::get('token'))){
      $validate=new ValidationMember();
      $validation=$validate->check($_POST,
       array(
       	'email' =>array(
       		'require' => 'true' ,
             'type' => 'email' ,
       		 ),
       	'password' => array('require' => 'true' )
       ));
      if ($validation->passed()) {
      	$user=new User();
        $table='';
      	$remember=(Input::get('remember')==='on') ? true:false ;
       
   if (isset($_GET['type'])) {
     if($_GET['type']==='Member'){ $table='customer'; }elseif($_GET['type']==='Organization'){$table='organization';}
   }
        

      	$login=$user->login($table,Input::get('email'),Input::get('password'),$remember);

      	if ($login) {
      		Redirect::to('../index.php');
      	}else
      	{
      	  echo "<div class='alert alert-danger alert-dismissible' style='width:400px;margin-left:38%;margin-top:40%;position: absolute;'>
         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
         <p style='font-size:15px;text-transform:capitalize;' align='center'><pp> Your email or password is wrong
       </p></div>";
      	}
      }else{

      	foreach ($validation->errors() as $error) {
      		
      		echo "<div class='alert alert-danger alert-dismissible' style='width:400px;margin-left:38%;margin-top:40%;position: absolute;'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p style='font-size:15px;text-transform:capitalize;' align='center'><p> $error<br>
           </p></div>";
      		
      		
      	}
      }
 	}
 }


  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	    <title>Login</title>
    <link rel="stylesheet" href="../css/Login.css">
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-min.css">
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  </head>

	<body>
		<?php include 'Header.php'; ?>
		<div class="container-fluid" >
		<?php
		   if (Session::exists('home')) {
		    ?>
		    <div class="alert alert-success alert-dismissible" style="margin-top:60px;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <p style="font-size:25px;"><strong>Success!</strong> <?php echo Session::flash('home');  ?></p> 
  </div>	
		 <?php   
		   }
		 ?>	
		
       
    <div style="background-color:rgba(0,0,0,0.9);height:60px; width:300px;margin-top:60px;margin-left:37.5%;border-radius:50px;padding-left:50px;padding-top:10px;position:absolute;">
      <form action="" method="GET">
        <input type="submit" name="type" class="btn btn-danger" value="Organization">
        <input type="submit" name="type" class="btn btn-primary" value="Member">
      </form>
    </div>
		<div class="loginBox" style="top:60%;">
       
			<h2 style="color:white;font-size:20px;"><?php if(isset($_GET['type'])){ ?>Log In As <?php echo $_GET['type'];}else{ echo "<span style='color:red;'>*please select you type Login<span>"; } ?></h2>
			<form action="" method="POST">
				<p>Email</p> 
				<input type="text" name="email" placeholder="Enter Email" value=<?php if(isset($_COOKIE['email'])){ echo $_COOKIE['email'];} ?> >
				<p>Password</p>
				<input type="password" name="password" placeholder="••••••" value=<?php if(isset($_COOKIE['pwd'])){ echo $_COOKIE['pwd'];} ?> >>
				<div class="form-check">
                 <label class="form-check-label" style="margin-bottom:20px;color:white;">
                     <input class="form-check-input" name="remember" type="checkbox" style="width:50px;margin-left:-10px;">Remember me
                 </label>
                 </div>
				<input type="hidden" name="token" value=<?php echo Token::genarate();   ?> >
				<input type="submit" name="submit" value="Sign In" >
				
				<a href="ForgetPass.php">Forget Password</a>
			</form>
		</div></div><div class="container-fluid" style="margin-top:600px;">
			<?php include 'Footer.php'; ?>
		</div>
		
		
	
</body>
</html>
