<?php

$firstNumber=$_POST['fnum'];
$lastNumber=$_POST['lnum'];
$Result='';


if ($firstNumber<$lastNumber) {
	for ($i=$firstNumber; $i<=$lastNumber ; $i++)
	 { 
		$Result .=$i.' ';
	}
}elseif ($firstNumber>$lastNumber) {
	for ($i=$firstNumber; $i>=$lastNumber ; $i++) { 
		$Result .= $i.'';
	}
}


?>





<form method="post">
 <table>
<tr>
	<td>First Number</td>
	<td><input type="text" name="fnum"></td>
</tr>
<tr>
	<td>Last Number</td>
	<td><input type="text" name="lnum"></td>
</tr>
<tr>
	<td>Result</td>
	<td><textarea rows="10" cols="30"><?php echo $Result ;?></textarea> </td>
</tr>
<tr>
	<td></td>
<td><input type="submit" value="submit"></td> 
</tr>
 </table>
</form>