<?php 
$value=array("shain","nazrul","ramiz");
foreach($value as $shams){
    echo "$shams <br>";
    
}
?>

<?php
$a=1;
do{
echo "number is $a";
$a++;
}while ($a<=5);

?>

<?php 

$a=1;
do{
echo "The value is : $a <br>";
$a++;
} while ($a<=5);
?>

<?php
$agg=array("kamil"=>"122","sabbir"=>"444","badol"=>"567");
krsort($agg);
foreach ($agg as $x => $x_value) {
    echo "value=".$x .",keys=".$x_value;
    echo '<br>';
}
?>

<?php
echo $_SERVER['SERVER_NAME'];

?>
<br>
<?php
$x=7;
$y=10;
function add(){
        $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}

add();
echo $z;
?>