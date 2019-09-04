<?php

namespace App\classes;

class Login
{



    public function LoginByUserInfo($data)
    {
        $email = $data['email'];
        $password = md5($data['password']);
        $link = Database::db_connetion();
        $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
        if (mysqli_query($link, $sql)){

        $queyResult = mysqli_query($link, $sql);
        $userInfo = mysqli_fetch_assoc($queyResult);
        if ($userInfo) {
            session_start();
            $_SESSION['id'] = $userInfo['id'];
            $_SESSION['name'] = $userInfo['name'];
            header('Location:Dashboard.php');

        } else {
            $message = "Please Enter The Correct Email and Password";
            return $message;
        }
    }
        else
        {
            die('Query Problem'.mysqli_error($link));
        }
    }

    public function Logout(){
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('Location:index.php');
        session_start();
        $message="Logout Successfuly";
        return $message;

    }


}