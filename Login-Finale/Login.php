<?php  

class Login
{
	private $link;
	function __construct()
	{
	$this->link=mysqli_connect('localhost','root','','practice');
	}
    public function GetLoginExecution($data){
    	$email=$data['email'];
    	$password=md5($data['password']);

    	$sql="SELECT * FROM user WHERE email='$email'AND password='$password'";
           if(mysqli_query($this->link,$sql)){
             $result=mysqli_query($this->link,$sql);
             $userinfo=mysqli_fetch_assoc($result);
             if($userinfo){
             session_start();
             $_SESSION['id']=$userinfo['id'];
             $_SESSION['name']=$userinfo['name'];


             	header('Location:dashboard.php');

             }
             else {
             	$message="please enter the correct gmail and password";
             	return $message;
             }
         }
             else{
             	die('query problem'.mysqli_error($this-link));
             
           }

    }

    public function Logout(){
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('Location:index.php');
       
    }



}



?>