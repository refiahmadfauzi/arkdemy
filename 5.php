<?php

$a = array (

array(4,10,13),

array(5,4,1),

array(0,1,2)

);




echo "<h3> Matriks </h3>";

echo $a[0][0]." ".$a[0][1]." ".$a[0][2]."</br>";

echo $a[1][0]." ".$a[1][1]." ".$a[1][2]."</br>";

echo $a[2][0]." ".$a[2][1]." ".$a[2][2]."</br>";

$total = ($a[0][0] + $a[1][1] + $a[2][2]) + ($a[0][2] + $a[1][1] + $a[2][0]);

echo "Total = ".$total;

?>
