<?php
$gaju=[
    
    'name'=> 'Gaju Ahmed',
    'father_name'=>'Omor Ali',
    'mother_name'=>'Amina Bmgum',
    'email'=>'gajuahmd@gmail,com',
     'phoneNumber'=>'01782057366',
    'address'=>'Rajshahi'
   
    
];

?>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Father NAme</th>
        <th>Mother Name</th>
        <th>Email</th>
        <th>Phone NUmber</th>
        <th>Address</th>
    </tr>
    <tr>
        <td><?php echo $gaju['name'];?></td>
        <td><?php echo $gaju['father_name'];?></td>
        <td><?php echo $gaju['mother_name'];?></td>
        <td><?php echo $gaju['email'];?></td>
        <td><?php echo $gaju['phoneNumber'];?></td>
        <td><?php echo $gaju['address'];?></td>
        
    </tr>
    
</table>
<br/>
<br/>
<?php
$data=[];

$data[0][0]=1;
$data[0][1]='A';
$data[0][2]='01';
        
$data[1][0]=2;
$data[1][1]='B';
$data[1][2]='02';

$data[2][0]=3;
$data[2][1]='C';
$data[2][2]='03';

$data[3][0]=4;
$data[3][1]='D';
$data[3][2]='04';

foreach ($data as $value){
    foreach ($value as $x){
        echo $x;
    }
    echo '<br>';
}
?>

<?php

$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$result=$first_name.' '.$last_name;



echo "<pre>";
print_r($_POST);
?>

<form method="post">
    <table>
        <tr>
        <td>Name</td>
        <td><input type="text" name="fname"></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><input type="text" name="lname"></td>
        </tr>
        <tr>
        <td>Full Name</td>
        <td><input type="text" value="<?php echo $result;?>"></td>
        </tr>
        <td> <input type="submit" name="btn" value="submit"> </td>
        
    </table>
    
</form>


        <br/>
        <br/>
        <br/>

