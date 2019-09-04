<?php
include "conn.php";
$id="";
$username=$_POST["un"];
$email=$_POST["email"];
$password=$_POST["password"];
$phoneNumber=$_POST["phn"];






$sql="INSERT INTO rawtable VALUES ('$id','$username','$email','$password','$phoneNumber')";

if ($conn->query($sql) === TRUE) {
    echo "Result is";
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

        <p>Username :<?php echo $username?></p>
        <p>Email: <?php echo $email ?></p>
        <p>Password: <?php echo $password ?></p>
        <p>phoneNumber: <?php echo $phoneNumber ?></p>


______________________________________________________________________________-



<?php

$x = 100;  
$y = 50;

if ($x == 100 && $y == 50) {
    echo "Hello world! <br>";  
}
?>  


<?php

$x=274;
var_dump($x); 
?>
<br>
<?php
define("GREETING", "love you very much", TRUE);
echo greeting;
?>

<br>

<?php
echo strlen("I love you");
echo '<br>';
echo strrev("who you so serious");
?>
<br>

<?php

echo str_replace("work", "life", "work is beautiful");
?>

<br>

<?php
 
$t=  date("H");
if ($t <"25") {
    echo 'Have a good day';
    $day=  date('l');
    echo 'the day is' .$day.
    $time=  date("H:i:s");
    
}

?>
<br>
<?php
 $x=1;
     while ($x <=12) {
     echo "the number is : $x <br>";
      $x++;
}
?>

<br>
<?php 

$a=1;
do{
echo "The value is : $a <br>";
$a++;
} while ($a<=5);


?>
<br>

<?php 
 $color= array("green", "yellow", "pink", "blue");
 foreach ($color as $value){
     echo "Color is : $value <br>";
 }
?>
<br>
<h3>Function</h3>
<?php
function mytest(){
    echo "who the hell are you <br>";
}

mytest();
"<br>";
function  familyName($name,$year)
        {
    echo "$name.Ahmed .year .$year<br>";
        }
    familyName("Shams", "1992");
    familyName("James", "1991");
    familyName("Kishor", "1990");
?>
<br>
<h3>Array</h3>
<?php
$cars= array("volvo", "BMW", "Toyota");
echo "I love the ".$cars[0] .", ".$cars[1]." and " .$cars[2]. ".<br>";
echo count($cars);

echo "<br>";
?>
<?php
$cars=array("BMW", "Toyota", "Volvo");
$arrlength=count($cars);
for($x=0; $x<$arrlength; $x++){
echo $cars[$x];
echo "<br>";
}
?>

<?php
$age=array("James"=>"25", "Kishor"=>"33","Shams"=>"44");
echo "Shams ".$age['Shams']." years Old";
?>
<h3>Foreach Associative array</h3>


<?php
echo"<br>";
$age=array("James"=>"25", "Kishor"=>"33","Shams"=>"44");
foreach ($age as $x => $x_value){
    
    echo "Key=".$x. ",value=" .$x_value;
    echo "<br>";
}
?>

<?php

$y=array("kishor", "james","shakil");
foreach ($y as $value){
    echo "the name of the person is: $value <br>";
}

echo "<br>";

function family_member($name, $age){
    echo  "Name $name Ahmed year $age <br>";
}
family_member("kishor","2223");
family_member("kishor222","32223");
family_member("james","2433323")

?>

<?php
$name=array("suger"=>"45", "Milk"=>"65","Cake"=>"332");
ksort($name);
foreach ($name as $x=>$x_value){
    echo "Keys=".$x." value=".$x_value." <br>";
}

?>
<h3>Sorting</h3>

    <?php
   $cars=  array("volvo","pajero","audi","lumburges");
    sort($cars);

   $arraylength=count($cars);
   for($i=0; $i<$arraylength;$i++){
       echo $cars[$i];
       echo '<br>';
       
   }
?>


<?php 
echo '<br>';
$value=array(1,2,3,4,5,6,7);
rsort($value);
$length=count($value);
for($b=0; $b<$length; $b++){
    echo $value[$b];
    echo '<br>';
}
?>
<?php
$age=array("shams"=>"45", "kishor"=>"44", "Swopon"=>"55",);
asort($age);

foreach ($age as $x=>$x_value){
    echo "key=".$x.",value=".$x_value;
    echo '<br>';
}

?>
<?php
$number=array("manik"=>"748","shuvo"=>"4798","rabbi"=>"4674","Insan"=>"4939");
krsort($number);
foreach ($number as $x=>$x_value){
    echo "key=".$x.",value=".$x_value;
    echo '<br>';
}

?>

<?php
for($i=0; $i<6; $i++){
    for($j=0; $j<6-$i; $j++){
        echo '*';
    }
    echo '<br>';
}
?>

<?php
for ($i=0; $i<6; $i++){
    for($j=0; $j<$i; $j++){
        echo '*';
    }
    echo '<br>';
    }


?>

<?php
$saiful=array("Fahim"=>"77", "Kishor"=>"99","shans"=>"88");
krsort($saiful);
foreach ($saiful as $x =>$x_value) {
    echo "Key=".$x.",value=".$x_value;
    echo "<br>";
}

?>







<br>
<br>
<?php
$name = $email = $add = $tarea = $gender = "";
if($_SERVER["REQUEST_METHOD"]=="POST"){
   $name=$_POST['name'];
    $email=$_POST['email'];
     $add=$_POST['add'];
     $tarea=$_POST['tarea'];
     $gender=$_POST["gender"];
    
    
}


?>

<form method="post">
    Name: <input type="text" name="name">
    <br><br>
    Email: <input type="email" name="email">
    <br><br>
    Address: <input type="text" name="add">
    <br><br>
    Comment: <textarea rows="5" cols="20" name="tarea" ></textarea>
    <br><br>
    Gender: 
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="others">Others
    <br><br>
    <input type="submit" name="sub">
    </form>
   


<br>
<br>

<html>
    <head>
        <style>
            .error{
                color: red;
            }
        </style>
    </head>
    <body>
        <?php
         
        $nameErr = $emailErr =$addErr =$tareaErr=$genderErr="";
        $name = $email =$add =$tarea=$gender="";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["name"])){
            $nameErr="Name is Required";
        }
        else{
            $name=$_POST["name"];
        }
        if(empty($_POST["email"])){
            $emailErr="Email is Required";
        }else{
            $email=$_POST["email"];
        }
        if (empty($_POST["add"])){
            $add="";
        }else{
        $add=$_POST["add"];
    }
        if(empty($_POST["tarea"])){
            $tarea="";
        }
 else {
     $tarea=$_POST["tarea"];
 }
 if (empty($_POST["gender"])){
     $genderErr="gender is required";
 }  else {
 $gender=$_POST["gender"];    
 }
        }
        
        
        ?>
        
        <h2 class="error"><span>*Required field</span></h2>
        <form method="post">
    Name: <input type="text" name="name">
    <span class="error">* <?php echo "$nameErr";?></span>
    <br><br>
    Email: <input type="email" name="email">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Address: <input type="text" name="add">
    <br><br>
    Comment: <textarea rows="5" cols="20" name="tarea" ></textarea>
    <br><br>
    Gender: 
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="others">Others
    <span class="error">* <?php echo $genderErr?></span>
    <br><br>
    <input type="submit" name="sub">
    </form>
        
         <?php
    echo "<h2>the input is<h2>";
    echo "<br>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $add;
    echo "<br>";
    echo $tarea;
    echo "<br>";
    echo $gender;
    ?>
    </body>
</html>

<br>
<h4>New Validation Code</h4>

<html>
    <head>
        <style>
            .error{
                color: red;
            }
        </style>
    </head>
    <body>
     
        <?php
         
        $nameErr = $emailErr =$addErr =$tareaErr=$genderErr="";
        $name = $email =$add =$tarea=$gender="";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["name"])){
            $nameErr= "Name is Required";
        }
        else{
            $name=$_POST["name"];
            if (!preg_match("/^[a-z A-Z]*$/",$name)){
                $nameErr="Only print WhiteSpace And letter";
            }
        }
        if(empty($_POST["email"])){
            $emailErr="Email is Required";
        }else{
            $email=$_POST["email"];
            if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
                $emailErr="Invalid emial formate";
            }
            
        }
        if (empty($_POST["add"])){
            $add="";
        }else{
        $add=$_POST["add"];
    }
        if(empty($_POST["tarea"])){
            $tarea="";
        }
 else {
     $tarea=$_POST["tarea"];
 }
 if (empty($_POST["gender"])){
     $genderErr="gender is required";
 }  else {
 $gender=$_POST["gender"];    
 }
        }
        
        
        ?>
        
        <h2 class="error"><span>*Required field</span></h2>
        <form method="post">
    Name: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    Email: <input type="email" name="email">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Address: <input type="text" name="add">
    <br><br>
    Comment: <textarea rows="5" cols="20" name="tarea" ></textarea>
    <br><br>
    Gender: 
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="others">Others
    <span class="error">* <?php echo $genderErr?></span>
    <br><br>
    <input type="submit" name="sub">
    </form>
        
     <?php
    echo "<h2>the output is<h2>";
    echo "<br>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $add;
    echo "<br>";
    echo $tarea;
    echo "<br>";
    echo $gender;
    ?>
    </body>
</html> 


<h3>Multidimentional Aray</h3>


























