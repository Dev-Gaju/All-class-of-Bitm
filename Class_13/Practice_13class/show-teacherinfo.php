<?php
$result;
require_once './Teacher.php';
$teacher=new Teacher();
$result=$teacher->showTeacherInfo();

?>
<hr>
<a href="add_teacher.php">Add New</a>
<a href="show-teacherinfo.php">View List</a>
<hr>


<table border="1">
    <tr>
        <th>ID</th>
        <th>Teachers Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Age</th>
    </tr>
    <?php while($teacher=mysqli_fetch_assoc($result)){?>
    <tr>
        
        <td><?php echo  $teacher['id']?></td>
        <td><?php echo $teacher['teacher_name']?></td>
        <td><?php echo $teacher['teacher_email']?></td>
        <td><?php echo $teacher['teacher_phone']?></td>
        <td><?php echo $teacher['teacher_age']?></td>
     
    </tr>
    <?php } ?>
</table>