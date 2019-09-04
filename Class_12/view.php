<?php

require_once './Example.php';
$example= new Example();
require_once './Student.php';
$student= new Student('BASIS');//constructor with object data passing
$student->age;
echo $student->age;
echo '<br>';
$student->Addition();


$result='';
if (isset($_POST['value'])) {
    $starting_number=$_POST['starting_number'];
    $ending_number=$_POST['ending_number'];
    $result =$student->serriesSummetion($starting_number, $ending_number);
    
}


?>


<!--<form method="post">
    <table>
        <tr>
        <td>Name</td>
        <td><input type="text" name="fname"></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><input type="text" name="lname"></td>
        </tr>
        <tr>
        <td>Full Name</td>
        <td><input type="text" value="<?php// echo $result;?>"></td>
        </tr>
        <td> <input type="submit" name="btn"/> </td>
        
    </table>
    
</form>-->

<br>
<br/>
<form method="post">
    <table>
        <tr>
        <td>Starting Number</td>
        <td><input type="number" name="starting_number"></td>
    </tr>
    <tr>
        <td>Ending Number</td>
        <td><input type="number" name="ending_number"></td>
        </tr>
        <tr>
        <td>Full Number</td>
        <td><input type="text" value="<?php echo $result;?>"></td>
        </tr>
        <td> <input type="submit" name="value"/> </td>
        
    </table>
    
</form>