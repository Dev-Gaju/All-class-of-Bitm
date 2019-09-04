<?php
$message='';
require_once './Cricketer.php';
if (isset($_POST['save'])){
$cricketer=new Cricketer();
$message=$cricketer->GetOntheTAble($_POST);
}    
 ?>
<hr>
<a href="add_cricketer.php">Add New </a><br>
<a href="view.php">View List</a>
<hr>

<h3><?php echo $message;?></h3>


<form method="POST">
<table>
    <tr>
    <td>Cricketer Name</td>
    <td><input type="text" name="cname" ></td>
    <tr>
    <tr>
    <td>Cricketer Age</td>
    <td><input type="text" name="cage" ></td>
    <tr>
        <tr>
    <td>Contact Number</td>
    <td><input type="text" name="cnumber" ></td>
    <tr>
    <tr>
    <td>Cricketer Email</td>
    <td><input type="text" name="cemail" ></td>
    <tr>
    <tr>
    <td>Cricketer Hometown</td>
    <td><input type="text" name="ctown" ></td>
    <tr>
    <tr>
        <td></td>
        <td><input type="submit" name="save" value="Save on the Database"></td>
    </tr>
    
</table>
 </form>