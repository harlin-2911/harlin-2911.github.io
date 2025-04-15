<?php
$n = 30;  

echo "n = $n<br><br>";

for ($i = 0; $i < $n; $i++) {
    $data[$i] = rand(0, 100); // 0 이상 100 이하의 난수 생성
    echo "$i = $data[$i]<br>";
}

echo "<br>--- 정렬 후 ---<br>";

sort($data); 

for ($i = 0; $i < $n; $i++) {
    echo "$i = $data[$i]<br>";
}
?>

