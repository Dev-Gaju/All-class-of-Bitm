<!DOCTYPE html>
<html>
<head>
	<title>demo</title>

 
	<style>
		.main-Div{
			height: 350px;
			width: 400px;
			border: 1px solid;
		}

	</style>
</head>
<body>

	<button type="button" id="black">Black</button>
	<button type="button" id="red">Red</button>
	<button type="button" id="pink">Pink</button>
	<button type="button" id="green">Green</button>
	<button type="button" id="yellow">Yellow</button>

<div class="main-Div" id="mainDiv"></div>


<script>
	  var BlackElement=document.getElementById('black');
           BlackElement.onclick=function() {
           	var mainDiv=document.getElementById('mainDiv');
           mainDiv.style.backgroundColor='black';
           };

           var redElement=document.getElementById('red');
           redElement.onclick=function() {
           	var mainDiv=document.getElementById('mainDiv');
           mainDiv.style.backgroundColor='red';
           };

           var pinkElement=document.getElementById('pink');
           pinkElement.onclick=function() {
           	var mainDiv=document.getElementById('mainDiv');
           mainDiv.style.backgroundColor='pink';
           };




</script>
</body>
</html>