<?php  
class DB{
    private static $_instance=null;
    private $_pdo,
            $_query,
            $_error=false,
            $_result,
            $_count=0;
private function __construct(){
	try{
    echo Config::get('mysql/host');
      $this->_pdo=new PDO('mysql:host='.Config::get('mysql/host').';dbname='.Config::get('mysql/db'),
      	Config::get('mysql/username'),Config::get('mysql/password'));
	}
	catch(PDOExpetion $e){
      die($e->getMessage());
	}
}

public static function getInstance(){
	if (!isset(self::$_instance)) {
	  self::$_instance=new db();	
	}
	return self::$_instance;
}

public function query($sql,$params=array())
{
  $this->_error=false;
  if ($this->_query=$this->_pdo->prepare($sql)) {
   $x=1;
   if (count($params)) {
     foreach ($params as $param) {
      $this->_query->bindValue($x,$param);
       $x++;
     }
   }
   if ($this->_query->execute()) {
    $this->_result=$this->_query->fetchAll(PDO::FETCH_OBJ);
    $this->_count=$this->_query->rowCount();

  }else{
    $this->_error=true;
  }
   return $this;
}
}
  public function action($action,$table,$where=array())
{
  if (count($where)==3) {
    $operators=array('=','>','<','>=','<=' );
    $field=$where[0];
    $operator=$where[1];
    $value=$where[2];
    if (in_array($operator,$operators)) {
      $sql="{action} from {table} where {field} {operator} ?";
      if ($this->query($sql,array($value))->error()) {
        return $this;
      }
    }
  }
  return false;
}

public function get($table,$where){
 return $this->action('select *',$table,$where);
}
public function delete($table,$where){
 return $this->action('delete',$table,$where);
}
public function result(){
  return $this->_result;
}
public function insert($table, $fildes=array()){
     $keys=array_keys($fildes);
     $value='';
     $x=1;
     foreach ($fildes as $field) {
       $value .='?';

       if ($x<count($fildes)) {
         $value .=', ';
         $x++;
       }
     }
     $sql="INSERT INTO ".$table." (`".implode('`,`',$keys)."`) VALUES ({$value})";
         if (!$this->query($sql,$fildes)->error()) {
            return true;
           }  
     return false;
} 

public function update($table,$id,$fildes){
$set='';
$x=1;
 foreach ($fildes as $name => $value) {
   $set .= "{$name} =?";
   if ($x<count($fildes)) {
     $set .=', ';
     $x++;
   }
 }
  $sql ="UPDATE {$table} SET {$set} WHERE id={$id}";
  if ($this->query($sql,$fildes)->error()) {
    return true;
  }
  return false;
}
 public function error(){
  return $this->_error;
 }
 public function first()
 {
  return $this->result()[0]; 
   }
 public function count(){
  return $this->_count;
 }  

}
?>