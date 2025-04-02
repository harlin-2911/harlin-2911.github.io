<?php
$n = 30;  
$Ssum = 0; 
$Sprod = 1; 


for ($S = 1; $S <= $n; $S++) {
    echo $S;
    if ($S < $n) {
        echo " + ";
    }
    $Ssum += $S; 
    $Sprod *= $S;  
}

echo " = $Ssum\n";  
echo "1 * ... * $n = $Sprod\n";  
?>