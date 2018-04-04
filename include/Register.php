<?php require_once '../init.php'; 
 //if(Token::check(Input::get('token'))){ echo "haya";}
$FirstNameErr=$LastNameErr=$EmailErr=$NumberPhoneErr=$PasswordErr=$RePasswordErr=$dateErr=$GenderErr='';
$OrganizationNameErr=$OrganizationEmailErr=$OrganizationAddressErr=$OrganizationPasswordErr=$Re_PasswordErr='';

if (isset($_POST['registerO']) && isset($_GET['register'])) {
    $validate= new ValidationMember();
	$validation=$validate ->check($_POST,array(
    'OrganizationName'=>array(
    	'require' => 'true',
    	'type' => 'text',
    	'min' => '2',
    	'max' => '30' ),
    'OrganizationAddress'=>array(
      'require' => 'true' ),
    'OrganizationEmail'=>array(
      'require' => 'true',
      'type' => 'email',
      'min' => '6',
      'unique'=>'organization'),
    'OrganizationNumberPhone' =>array(
    	'require' => 'true',
    	'type' => 'number',
    	'min' => '2',
    	'max' => '10',
    	'unique'=>'customer'
    	 ),
    'OrganizationPassword' =>array(
    	'require' => 'true',
    	'min' => '6',
    	 ),
    'OrganizationRe_Password' =>array(
    	'require' => 'true',
    	'min' => '6',
    	'matches'=>'OrganizationPassword'
    	 )
	));

if ($validate->passed()) {
	
	$user=new User();
  $salt=Hash::salt(32);
  try{
  $user->create('organization',array(
    'name' =>$_POST['OrganizationName'],
    'email' =>Input::get('OrganizationEmail'),
    'password' =>Hash::make(Input::get('OrganizationPassword'),$salt),
    'salt' =>$salt,
    'address' =>Input::get('OrganizationAddress'),
    'phone' =>Input::get('OrganizationNumberPhone'),
    'date' =>date('Y-m-d H:i:s'),
     ));
   Session::flash('home', 'you have been registered AS Organization and can now log in !!');
   Redirect::to('Location:Login.php');
  }
  catch(Exception $e){
     die($e->getMessage());
  }


	}else{
	 
  

        foreach ($validate->errors() as $error) {
        	
              $strpos =strpos( $error,',');
             $varable= substr($error,0, $strpos);
            switch ($varable) {
            	    case 'OrganizationName':
            		$OrganizationNameErr=$error;
            		break;
            		case 'OrganizationAddress':
            		$OrganizationAddressErr=$error;
            		break;
            		case 'Email':
            		$OrganizationEmailErr=$error;
            		break;
            		case 'OrganizationNumberPhone':
            		$OrganizationNumberPhoneErr=$error;
            		break;
            		case 'OrganizationPassword':
            		$OrganizationPasswordErr=$error;
            		break;
            		case 'OrganizationRe_Password':
            		$OrganizationRe_PasswordErr=$error;
            		break;
            	
            	default:
            		# code...
            		break;
            }
                 
        	
        }
	}

}

if (isset($_POST['registerM']) && isset($_GET['register'])) {

	$validate= new ValidationMember();
	$validation=$validate->check($_POST,array(
    'FirstName' =>array(
    	'require' => 'true',
    	'type' => 'text',
    	'min' => '2',
    	'max' => '10',
    	 ),
    'LastName' =>array(
    	'require' => 'true',
    	'type' => 'text',
    	'min' => '2',
    	'max' => '10',
    	 ),
    'Email' =>array(
    	'require' => 'true',
    	'type' => 'email',
    	'min' => '6',
    	'unique'=>'customer'
    	 ),
    'NumberPhone' =>array(
    	'require' => 'true',
    	'type' => 'number',
    	'min' => '2',
    	'max' => '10',
    	'unique'=>'customer'
    	 ),
    'Password' =>array(
    	'require' => 'true',
    	'min' => '6',
      'max' => '10'
    	 ),
    'Re-Password' =>array(
    	'require' => 'true',
    	'min' => '6',
    	'matches'=>'Password'
    	 ),
    'date' =>array(
    	'require' => 'true'
    	 ),
    'Gender' =>array(
    	'require' => 'true'
    	 )
	));

    
    
  
   
if ($validate->passed()) {
    $user=new User();
    $salt=Hash::salt(32);
  try{
  $user->create('customer',array(
    'FirstName' =>Input::get('FirstName'),
    'LastName' =>Input::get('LastName'),
    'gender' =>Input::get('Gender'),
    'birthday' =>Input::get('date'),
    'address' =>Input::get('address'),
    'phone' =>Input::get('NumberPhone'),
    'email' =>Input::get('Email'),
    'password' =>Hash::make(Input::get('Password'),$salt),
    'salt' =>$salt,
    'date' =>date('Y-m-d H:i:s'),
     ));
   Session::flash('home', 'you have been registered AS member and can now log in !!');
   Redirect::to('../include/Login.php');
  }
  catch(Exception $e){
     die($e->getMessage());
  }


	}else{
	 
  

        foreach ($validate->errors() as $error) {
        	
              $strpos =strpos( $error,',');
             $varable= substr($error,0, $strpos);
            switch ($varable) {
            	    case 'FirstName':
            		$FirstNameErr=$error;
            		break;
            		case 'LastName':
            		$LastNameErr=$error;
            		break;
            		case 'Email':
            		$EmailErr=$error;
            		break;
            		case 'NumberPhone':
            		$NumberPhoneErr=$error;
            		break;
            		case 'Password':
            		$PasswordErr=$error;
            		break;
            		case 'RePassword':
            		$RePasswordErr=$error;
            		break;
            		case 'date':
            		$dateErr=$error;
            		break;
            		case 'Gender':
            		$GenderErr=$error;
            		break;
            	
            	default:
            		# code...
            		break;
            }
                 
        	
        }
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
  <link rel="icon" href="../images/logo.png">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-min.css">
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 
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
    .close:active {
    	display:none;
    }

	</style>
	
</head>
<body style="background-color: #ebebe0">
	<div class="container-fluid">
	<?php include 'Header.php';  ?>
	
  </div>
    <div class="container" style="<?php if(isset($_GET['register'])){ echo "display:none;"; }  ?>background-color:rgba(0,0,0,.9);height:200px;margin-top:100px;width:600px;border-radius:10px;">
    <a href="?register=organization" class="btn organization-btn">Organization</a>
    <a href="?register=member" class="btn member-btn">Member</a>
    </div>

    <div class="container form-form" style="<?php if(!isset($_GET['register'])){ echo "display:none;";
     foreach ($validate->errors() as $value) {
	    if (!empty($value)) {
	    	echo "opacity:0.8";
	    }
     	
     }
    
     }  ?>;background-color:rgba(0,0,0,.9);margin-top: 60px;width:50%;border-radius:20px;">
<?php 
if (isset($_GET['register'])) {

 if ($_GET['register']=="organization") {

  ?>
    <form method="POST" class="form-horizontal" action=<?php echo htmlspecialchars('Register.php?register=organization'); ?> style="margin-top:30px;">
  <h1 align="center" style="margin-bottom: 50px;font-family:swift;font-weight:bold;color:#f9f9f9">Oganization Register</h1>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10">
      <input type="text" name="OrganizationName" style="width:80%; float:left;" class="form-control" id="fname" placeholder="Name" >
    </div> 
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" style="width:80%;" name="OrganizationEmail" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="number">Phone:</label>
    <div class="col-sm-10">
      <input type="number" name="OrganizationNumberPhone" style="width:80%;" class="form-control" id="number" placeholder="Enter Phone Number">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="address">Address:</label>
    <div class="col-sm-10">
      <input type="text" name="OrganizationAddress" style="width:80%;" class="form-control" id="address" placeholder="Enter address ">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2"  for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" name="OrganizationPassword" style="width:80%;" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group" style="padding-left:53px;">
    <label class="control-label col-sm-2" style="width:200px;margin-left:-100px;"  for="Re_Password">Re-Password:</label>
    <div class="col-sm-10"> 
      <input type="password" name="OrganizationRe_Password" style="width:80%;" class="form-control" id="repwd" placeholder="Enter password">
    </div>
  </div>

  <div class="form-group" style="margin-top:-100px;"> 
     <div class="col-sm-offset-2 col-sm-10">
     <input type="hidden" name="token" value=<?php echo Token::genarate(); ?>>
      <input type="submit" onmouseover="this.style.backgroundColor='#5cb85c';this.style.color='black'" onmouseout="this.style.backgroundColor='transparent';this.style.color='#5cb85c'" name="registerO" style="width:200px;margin-left: 15%;color:#5cb85c;background-color:transparent;border:2px solid #5cb85c;" 
      class="btn submit-btn" value="Register" />
  </div>
</form>	
<?php }elseif($_GET['register']='Member'){
	
  

	?>
	 <form method="POST" class="form-horizontal" action=<?php echo htmlspecialchars('Register.php?register=member'); ?> style="margin-top:60px;">
  <h1 align="center" style="margin-bottom: 50px;font-family:swift;font-weight:bold;color:#f9f9f9">Member Register </h1>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10">
      <input type="text" style="width:38%; float:left;<?php if($FirstNameErr!=='')echo "border:1.5px solid red;";?>" name="FirstName" class="form-control" id="fname" placeholder="First Name" >
        
      <input type="text" name="LastName" style="<?php if($FirstNameErr!=='')echo "border:1.5px solid red;";?>width:38%;float:left;margin-left:20px;" class="form-control" id="lname" placeholder="LastName"> 
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="text" name="Email" style="<?php if($FirstNameErr!=='')echo "border:1.5px solid red;";?>width:80%;" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="number">Phone:</label>
    <div class="col-sm-10">
      <input type="number" name="NumberPhone" style="<?php if($FirstNameErr!=='')echo "border:1.5px solid red;";?>width:80%;" class="form-control" id="number" placeholder="Enter Phone Number"> 
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="address">Address:</label>
    <div class="col-sm-10">
      <input type="text" name="address" required style="<?php if($FirstNameErr!=='')echo "border:1.5px solid red;";?>width:80%;" class="form-control" id="address" placeholder="Enter address "> 
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2"  for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" name="Password" style="<?php if($FirstNameErr!=='')echo "border:1.5px solid red;";?>width:80%;" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group" style="padding-left:53px;">
    <label class="control-label col-sm-2" style="width:30%;margin-left:-95px;"  for="pwd">Re-Password:</label>
    <div class="col-sm-10"> 
      <input type="password" name="Re-Password" style="<?php if($FirstNameErr!=='')echo "border:1.5px solid red;";?>width:80%;" class="form-control" id="repwd" placeholder="Enter password">
      
    </div>
  </div>
<div class="form-group">
    <label class="control-label col-sm-2"  for="date">Birthday</label>
    <div class="col-sm-10"> 
      <input type="Date" name="date" style="<?php if($FirstNameErr!=='')echo "border:1.5px solid red;";?>width:40%"  id="date"  > 
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2"  for="pwd">Gender:</label>
    <div class="col-sm-10" style="padding-top:6px;"> 
      <input type="radio" style="width:10%;"  id="gender" checked value="1" name="Gender"><label>Male</label>
      <input type="radio" style="width:10%;"  id="gender" value="0" name="Gender"><label>Female</label> 
      
    </div>
  </div>
  <div class="form-group" style="margin-top:-100px;"> 
    <div class="col-sm-offset-2 col-sm-10">
      <input type="hidden" name="token" value=<?php echo Token::genarate(); ?>>
      <input type="submit"  onmouseover="this.style.backgroundColor='#5cb85c';this.style.color='black'" onmouseout="this.style.backgroundColor='transparent';this.style.color='#5cb85c'" name="registerM" style="width:200px;margin-left: 15%;color:#5cb85c;background-color:transparent;border:0.5px solid #5cb85c;" 
      class="btn submit-btn" value="Register" />
  </div>
</form>

<?php	
}}
	?>
	
	
 </div>

</div>
<?php
   
   if (isset($_POST['registerM']) ||isset($_POST['registerO'])) {
        if (!empty($validate->errors())) {
   	?>
   <div id="closeVali"  class="alert alert-danger alert-dismissible closeVali" style="padding:30px;opacity:0.9; position:absolute;top:30%;left:37%;width:400px;">
    <p align="right"  class="closeVali" style="cursor:pointer;" onclick="close()" >&times;</p>
     <?php
          	foreach ($validate->errors() as $error) {
           	echo "<p >$error</p><br>";
           } ?>
  </div>
   <script type="text/javascript">
	 	function close(){
	 		document.getElementsById("closeVali").style.display='none';
	 	}
	 </script>
    <?php } }?>
<?php include 'Footer.php';  ?>
</body>
</html>



