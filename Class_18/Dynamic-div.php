<!DOCTYPE html>
<html>
<head>
	<title>Dynamic div</title>
</head>
<body>
  <table>
  	<tr>
    <td>Give Height</td>
    <td><input type="text" name="height" id="height"></td>
  	</tr>
  	<tr>
    <td>Give Wieght</td>
    <td><input type="text" name="height" id="weight"></td>
  	</tr>
  	<tr>
    <td>Give Color</td>
    <td><input type="text" name="height" id="color"></td>
  	</tr>
  	<tr>
    <td></td>
    <td><input type="submit" name="submit" id="btn"></td>
  	</tr>

  </table>
<hr/>
<div id="res"></div>
         
          <script>

          
          	var btnElement=document.getElementById('btn');
          	btnElement.onclick=function(){
            var heightElement=document.getElementById('height').value;
            var weightElement=document.getElementById('weight').value;
            var colorElement=document.getElementById('color').value;
            var resElement= document.getElementById('res');
            resElement.style.height=heightElement+'px';
            resElement.style.width=weightElement+'px';
            resElement.style.backgroundColor=colorElement;

          	}

          </script>
    
</body>
</html>