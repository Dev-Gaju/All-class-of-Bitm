<?php


class Teacher {
    protected $link;
    public function __construct() {
        $this->link=  mysqli_connect('localhost', 'root', '', 'practice');
    }
    
    public function GetExecution($sql,$status=NULL){
        if(mysqli_query( $this->link, $sql)){
            if ($status){
                $result=  mysqli_query($this->link, $sql);
                return $result;
            }  else {
                $message= 'Save data on Database';
                return $message;
            }
           
        }  else {
            die('QueryProblem'.mysqli_connect_error($this->link));
        }
    }
    
    public function setTeachersInfo($data){
        $sql="INSERT INTO teachers(teacher_name,teacher_email,teacher_phone,teacher_age)VALUES('$data[teacher_name]','$data[teacher_email]','$data[teacher_phone]','$data[teacher_age]') ";
        $message=  $this->GetExecution($sql);
        return $message;
    }
    public function showTeacherInfo(){
        $sql="SELECT * FROM teachers";
        $status='select';
        $result=$this->GetExecution($sql,$status);
        return $result;
        
    }
    
}
