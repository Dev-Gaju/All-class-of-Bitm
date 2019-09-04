<?php
require_once './Cricketer.php';
$cricketer= new Cricketer();
$result=$cricketer->ShowOntheTAble();

?>
<hr>
<a href="add_cricketer.php">Add New </a><br>
<a href="view.php">View List</a>
<hr>


<table border='1'>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Contact Number</th>
        <th>Email</th>
        <th>Home Town</th>
        <th>Action</th>
    </tr>
    <?php while($cricketer=  mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td> <?php echo $cricketer['id'];?>;</td>
        <td><?php echo $cricketer['cname'];?></td>
        <td><?php echo $cricketer['cage'];?></td>
        <td><?php echo $cricketer['cnumber'];?></td>
        <td><?php echo $cricketer['cemail'];?></td>
        <td><?php echo $cricketer['ctown'];?></td>
        <td>
            
            <a href="edit.php?id=<?php echo $cricketer['id']; ?>">Edit</a>||
            <a href="">Delete</a>
            
        </td>
    </tr>
    <?php } ?>
</table>