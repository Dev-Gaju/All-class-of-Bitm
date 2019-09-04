<?php
$teachersID= $_GET['id'];
require_once './Teacher.php';
$teacher= new Teacher();
$result=$teacher->SelectInfoByTeachersID($teachersID);
$teachersInfo= mysqli_fetch_assoc($result);
if (isset($_POST['btn'])){
    $teacher->UpdateTeachersInfo($_POST, $teachersID);
}
?>
<hr>
<a href="Add-Teacher.php">Add New</a><br>
<a href="view-teacher.php">View List</a>
<hr>

<form method="POST">
    <table>
        <tr>
            <td>Teacher Name</td>
            <td><input type="text" name="tname" value="<?php echo $teachersInfo['tname'];?>" ></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo $teachersInfo['email'];?>" ></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><input type="text" name="pnumber" value="<?php echo $teachersInfo['pnumber'];?>"></td>
        </tr>
        <tr>
            <td>Home Town</td>
            <td><input type="text" name="htown" value=" <?php echo $teachersInfo['htown'];?>" ></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Update Teachers Info"></td>
        </tr>
    </table>
    
</form>
