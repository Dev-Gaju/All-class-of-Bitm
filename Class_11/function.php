<?php

function addition($x,$y){
    $result=$x+$y;
    echo $result;
    
}
addition(10,20);
echo "<br>";
echo rand(66, 23);

?>
<br/>
<?php
echo '<pre>';
print_r($_POST);


echo date('d-M-Y');
echo "<br/>";
$name='Mokbul Hossain';
echo str_word_count($name);


?>
<br>
<br/>



<?php
function StringAndWordCount(){
    $data=[];
$given_string=$_POST['given_string'];
$data['totalString']=  strlen($given_string);
$data['totalword']= str_word_count($given_string);
return $data;
}
$data=StringAndWordCount();

?>


<form method="post">
    <table>
        <tr>
            <td>Enter the String</td>
            <td> <input type="text" name="given_string" size="100" ></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="Submit" value="submit"></td>
            
        </tr>
    </table>
</form>
<h2> Total Number of string <?php echo $data['totalString']  ;?></h2>
<h2> Total Number of word <?php echo $data['totalword'] ; ?></h2>



