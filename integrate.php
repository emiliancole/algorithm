<?php

function integral($i="x") {
switch ($i) {
    case "x":
        echo "x/2";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
    default:
       echo "i is not equal to 0, 1 or 2";
	}

}

function integralab($a1,$i,$a,$b,$c=0) {
switch ($i) {
    case "x":
        echo "integral of x from $a to $b: x**2/2 = ".($b**2-$a**2)/2;
        break;
    case "a1*x":
        echo "integral of $a1*x from $a to $b: a1*x**2/2 = ".($b**2-$a**2)*$a1/2;
        break;
    case "a1*x+c":
        echo "integral of $a1*x+$c from $a to $b: a1*x**2/2 + c= ".($b**2-$a**2)*$a1/2+$c;
        break;
    default:
       echo "i is not equal to 0, 1 or 2";
	}

}

integralab(3,"a1*x+c",0,1,1);
?>