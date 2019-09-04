<?php
require_once './Student.php';
$student=new Student();
$result=$student->GetDataonTable();
?>

<hr>
<a href="add-student.php">Add students</a>
<a href="view-file.php">View students</a>
<hr>



<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Age</th>
    </tr>
    <?php while ($student=mysqli_fetch_assoc($result)) {?>
    <tr>
        <td><?php echo $student['id'];?></td>
        <td><?php echo $student['student_name'];?></td>
        <td><?php echo $student['phone_number'];?></td>
        <td><?php echo $student['email'];?></td>
        <td><?php echo $student['age'];?></td>
        
    <?php } ?>
</table>

