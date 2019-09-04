<?php
include "conn.php";

$username=$_POST["username"];
$password=$_POST["password"];






session_start();
$sql="SELECT * FROM rawtable WHERE username='$username' AND password='$password'";
$result= mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);

if($count==1){
    $_SESSION['username']=$_POST['username'];
    echo " hello " .$_SESSION['username']. " You are loged IN";
    echo "<a href='logout.php'><strong> Logout</strong> </a>";
}
else
{
    echo "username or password not correct!!";
}


?>

