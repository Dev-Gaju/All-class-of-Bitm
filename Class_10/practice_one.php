<?php
echo '<pre>';
print_r($_POST);

$first_numebr=$_POST['first_numebr'];
$second_numebr=$_POST['second_numebr'];
$result='';
if($first_numebr<$second_numebr){
    for($i=$first_numebr; $i<=$second_numebr;$i++){
    $result .= $i.' ';
}
    
}else if ($first_numebr>$second_numebr){
    for($i=$first_numebr;$i>=$second_numebr;$i--){
        $result .=$i.' ';
    }
}
?>


<form method="post">
    <table>
        <tr>
            <td>Starting Number</td>
            <td><input type="text" name="first_numebr"></td>
        </tr>
        <tr>
            <td>Ending Number</td>
            <td><input type="text" name="second_numebr"></td>
        </tr>
        <tr>
            <td>Result</td>
            <td><textarea rows="10" cols="40"><?php echo $result;?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit"></td>
        </tr>
    </table>
</form>