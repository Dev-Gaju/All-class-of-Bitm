<?php

namespace App\classes;


class Login
{
    public function adminLogin($data){
        $email=$data['email'];
        $password=md5($data['password']);
        $link=Database::db_connection();
        $sql=" SELECT * FROM user WHERE email='$email' AND password='$password' ";

        if (mysqli_query($link, $sql)){

            $queryResult=mysqli_query($link, $sql);
            $userinfo=mysqli_fetch_assoc($queryResult);
            if($userinfo){
                session_start();
                $_SESSION['id']=$userinfo['id'];
                $_SESSION['name']=$userinfo['name'];
                header('Location:dashboard.php');

            }else{
                $message="Please enter the valid username and password";
                return $message;
            }

        }else
        {
            die('query Problem'.mysqli_error($link));
        }
    }

    public function logOut($data){
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('Location:index.php');
        session_start();
        $message="You are Successfully logedOut";
        return $message;
    }

}