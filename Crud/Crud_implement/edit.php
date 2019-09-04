<?php
$cricketersId=$_GET['id'];
require_once './Cricketer.php';
$cricketer=new Cricketer();
$result=$cricketer->SetontheTableById($cricketersId);
$cricketersID=  mysqli_fetch_assoc($result);

if (isset($_POST['btn'])){
    $cricketer->Updateonthetable($_POST,$cricketersId);
    
}


?>

<form method="POST">
<table>
    <tr>
    <td>Cricketer Name</td>
    <td><input type="text" name="cname" value="<?php echo $cricketersID['cname'];?>" ></td>
    <tr>
    <tr>
    <td>Cricketer Age</td>
    <td><input type="text" name="cage"  value="<?php echo $cricketersID['cage'];?>"></td>
    <tr>
        <tr>
    <td>Contact Number</td>
    <td><input type="text" name="cnumber"  value="<?php echo $cricketersID['cnumber'];?>" ></td>
    <tr>
    <tr>
    <td>Cricketer Email</td>
    <td><input type="text" name="cemail" value="<?php echo $cricketersID['cemail'];?>" ></td>
    <tr>
    <tr>
    <td>Cricketer Hometown</td>
    <td><input type="text" name="ctown" value="<?php echo $cricketersID['ctown'];?>" ></td>
    <tr>
    <tr>
        <td></td>
        <td><input type="submit" name="btn" value="Update on the Database"></td>
    </tr>
    
</table>
 </form>