<?php

class Login {
    protected $link;
    
    
    public function __construct() {
        $this->link=  mysqli_connect('localhost', 'root', '', 'practice');
    }
    
    public function LoginOnThepage($data){
        $email=$data['email'];
        $password= md5($data['password']);
        $sql="SELECT * FROM admin WHERE email='$email' AND password='$password'";
        if (mysqli_query($this->link, $sql)){
            $queryResult=  mysqli_query($this->link, $sql);
            $Adminid=  mysqli_fetch_assoc($queryResult);
            if ($Adminid){
                
                session_start();
                $_SESSION['id']=$Adminid['id'];
                $_SESSION['name']=$Adminid['name'];
                
                header('Location: dashboard.php');
                
            }  else {
                $message="Please enter valid email and password ";
                return $message;
            }
   }  else {
        
            die('Query Problem'.mysqli_error($this->link));
        }

    }
    
}
