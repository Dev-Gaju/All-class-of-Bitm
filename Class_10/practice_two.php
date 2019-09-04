<html>
    <head>
        <style>
            .error{
                color: red;
            }
        </style>
    </head>
<?php
echo '<pre>';
print_r($_POST);


$valErr='';
$first_numebr=$_POST['first_numebr'];
$second_numebr=$_POST['second_numebr'];

if (empty($_POST['val'])){
    $valErr="Plase chose One";
}else{
    $val=$_POST['val'];
}

$result='';
if ($first_numebr <$second_numebr) {

if($val =='odd'){
    for($i=$first_numebr; $i<=$second_numebr;$i++){
    if($i%2!=0){
         $result .=$i.' '; 
}
    }
    }

    else if($val=='even'){
    for($i=$first_numebr; $i<=$second_numebr;$i++){
    if($i%2==0){
        $result .=$i.' ';
}
    }
}
}else if($first_numebr >$second_numebr){
    if($val =='odd'){
    for($i=$first_numebr; $i>=$second_numebr;$i--){
    if($i%2!=0){
         $result .=$i.' ';
}
    }
    }

    else if($val=='even'){
    for($i=$first_numebr; $i>=$second_numebr;$i--){
    if($i%2==0){
        $result .=$i.' ';
}
    }
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
            <td>Select One</td>
            <td>
                <input type="radio" name="val" value="odd">Odd
                <input type="radio" name="val" value="even">Even
                <span class="error">*<?php echo $valErr;?></span>
            </td>
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
    <?php?>