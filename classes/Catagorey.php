<?php
/**
* 
*/
class Catagorey
{
	private $_db,
	        $_result,
	        $_data;
	
	function __construct($type=null)
	{
	    $this->_db=DB::getInstance();

	    $this->find($type);
	}

   public function find($type=null)
   {
     if ($type) {
     	if ($this->_db->get('catagorey',array('name','=',$type))) {
     		if ($this->_db->count()) {
     		  $this->_data=$this->_db->first();	
     		}
           
     		
     	}
     }else{
     	if (!$this->_db->query("select * from catagorey")) {
     		throw new Exception("you have an error in select all catagorey");
     	}else{
     		if ($this->_db->count()) {
     			$this->_result=$this->_db->result();
     		}
     	}
     }

   }

   public function result()
   {
   	return $this->_result;
   }

  public function data()
  {
  	return $this->_data;
  }  


}



?>