<?php

$result='';
if (isset($_POST['btn'])) {
    function passwordconvertor(){
        $password=$_POST['password'];
        $data=['@','a','A','*','#','$','p','P','w','!','+'];
        $pass='';
       for ($i=1; $i<=$password ; $i++) { 
                 $index= rand(0,10);
                 $pass .=$data[$index];


       }
       return $pass;
    }
    $result=passwordconvertor();
}

?>

<form method="post">
    <table>
        <tr>
            <td>Enter The Password</td>
            <td><input type="text" name="password" ></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn"></td>
        </tr>
    </table>
    
</form>
<h1>The Password is : <?php echo $result; ?></h1>