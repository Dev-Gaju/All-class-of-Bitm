<?php

class Student
{
  protected $link;
  function __construct()
  {
   $this->link=mysqli_connect('localhost','root','','practice');
}

public function Getexecution($sql,$status=NULL){
  if (mysqli_query($this->link,$sql)) {
    if ($status) {
      $result=mysqli_query( $this->link, $sql);
      return $result;
    }
    else{
      $message="Save Data On the Database";
      return $message;
    }
  }
    else{
      die('query Problem'.mysqli_error($this->link));
    }
  }


public function SaveDataonTheTable($data){
  $sql="INSERT INTO student (fname,lname,cnum)VALUES('$data[fname]','$data[lname]','$data[cnum]')";
  $message=$this->Getexecution($sql);
  return $message;

}

public function ShowonTheTAble(){

  $sql="SELECT * FROM student";
  $status='james';
  $result=$this->Getexecution($sql,$status);
  return $result;
}

  public function GetOntheTAble($studentsid){

    $sql="SELECT * FROM student WHERE id='$studentsid'";
    $result=$this->Getexecution($sql,true);
       return $result;
  }

    public function UpdateONtheTAble($data, $studentsid){
      $sql="UPDATE student SET fname='$data[fname]', lname= '$data[lname]', cnum='$data[cnum]' WHERE id='$studentsid'";
       $this->GetExecution($sql);
        header('Location:view.php');
       }

       public function DeleteFromDatabase($id){
         
         $sql="DELETE FROM student WHERE id='$id'";
         $this->Getexecution($sql);
         header('Location:view.php');
       }


    }

?>