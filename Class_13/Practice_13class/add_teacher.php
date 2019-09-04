<?php
$message;
require_once './Teacher.php';
if (isset($_POST['press'])){
    $teacher=new Teacher();
    $message=$teacher->setTeachersInfo($_POST);
}
?>
<hr>
<a href="add_teacher.php">Add New</a>
<a href="show-teacherinfo.php">View List</a>
<hr>
<h2><?php echo $message;?></h2>
<form method="post">
    <table>
        <tr>
            <td>Teacher Name</td>
            <td><input type="text" name="teacher_name" ></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="teacher_email" ></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><input type="text" name="teacher_phone" ></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type="text" name="teacher_age" ></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="SubmiT" name="press"></td>
        </tr>
    </table>
</form>