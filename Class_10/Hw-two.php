<?php

$StarTing_Number=$_POST['snum'];
$Ending_Number=$_POST['enum'];
$valErr=' ';
if (empty($_POST['val'])) {
	$valErr="please chose the one";
}else{
	$val=$_POST['val'];
}

$result=' ';

if ($StarTing_Number < $Ending_Number ) {
	if ($val==odd) {
		for ($i=$StarTing_Number; $i<=$Ending_Number  ; $i++) { 
			if ($i%2!=0) {
			$result .=$i.' ';
		                  
		                  }


                 }		
     }
     if ($val==even) {
		for ($i=$StarTing_Number; $i<=$Ending_Number  ; $i++) { 
			if ($i%2==0) {
			$result .=$i.' ';
		                  
		                  }


                 }		
     }
}

if ($StarTing_Number > $Ending_Number ) {
	if ($val==odd) {
		for ($i=$StarTing_Number; $i>=$Ending_Number  ; $i--) { 
			if ($i%2!=0) {
			$result .=$i.' ';
		                  
		                  }


                 }		
     }
     if ($val==even) {
		for ($i=$StarTing_Number; $i>=$Ending_Number  ; $i--) { 
			if ($i%2==0) {
			$result .=$i.' ';
		                  
		                  }


                 }		
     }
}





?>




<form method="post">
	<table>
	<tr>
	<td>StarTing Number</td>	
     <td><input type="text" name="snum"></td>    
	</tr>
	<tr>
	<td>Ending Number</td>	
     <td><input type="text" name="enum"></td>    
	</tr>
	<tr>
		<td> check one </td>
		<td>
		<input type="radio" name="val" value="odd">odd
		<input type="radio" name="val" value="even">even
		<span class="error">*<?php echo $valErr; ?></span>

        </td>

        <tr>
	<td>Result</td>
	<td><textarea rows="10" cols="30"><?php echo $result ;?></textarea> </td>
     </tr>

      <tr>
        <td></td>
          <td><input type="submit" value="submit"></td>
        </tr>

	</table>


</form>