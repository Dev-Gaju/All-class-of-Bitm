<?php
$message='';
if (isset($_POST['dbms'])) {
require_once './Student.php';
$student=new Student();
$message=$student->SetStudentInfo($_POST);    
}

?>
<hr>
<a href="add-student.php">Add students</a>
<a href="view-file.php">View students</a>
<hr>
<h2><?php echo $message;?></h2>
<form method="post">
    <table>
        <tr>
            <td>Student Name</td>
            <td><input type="text" name="student_name"></td>
        </tr>
          <tr>
            <td>Phone Number</td>
            <td><input type="text" name="phone_number"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type="text" name="age"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="submit" name="dbms"></td>
        </tr>
    </table>
    
</form>