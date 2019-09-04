<?php
$message='';
if (isset($_POST['save'])) {
    require_once './Student.php';
    $student= new Student();
    $message=$student->SaveDataonTheTable($_POST);
    
}
?>

<h3> <?php echo $message; ?> </h3>


<hr> 
<a href="Add-student.php">Add New</a><br>
<a href="view.php">View</a>
<hr>

<form method="POST">
    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="fname"></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="lname"></td>
        </tr>
        <tr>
            <td>Contact Number</td>
            <td><input type="text" name="cnum"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="save" value="Save On the Database"></td>
        </tr>
        
    </table>
</form>

