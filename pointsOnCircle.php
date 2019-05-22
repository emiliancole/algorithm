<?php

function positionX($numItems,$thisNum){
  $alpha = 360/$numItems; // angle between the elements
  $r = 1000; // radius
  $angle = $alpha * $thisNum; // angle for N element
  $x = $r * cos(deg2rad($angle)); // X coordinates
  return $x;
}

function positionY($numItems,$thisNum){
  $alpha = 360/$numItems; // angle between the elements
  $r = 1000; // radius
  $angle = $alpha * $thisNum; // angle for N element
  $y = $r * sin(deg2rad($angle)); // Y coordinates
  return $y;
}

echo round(positionX(4,1))."<br>";
echo round(positionY(4,1))."<br><br>";
echo round(positionX(4,2))."<br>";
echo round(positionY(4,2))."<br><br>";
echo round(positionX(4,3))."<br>";
echo round(positionY(4,3))."<br><br>";
echo round(positionX(4,4))."<br>";
echo round(positionY(4,4))."<br><br>";

?>
