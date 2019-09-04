<!DOCTYPE html>
<html>
<head>
	<title>Javascript Calculator</title>
</head>
<body>
<table>
	
	<tr> 
		<td>First Number</td>
		<td><input type="text" id="first_number"></td>
	</tr>
	<tr>
		<td>Second Number</td>
		<td><input type="text" id="second_number"></td>
	</tr>
	<tr>
		<td>Result</td>
		<td><input type="text" id="result"></td>
	</tr>
	<tr>
		<td></td>
		<td>
		<input type="button" id="addition" value="+" onclick="additionValue('+');">
		<input type="button" id="subtraction" value="-" onclick="additionValue('-');">
		<input type="button" id="multipication" value="*" onclick="additionValue('*');">
		<input type="button" id="division" value="/" onclick="additionValue('/');">
		<input type="button" id="remainder" value="%" onclick="additionValue('%');">
	</td>
	</tr>
</table>


      <script >

      	function additionValue(operator){

      	var firstNumber=Number(document.getElementById('first_number').value);
      	var secondNumber=Number(document.getElementById('second_number').value);

      	switch(operator){

      		case '+':
      		var result= firstNumber+secondNumber;
      		break;
      		case '-':
      		var result= firstNumber - secondNumber;
      		break;
      		case '*':
      		var result= firstNumber * secondNumber;
      		break;
      		case '/':
      		var result= firstNumber / secondNumber;
      		break;
      		case '%':
      		var result= firstNumber % secondNumber;
      		break;
      	}

      		document.getElementById('result').value=result;

   }
           
        


      	
      	// var additionValue=document.getElementById('addition');
    
       //      additionValue.onclick=function(){
      	// 	var firstNumber=Number(document.getElementById('first_number').value);
      	// 	var secondNumber=Number(document.getElementById('second_number').value);
      	// 	var result=firstNumber+secondNumber;
      	// 	document.getElementById('result').value=result;
      	

      	// var subtractionValue=document.getElementById('subtraction');

      	// subtractionValue.onclick=function(){
      	// 	var firstNumber1=document.getElementById('first_number').value;
      	// 	var secondNumber1=document.getElementById('second_number').value;
      	// 	var result1=Number(firstNumber1) - Number(secondNumber1);
      	// 	document.getElementById('result').value=result1;


      

      </script>
      	

</body>
</html>