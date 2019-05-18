<?php 

$x1=50; $y1=50; $x2=100; $y2=100;
$x3=70; $y3=70;
$ma=($y2-$y1)/($x2-$x1);
$mb=-1/$ma;
//echo $mb;
$y4=( ($mb/$ma)*$y1+$mb*$x1+$mb*$x3-$y3 )/(($mb/$ma)-1);
//echo $y4;

$x4=$y4/$mb-$y3/$mb+$x3;
echo $x4.','.$y4;
 ?>