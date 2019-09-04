<?php
$message='';
require_once './Teacher.php';
if (isset($_POST['select'])){
    $teacher=new Teacher();
    $message=$teacher->SaveOntheTable($_POST);
}

?>
<hr>
<a href="Add-Teacher.php">Add New</a><br>
<a href="view-teacher.php">View List</a>
<hr>
<h3> <?php echo $message;?></h3>

<form method="POST">
    <table>
        <tr>
            <td>Teacher Name</td>
            <td><input type="text" name="tname" ></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" ></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><input type="text" name="pnumber" ></td>
        </tr>
        <tr>
            <td>Home Town</td>
            <td><input type="text" name="htown" ></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="select"></td>
        </tr>
    </table>
</form>
