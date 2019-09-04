<?php

class Cricketer {
    protected $link;
    
    public function __construct() {
       $this->link= mysqli_connect('localhost', 'root', '', 'practice');
    }
    protected function GetConnection($query,$status=NULL){
        if (mysqli_query($this->link, $query)){
            if ($status){
                $result=mysqli_query($this->link, $query);
                return $result;
            }  else {
                 $message="Save on the Database";
            return $message;
            }
           
        }  else {
            die("query Problem".  mysqli_error($this->link));
        }
        
    }
    public function GetOntheTAble($data){
       $query="INSERT INTO cricketers (cname,cage,cnumber,cemail,ctown)VALUES('$data[cname]','$data[cage]','$data[cnumber]','$data[cemail]','$data[ctown]')";
       $message=  $this->GetConnection($query);
       return $message;
    }
    
    public function ShowOntheTAble(){
        $query="SELECT * FROM cricketers";
        $status='sabita';
        $result=  $this->GetConnection($query,$status);
        return $result;
        
    }
    
    public function SetontheTableById($cricketersId){
         $query="SELECT * FROM cricketers WHERE id=".$cricketersId."";
        $result=$this->GetConnection($query,true);
         return $result;
    }
    
    public function Updateonthetable($data,$cricketersId){
       $query="UPDATE cricketers SET cname='$data[cname]', cage='$data[cage]',cnumber='$data[cnumber]',cemail='$data[cemail]',ctown='$data[ctown]' WHERE id= ".$cricketersId;
        if ($this->GetConnection($query,true)){
           header('Location: view.php');
        }  else {
              die("query Problem".  mysqli_error($this->link));
        }
        
    }
}
