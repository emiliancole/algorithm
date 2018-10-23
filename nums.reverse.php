<?php
//nums.revers.php
$input  = array(1,2,3,4);
print_r($input);
$result = array_reverse($input);
print_r($result);
$result_keyed = array_reverse($input, true);
print_r($result_keyed);

?>