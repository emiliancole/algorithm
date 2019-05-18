<?php 

echo("2 degree Equation<hr>");
   
 $a=4;
 $b=4;
 $c=1;
    
   // y = a*x^2+b*x+c
$d=pow($b,2)-4*$a*$c;
$e=(-$b+sqrt($d))/2*$a;
$f=(-$b+sqrt($d))/2*$a;
   
   
 if($a<>0)
    {
        
    if($d>0)
    echo("Le soluzioni sono: $e e $f");
        
        if($d==0)
        
echo("La soluzione è: $e ");
        
        
if($d<0)
       
 echo("La soluzione è impossibile ");
    }
    
    

 ?>
