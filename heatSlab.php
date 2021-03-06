<?php
/**
The front of a slab of lead (k = 35 W/m·K) is kept at 110◦C and 
the back is kept at 50◦C.

If the area of the slab is 0.4m2 and it is 0.03m thick, 
compute the heat flux, q, and the heat transfer rate, Q.

Solution:

q = dT/dx ≃ (Tback −Tfront)/(xback −xfront) 

 Thus
(50−110)/( 2 2 q = −35 0.03 = +70,000 W/m = 70 kW/m

*/

$k=35; // [w/m*C]
$Tfront=110; // [C]
$Tback=50; // [C]
$area=0.4; // [m2]
$thick=0.03; // [m]

function heatFlow($k, $Tfront, $Tback, $thick) {
	$q= -$k*($Tback-$Tfront)/$thick;
	return $q;
}

function heatSlab($k, $Tfront, $Tback, $thick, $area) {
	$q= -$k*($Tback-$Tfront)/$thick;
	$Q=$q*$area;
	return $Q;
}

echo "q = ".heatFlow($k, $Tfront, $Tback, $thick)." [w/m2]";
echo "<br/>";
echo "Q = ".heatSlab($k, $Tfront, $Tback, $thick, $area)." [w]";
?>
