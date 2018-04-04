<?php  require_once '../init.php'; 
$user=new User();
   if (!$user->isLoggedIn()) {
  Redirect::to('../include/Login.php');
}
 if (isset($_POST['image'])) {
  if (Token::check(Input::get('token1'))) {
  
  $validate=new ValidationMember();
  if ($_FILES['UploadA']['name']) {
    $validate->checkImage($_FILES,array('UploadA'=>array('max' =>1000000,'type'=>array('jpeg','jpg' ))));
  if ($validate->passed()) {
    // $file=addslashes(file_get_contents($_FILES['UploadA']['tmp_name']));
     $user->updateImage('customer',array('img' =>$user->ImagesPrepare($_FILES['UploadA'],"Profile/")));
     header('Location:'.$_SERVER['PHP_SELF']);
  }else{
    foreach ($validate->errors() as $error) {
     echo "$error";
    }
  }
  
    
  }
}
 }

 if (isset($_POST['update'])) {
  if (Token::check(Input::get('Token'))) {
   $validate =new ValidationMember();
   if ($_SESSION['type']==='customer') {
     $validate->check($_POST,array(
    'firstname' => array('require' =>'true' ,'min'=>2 ),
    'lastname' => array('require' =>'true' ,'min'=>2 ), 
    'email' => array('require' =>'true' ,'type'=> 'email'),
  )); 

   }elseif($_SESSION['type']==='organization')
   {
    $validate->check($_POST,array(
    'name' => array('require' =>'true' ,'min'=>2 ), 
    'email' => array('require' =>'true' ,'type'=> 'email'),
  )); 
   }
  
   
  if ($validate->passed()) {
     if ($_SESSION['type']==='customer') {
        $user->updateInfo('customer',array('firstname' => Input::get('firstname'),'lastname'=>Input::get('lastname'),'email'=>Input::get('email'),'phone'=>Input::get('phone'),'address'=>Input::get('address'),'gender'=>Input::get('gender')),Input::get('pwd'));
    Session::flash('home','Your Information updated');
     header('Location:Profile.php?part=setting');
     }elseif($_SESSION['type']==='organization')
     {
      $user->updateInfo('organization',array('name'=>Input::get('name'),'email'=>Input::get('email'),'phone'=>Input::get('phone'),'address'=>Input::get('address'),'about'=>Input::get('about')),Input::get('pwd'));
       Session::flash('info','Your Information updated');
       header('Location:Profile.php?part=setting');
     }
    

   }else{
    echo "<div class='alert alert-danger alert-dismissible fade in' style='margin-top:70px;'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
  
    foreach ($validate->errors() as $error) {
     echo "$error<br>";
    }
    echo "</div>";
   }

  }
 }


if (isset($_POST['changepass']) && isset($_GET['part'])) {
  if (Token::check(Input::get('token2'))) {
 
 
  $validate=new ValidationMember();
  $validation=$validate->check($_POST,array(
    'OldPassword' =>array('min' => 6,'max'=>10 ),
    'NewPassword'=>array('min' => 6,'max'=>10 ),
    'Re-NewPassword'=>array('matches' => 'NewPassword')
     ));
  if ($validate->passed()) {
    try
    {
    $user=new User();
    $user->updateInfo('customer',array('password'=>Hash::make(Input::get('NewPassword'),$user->data()->salt)),Input::get('OldPassword'));
    Session::flash('home','Your password changed');
    }
    catch(Exception $e){
      die($e->getMessage());
    }
    
  }else{
    foreach ($validate ->errors() as $error) {?>
    <div class="alert alert-danger alert-dismissible" style="margin-top:70px;" >
             <button type="button" class="close" data-dismiss="alert">&times;</button>
             <?php echo $error."<br>"; ?>
            </div>
      ;
    <?php }
  }
 }
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
  <link rel="icon" href="../images/logo.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script >
    $(document).ready(function(){
      $("#photo").load("../classes/User.php");
    });
  </script>
</head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap-min.css">
<style type="text/css">
 .list-group a{
padding-bottom:20px;
 }
 .pro-pic-bg{
 	background-color:#f6f6f6;width:160px;height:160px;margin-left:25.2%;margin-top:-245px;border-radius:100px; position:absolute;opacity:0;
 }
 .pro-pic-bg:hover {
  opacity:0.8;
  cursor:pointer;
 }
 
</style>
<body>
	<div class="container-fluid">
	<?php include 'Header.php'; ?>

<div class="row" >
 <div class="col-lg-4"  style="width:350px;height:550px;margin-left:20px;margin-top:30px;overflow:hidden; background-color:#f6f6f6;position:relative;">

  <?php
   if($user->data()->img){ echo '<img  src="../images/Profile/'.$user->data()->img.'" style="width:158px;height:160px;margin-left:28%;margin-top:10%" class="img-circle">';}else{echo "<img src=../images/Profile.png style='width:158px;height:160px;margin-left:28%;margin-top:10%;' class='img-circle' >";} ?> 
    <form action="" method="POST" enctype= multipart/form-data>
     <div style="height:20px;margin-left:40%;margin-top:10px;">
      <input type="hidden" name="token1" value=<?php echo Token::genarate(); ?> >
      <input type="submit" name="image" value="Change"  class="btn btn-info">
     </div> 
    <h3 align="center" style="text-transform:capitalize;"><?php if($_SESSION['type']==='customer'){echo $user->data()->firstname;}elseif($_SESSION['type']==='organization'){echo $user->data()->name;}  ?></h3>
    <div class="pro-pic-bg">
      <input type="butoon" name="UploadB" value="Upload" class="btn-warning" style="margin-top:50%;margin-left:28%;border-radius:20px;height:35px;width:80px;opacity:1;padding-left:13px">
      <input type="file" name="UploadA" accept="image/*"  style="margin-top:50%;margin-left:28%; width:80px;position:absolute;margin-top:-30px;opacity:0;cursor:pointer;">
  </div>
  
  </form>
  <div class="list-group" style="margin-top:10px;width:350px;margin-left:-15px;position:absolute;">
  <a href="?part=setting" class="list-group-item list-group-item-action text-center">Setting</a>
  <a href="?part=password" class="list-group-item list-group-item-action text-center">Change Password</a>
  <?php if ($_SESSION['type']==='organization') {
  ?><a href="AddEvent.php" class="list-group-item list-group-item-action text-center">Add Event</a>
  <a href="MyEvents.php" class="list-group-item list-group-item-action text-center">My Event</a><?php } ?>
 <?php if ($_SESSION['type']==='customer') { ?> <a href="MyTickets.php" class="list-group-item list-group-item-action text-center">My Tickts</a><?php } ?>
  
</div>

</div>
<div class="col-sm-7" style="margin-top:70px; width:60%;">
 <?php if (Session::exists('home')) {?>
            <div class="alert alert-success alert-dismissible" style="margin-top:20px;" >
             <button type="button" class="close" data-dismiss="alert">&times;</button>
             <strong>Success!</strong>  <?php echo Session::flash('home'); ?>
            </div>
  
<?php } ?>
<?php
  if (isset($_GET['part'])) {
  	if ($_GET['part']=="setting") {
  	?>
       <?php if (Session::exists('info')) {?>
            <div class="alert alert-success alert-dismissible" style="margin-top:20px;" >
             <button type="button" class="close" data-dismiss="alert">&times;</button>
             <strong>Success!</strong>  <?php echo Session::flash('home'); ?>
            </div>
  
      <?php } ?>
     <form action="" class="form-horizontal" method="POST" style="margin-left:10%;" action="" >
      <?php if($_SESSION['type']==='customer'){ ?>
     	<div class="form-group">
     		<label class="control-label col-sm-2">FirstName</label>
     		<div class="col-sm-10" >
     			<input type="text" name="firstname" class="form-control" style="width:40%;float:left;margin-right:3%;" value=<?php echo escape($user->data()->firstname); ?>  required >
          <label class="control-label col-sm-2">LastName</label>
          <input type="text" name="lastname"  required class="form-control" style="width:40%;float:left;" value=<?php echo escape($user->data()->lastname); ?>>
     		</div>
     		</div>
        <?php }elseif($_SESSION['type']==='organization'){ ?>
       <div class="form-group">
        <label class="control-label col-sm-2">Name:</label>
        <div class="col-sm-10">
          <input type="text" name="name" class="form-control" width="400px;" required value=<?php echo escape($user->data()->name); ?>>
        </div>
        
        </div>
        <?php }?>
     	
     	<div class="form-group">
     		<label class="control-label col-sm-2">Email</label>
     		<div class="col-sm-10">
     			<input type="email" name="email"  required class="form-control" width="400px;" value=<?php echo escape($user->data()->email); ?>>
     		</div>
     		
     	</div>
     	<div class="form-group">
     		<label class="control-label col-sm-2">Phone</label>
     		<div class="col-sm-10">
     			<input type="number" name="phone" class="form-control" width="400px;"  required value=<?php echo escape($user->data()->phone); ?>>
     		</div>
     		
     	</div>
     	<div class="form-group">
     		<label class="control-label col-sm-2">Address</label>
     		<div class="col-sm-10">
     			<input type="text" name="address" class="form-control" width="400px;"  required value=<?php echo escape($user->data()->address); ?> require>
     		</div>
     		
     	</div>
      <?php if ($_SESSION['type']==='customer') {
       
        ?>
      <div class="form-group">
        <label class="control-label col-sm-2">Gender</label>
        <div class="col-sm-10">

          <label class="radio-inline">
      <input type="radio" name="gender" value="1" <?php if($user->data()->gender){?> checked <?php } ?> require >Male
       </label>
      <label class="radio-inline">
      <input type="radio" name="gender" value="0" <?php   if(!$user->data()->gender){ echo "checked";} ?> require >Female
      </label>
        </div>
      </div>
      <?php }
      if($_SESSION['type']==='organization'){
      ?>
      <hr style="height:1px;background-color:black;">
<div class="form-group" style="margin-left:5%;">
      <label >About</label>
      <textarea class="form-control" style="resize:none;" cols="20" rows="5" name="about"><?php echo $user->data()->about ?></textarea>
    </div>

   <?php } ?>
      <hr style="height:2px;background-color:black">
     	<div class="form-group">
     		<label class="control-label col-sm-2">password</label>
     		<div class="col-sm-10">
     			<input type="password" name="pwd" class="form-control" width="400px;" style="text-align:center;" placeholder="Enter Your Password to update" require>
     		</div>
     		
     	</div>
      <input type="hidden" name="Token" value=<?php echo Token::genarate(); ?>>
     	<input type="submit" name="update" value="Update" class="btn btn-success " style="margin-left:50%;"/>
     </form>

  	<?php
  	}
  	if($_GET['part']=="password"){
  		?>
   <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']."?part=password"); ?> style="margin-left:10%;" method="POST">
   	<div class="form-group">
   		<label >Old Password</label>
   		<input type="password" name="OldPassword" class="form-control" width="400px;" required>
   	</div>
   	<div class="form-group">
   		<label ">New Password</label>
   		<input type="password" name="NewPassword" class="form-control" width="400px;" required>
   	</div>
   	<div class="form-group">
   		<label >Re-New Password</label>
   		<input type="password" name="Re-NewPassword" class="form-control" width="400px;" required>
   	</div>
    <input type="hidden" name="token2" value=<?php echo Token::genarate(); ?>>
   	<input type="submit" name="changepass" value="Change" class="btn btn-warning" style="margin-left:40%;">
   </form>

  	<?php
  	}
  }

  ?>
  </div>
  
</div>
<?php include 'Footer.php';  ?>	
	</div>
	

</body>
</html>