<?php

function vectorsDotProduct($v1, $v2) {
    $vdp=$v1[0]*$v2[0]+$v1[1]*$v2[1]+$v1[2]*$v2[2];
    return $vdp;
}

function vectorLength($v) {
    $vl=sqrt($v[0]**2+$v[1]**2+$v[2]**2);
    return $vl;
}
   
function vectorsAngle($v1, $v2) {
    $vdp=vectorsDotProduct($v1, $v2);
    $vl1=vectorLength($v1);
    $vl2=vectorLength($v2);
    $teta=acos($vdp/($vl1*$vl2));
    return $teta;
}

$A=array(2.0, 2.0, -1.0);
$B=array(6,-3,2);
$vdp=vectorsDotProduct($A,$B);
print("vectorsProduct:". $vdp."</br>");

print("vectorA: ".vectorLength($A)."</br>");
print("vectorB: ".vectorLength($B)."</br>");

print(vectorsAngle($A,$B). " rads</br>");
print(rad2deg(vectorsAngle($A,$B)). " degrees");


