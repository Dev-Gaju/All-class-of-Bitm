<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	
	<tr> 
		<td>First Name</td>
		<td><input type="text" id="first_number"></td>
	</tr>
	<tr>
		<td>Second name</td>
		<td><input type="text" id="second_number"></td>
	</tr>
	<tr>
		<td>Full Name</td>
		<!-- <td><input type="text" id="result"></td> -->
		<td id="result"></td>
	</tr>

	<tr>
		<td></td>
		<td><input type="submit" id="btn"></td>
	</tr>
</table>



<script src="jquery-3.4.1.js"></script>


<script>
	$('#btn').click(function(){
	var firstName	=$('#first_number').val();
	var secondName	=$('#second_number').val();
	var fullName   = firstName+' '+secondName;
	//$('#result').val(fullName);
	//$('#result').text(fullName);
	$('#result').html(fullName);


	});



</script>
</body>
</html>