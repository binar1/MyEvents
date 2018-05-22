<?php
/**
* binar
*/
class User 
{
	private $_db,
	        $_data,
	        $_SessionName,
	        $_SessionOrganization,
	        $_CookieName,
	        $_isLoggedIn;
	function __construct($user=null,$table=null)
	{
		
	 $this->_db=DB::getInstance();
	 $this->_SessionName=Config::get('session/session_name');
	 $this->_SessionOrganization=Config::get('session/session_organization');
     $this->_CookieName=Config::get('remember/cookie_name');
	 if (!$user) {
	 	if (Session::exists($this->_SessionName)) {
	 		$user=Session::get($this->_SessionName);
	 		if ($this->find('customer',$user)) {
	 			$this->_isLoggedIn=true;
	 		}else
	 		{
	 			//logout
	 		}
	 	}elseif (Session::exists($this->_SessionOrganization)) {
	 		$user=Session::get($this->_SessionOrganization);
           if ($this->find('organization',$user)) {
	 			$this->_isLoggedIn=true;
	 		}else
	 		{
	 			//logout
	 		}
	 	}
	 }else
	 	{
	 	   	
	 	 $this->find($table,$user);
	 		
	 		
	 	}
	}

	public function create ($table,$fields=array()){
    if (!$this->_db->insert($table,$fields)) {
       throw new Exception	('there was a problem creating an account');
    }
}

public function find($table=null,$email=null){
	if ($email) {
	$field=false;	
	if ($table==='customer') {
	$field=(is_numeric($email)) ? 'customer_id':'email';	
	}
	if ($table==='organization') {
		$field=(is_numeric($email)) ? 'organization_id':'email';
	}
	$data=$this->_db->get($table,array($field,'=',$email));
    if ($this->_db->count()) {
		$this->_data=$this->_db->first();
		return true;
	}
	}
	return false;
}

public function login($table,$email=null,$password=null,$remember =false){
	
   if (!$email && !$password && $this->exists()) {
   	  
   }else{
   	$user=$this->find($table,$email);
   if ($user){
	if ($this->data()->password === Hash::make($password,$this->data()->salt)) {
		if($table==='customer'){
			Session::put($this->_SessionName,$this->data()->customer_id);
			Session::put('type','customer');
		}elseif($table==='organization'){
			Session::put($this->_SessionOrganization,$this->data()->organization_id	
		);
			Session::put('type','organization');
		} 
			
		}
		if ($remember) {
			$user_id=false;
			if ($table==='customer') {
				$user_id=$this->data()->customer_id;
			}else{ $user_id=$this->data()->organization_id;}
			$hash=Hash::unique();
			$hashCheck=$this->_db->get('user_session',array('user_id','=',$user_id));
			if (!$this->_db->count()) {
				$this->_db->insert('user_session',array(
					'user_id' => $this->data()->$user_id,
					 'hash'=>$hash
				 ));
			}else{
				$hash=$this->_db->first()->hash;
			}
			Cookie::put($this->_CookieName,$hash,Config::get('remember/cookie_expiry'));
		}
		 return true;
	}
}

	return false;
}
public function data(){
	return $this->_data;
}

public function isLoggedIn(){
	return $this->_isLoggedIn;
}
public function logout()
{
   $this->_db->delete('user_session',array('user_id','=',$this->data()->customer_id));
   Session::delete($this->_SessionName);
   Session::delete($_SESSION['type']);
   Session::delete($this->_SessionOrganization);
   Cookie::delete($this->_CookieName);
}
public function updateInfo($table,$fields=array(),$oldPassword,$id=null)
{
  if (!$id && $this->_isLoggedIn) {
  	$id=($_SESSION['type']==='customer') ? $this->data()->customer_id : $this->data()->organization_id;
  }
if ($this->data()->password===Hash::make($oldPassword,$this->data()->salt)) {
	if ($_SESSION['type']==='customer') {
	if (!$this->_db->update($table,'customer_id',$id,$fields))
	{
  	throw new Exception('there was aproblem updating!!');
  	
  }	
	}elseif($_SESSION['type']==='organization')
	{
    if (!$this->_db->update($table,'organization_id',$id,$fields))
	{
  	throw new Exception('there was aproblem updating!!');
  	
     }	
	}
	
}
  
}

 public function updateImage($table,$fields=array(),$id=null)
 {
 	if (!$id && $this->_isLoggedIn) {

 		$id=($_SESSION['type']==='customer') ? $this->data()->customer_id : $this->data()->organization_id;
 	}
 	if ($this->data()->img) {
 		unlink("../images/Profile/".$this->data()->img);
 	}
 	 if ($_SESSION['type']==='customer') {
 	 if (!$this->_db->update($table,'customer_id',$id,$fields)){
 		throw new Exception('there was aproblem updating!!');
 	}	
 	 }elseif($_SESSION['type']==='organization')
 	 {
 	 	
    if (!$this->_db->update($table,'organization_id',$id,$fields)){
 		throw new Exception('there was aproblem updating!!');
 	}
 	 }
 	
 } 	

 public function imageCertificate($table,$fields=array(),$id=null)
 {
 if (!$id && $this->_isLoggedIn) {

 		$id= $this->data()->organization_id;
 	}	
    if ($this->data()->certificate ){
 		unlink("../images/Certificate/".$this->data()->certificate);
 	}
 	if (!$this->_db->update($table,'organization_id',$id,$fields)){
 		throw new Exception('there was aproblem updating!!');
 	}

 }

 public function ImagesPrepare($file,$location){
   $filename=$file['name'];
    $fileExt=explode('.',$filename);
    $fileActuaExt=strtolower(end($fileExt));
    $newFileName=uniqid('',true).'.'.$fileActuaExt;
    move_uploaded_file($file['tmp_name'],"../images/".$location.$newFileName);
    return $newFileName;
 }


public function exists()
{
	return (!empty($this->_data)) ? true:false;
}
}
?>