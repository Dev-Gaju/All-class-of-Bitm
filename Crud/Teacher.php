<?php


class Teacher {
    protected $link;
    public function __construct() {
        $this->link=mysqli_connect('localhost', 'root','','practice');
    }
    protected function GetConnection($query, $status=NULL){
        if (mysqli_query($this->link, $query)){
            if($status){
                $result=mysqli_query($this->link, $query);
                return $result;
            }else {
                $message="Save On the Database";
            return $message;   
 }   
        }
 else {
            die("Query Problem". mysqli_error($this->link));
 }
    }
    
    public function SaveOntheTable($data){
       $query= "INSERT INTO teachers_info (tname, email,pnumber,htown)VALUES('$data[tname]','$data[email]','$data[pnumber]','$data[htown]')";
        $message=$this->GetConnection($query);
        return $message;
        }
        public function ShowOntheTable(){
            $query="SELECT * FROM teachers_info";
            $status='sobita';
            $result=  $this->GetConnection($query, $status);
            return $result;
        }
        
        public function SelectInfoByTeachersID($teachersID){
            $query="SELECT * FROM teachers_info WHERE id=".$teachersID."";
            $result=  $this->GetConnection($query,true);
            return $result;
        }
        
        public function UpdateTeachersInfo($data, $teachersID){
            $query= "UPDATE teachers_info SET tname='$data[tname]',email='$data[email]',pnumber='$data[pnumber]',htown='$data[htown]' WHERE id='$teachersID' ";
       
            if ($this->GetConnection($query,true)){
                header('Location: view-teacher.php');
            }  else {
                die('Query Problem'.mysqli_error($this->link));
            }
          
            }
       public function DeleteIDbyButton($id){
            $link=mysqli_connect('localhost', 'root','','practice');
            $query="DELETE FROM teachers_info  WHERE id='$id' ";
            if(mysqli_query($link, $query)){
                 header('Location: view-teacher.php');
            }
            else {
                die('Query Problem'.mysqli_error($link));
            }
       }
    
}




