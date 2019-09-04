<html>
    <head></head>
    <body>
        <?php
        $result="";
  
        $value1=$_POST['value1'];
    
        $value2=$_POST['value2'];
    
        $operator=$_POST['btn'];
    
    
    
   
    switch ($operator) {
        case 'Add':
            $result = $value1 + $value2;
            break;
        
        case 'Sub':
            $result = $value1 - $value2;
            break;
        
        case 'Mul':
            $result = $value1 * $value2;
            break;
        
        case 'Div':
            $result = $value1 / $value2;
            break;
        

        default:
            break;
    }
    
        ?>
        
        <form method="post">
            <input type="text" name="value1" placeholder="first Number">
            <br/>
            <input type="text" name="value2" placeholder="Second Number">
            <br/>
            <input type="text" placeholder=" Result" value="<?php echo "{$result}";?>">
            <br/>
            <input type="submit" name="btn" value="Add">
            <input type="submit" name="btn" value="Sub">
            <input type="submit" name="btn" value="Mul">
            <input type="submit" name="btn" value="Div">
            
        </form>
    </body>
    
</html>