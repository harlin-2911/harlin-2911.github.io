<?php
$n = $_GET["number"];
$fib[0] = 1;
$fib[1] = 1;

echo "1 : " . $fib[0] . "<br>";
echo "2 : " . $fib[1] . "<br>";

for ($i = 2; $i < $n; $i++) {
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    $ratio = $fib[$i] / $fib[$i - 1];
    echo ($i + 1) . " : " . $fib[$i] . " / " . $fib[$i - 1] . " = " . round($ratio, 6) . "<br>";
}
?>
