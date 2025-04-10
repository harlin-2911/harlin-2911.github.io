<?php
echo "number = " . $_GET["number"] . "<br>";

$n = $_GET["number"];
for ($i = 0; $i < $n; $i++) {
    $data[$i] = rand(10, 100); // 10 이상 100 이하의 정수
    echo "$i = $data[$i]<br>";
}

echo "<br>--- 정렬 후 ---<br>";
sort($data);
for ($i = 0; $i < $n; $i++) {
    echo "$i = $data[$i]<br>";
}
?>
