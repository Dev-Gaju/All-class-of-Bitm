<?php
require_once './Detection.php';
$detection= new Detection();
$result='';
if(isset($_POST['value'])){
    $firstNumber=$_POST['firstNumber'];
    $last_Number=$_POST['last_Number'];
    $result=$detection->seriesSummetion($firstNumber,$last_Number);
    
}





?>



<form method="post">
    <table>
        <tr>
        <td>First Number</td>
        <td><input type="number" name="firstNumber"></td>
        <tr>
        <tr>
        <td>Last Number</td>
        <td><input type="number" name="last_Number"></td>
        <tr>
        <tr>
        <td>Result</td>
        <td><input type="text" value="<?php echo $result;?>"></td>
        <tr>
        <tr>
            <td></td>
            <td><input type="submit" name="value" value="Submit"></td>
        </tr>
    </table>
</form>