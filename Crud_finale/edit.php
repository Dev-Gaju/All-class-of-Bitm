<?php
$studentID=$_GET['id'];
require_once './Student.php';
$student=new Student();
$result=$student->GetOntheTAble($studentID);
$studentinfo= mysqli_fetch_assoc($result);
if (isset($_POST['update'])){
    $student->UpdateONtheTAble($_POST,$studentID);
}

?>


<form method="POST">
<table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="fname" value="<?php echo $studentinfo['fname'];?>"></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="lname" value="<?php echo $studentinfo['lname'];?>"></td>
        </tr>
        <tr>
            <td>Contact Number</td>
            <td><input type="text" name="cnum" value="<?php echo $studentinfo['cnum'];?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="update" value="Update On the Database"></td>
        </tr>
        
    </table>
    </form>