<?php

class student
{
    protected $link;
    
    public function __construct()
    {
        $this->link= mysqli_connect('localhost','root','','practice');
    }
      public function MysqlGetExecution($sql, $status=NULL){
           if (mysqli_query($this->link, $sql)) {
               if ($status) {
                $result=mysqli_query($this->link,$sql);
                  return $result; 
               }
               else {
                $message="save info on the database";
                return $message;
               }
           }
               else {
                  die('QueryProblem'.mysqli_connect_error($this->link));
               }
      }

      public function SetStudentInfo($data){
        $sql="INSERT INTO students (student_name,phone_number,email,age)VALUES('$data[student_name]', '$data[phone_number]', '$data[email]', '$data[age]')";
        $message=$this->MysqlGetExecution($sql);
        return $message;
      }


      public function GetDataonTable(){
        $sql="SELECT * FROM students";
        $status='select';
        $result=$this->MysqlGetExecution($sql,$status);
        return $result;

      }

}


?>


