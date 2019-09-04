<?php

class Login {

    protected $link;

    public function __construct() {
        $this->link = mysqli_connect('localhost', 'root', '', 'practice');
    }

    public function AdminLoginCheck($data) {
        $email = $data['email'];
        $password = md5($data['password']);


        $sql = "SELECT * FROM user WHERE email='$email' AND password ='$password' ";
        if (mysqli_query($this->link, $sql)) {
            $QueryResult = mysqli_query($this->link, $sql);
            $userinfo = mysqli_fetch_assoc($QueryResult);
            if ($userinfo) {
                session_start();
                $_SESSION['id']=$userinfo['id'];
                $_SESSION["name"]=$userinfo['name'];
                
                header('Location: dashboard.php');
            }  else {
                $message="Please use correct email or password";
                return $message;
            }
        } else {
            die('Query Problem' . mysqli_error($this->link));
        }
    }
    
    public function Logout($data){
        unset(  $_SESSION['id']);
        unset(  $_SESSION['name']);
        header('Location: index.php');
        $result ="Successfully Logout";
         return $result;
        
    }

}
