<!DOCTYPE html>
<html lang="en">
<head>
	<title>Javascript Basic</title>
</head>
<body>
<table>
	<tr>
	<td>First Name</td>
	<td><input type="text" name="first_name" id="first_name"></td>	
	</tr>

	<tr>
	<td>First Name</td>
	<td><input type="text" name="last_name" id="last_name"></td>	
	</tr>

</table>
<hr>

<table border="1">
	<tr>
		<th>First Name</th>

		<th>Last Name</th>

		<th>Full Name</th>

	</tr>
	<tr>
		<td id="res1">Demo</td>
		<td id="res2">Demo</td>
		<td id="res3">Demo</td>
	</tr>

</table>

<script>
  
         var firstName=document.getElementById('first_name');
              
              firstName.onkeyup=function(){
              	var firstNameRes=document.getElementById('first_name').value;
              	document.getElementById('res1').innerHTML=firstNameRes;
              };

                 var lastName=document.getElementById('last_name');
              
              lastName.onkeyup=function(){
              	var lastNameRes=document.getElementById('last_name').value;
              	document.getElementById('res2').innerHTML=lastNameRes;
              };

               var fullName;
               fullName.onkeyup=function(){
              	var fullNameres=firstNameRes+' '+lastNameRes;
              	document.getElementById('res3').value=fullNameres;
            
                };


            
              	










	// var submitElement=document.getElementById('btn');

 //         submitElement.onclick=function(){
 //         	 var firstName= document.getElementById('first_name').value;
 //         	 var lastName= document.getElementById('last_name').value;
 //         	 var fullName =firstName+' '+lastName;
 //         	 document.getElementById('full_name').value=fullName;


 //         };

</script>
</body>
</html>