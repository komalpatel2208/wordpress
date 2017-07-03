<?php

/*
 * display factorial of no
 */

$number = 6;
$fact = 1;

for($i=1;$i<=$number;$i++){
    $fact = $fact*$i;
}

echo "Factorial of $number is ".$fact;
