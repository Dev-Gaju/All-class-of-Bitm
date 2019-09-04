<?php
$result='';
require_once './Student.php';
$student=new Student();
$result=$student->ShowonTheTAble($_POST);

if (isset($_GET['status'])){
    $id=$_GET['id'];
    $student->DeleteFromDatabase($id);
    
}
?>
<hr> 
<a href="Add-student.php">Add New</a><br>
<a href="view.php">View</a>
<hr>


<table border="1">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Contact Number</th>
        <th>Action</th>
    </tr>
    <?php while ($student=  mysqli_fetch_assoc($result)){?>
    <tr>
        <td><?php echo $student['id'];?></td>
        <td><?php echo $student['fname'];?></td>
        <td><?php echo $student['lname'];?></td>
        <td><?php echo $student['cnum'];?></td>
        <td>
            <a href="edit.php? id=<?php echo  $student['id'];?>">Edit</a>||
            <a href="?status=delete & id=<?php echo  $student['id'];?>" onclick="return confirm('Are you sure to Delete this!!');">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>