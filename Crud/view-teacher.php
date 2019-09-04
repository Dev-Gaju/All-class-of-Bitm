<?php
$result='';
require_once './Teacher.php';
$teacher= new  Teacher();
$result=$teacher->ShowOntheTable();

if(isset($_GET['status'])){
    $id=$_GET['id'];
    $teacher->DeleteIDbyButton($id);
}

?>
<a href="Add-Teacher.php">Add New</a><br>
<a href="view-teacher.php">View List</a>
<hr>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Teacher Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Home Town</th>
        <th>Action</th>
    </tr>
      <?php while ($teacher=mysqli_fetch_assoc($result)) {?>
    <tr>
        <td> <?php echo $teacher['id'];?></td>
        <td> <?php echo $teacher['tname'];?></td>
        <td> <?php echo $teacher['email'];?></td>
        <td> <?php echo $teacher['pnumber'];?></td>
        <td> <?php echo $teacher['htown'];?></td>
        <td>
            <a href="edit.php?id=<?php echo $teacher['id']; ?>">Edit</a>||
            <a href="?status=delete & id=<?php echo $teacher['id']; ?>">Delete</a>
        </td>
    </tr>
    
    <?php }?>
</table>
