<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>도형 계산기</title>
</head>
<body>

<?php
$shape = $_GET["shape"];

if ($shape == "triangle") {
    $width = $_GET["width"];
    $height = $_GET["height"];
    $area = $width * $height / 2;
    echo "<h3>삼각형</h3>";
    echo "<p>밑변 = $width, 높이 = $height</p>";
    echo "<p>면적 = <b>$area</b></p>";
}

else if ($shape == "rectangle") {
    $width = $_GET["width"];
    $height = $_GET["height"];
    $area = $width * $height;
    echo "<h3>직사각형</h3>";
    echo "<p>가로 = $width, 세로 = $height</p>";
    echo "<p>면적 = <b>$area</b></p>";
}

else if ($shape == "circle") {
    $radius = $_GET["radius"];
    $area = M_PI * $radius * $radius;
    echo "<h3>원</h3>";
    echo "<p>반지름 = $radius</p>";
    echo "<p>면적 = <b>$area</b></p>";
}

else if ($shape == "box") {
    $width = $_GET["width"];
    $length = $_GET["length"];
    $height = $_GET["height"];
    $volume = $width * $length * $height;
    echo "<h3>직육면체</h3>";
    echo "<p>가로 = $width, 세로 = $length, 높이 = $height</p>";
    echo "<p>체적 = <b>$volume</b></p>";
}

else if ($shape == "cylinder") {
    $radius = $_GET["radius"];
    $height = $_GET["height"];
    $volume = M_PI * pow($radius, 2) * $height;
    echo "<h3>원통</h3>";
    echo "<p>반지름 = $radius, 높이 = $height</p>";
    echo "<p>체적 = <b>$volume</b></p>";
}

else if ($shape == "sphere") {
    $radius = $_GET["radius"];
    $volume = (4 / 3) * M_PI * pow($radius, 3);
    echo "<h3>구</h3>";
    echo "<p>반지름 = $radius</p>";
    echo "<p>체적 = <b>$volume</b></p>";
}

else {
    echo "<p>알 수 없는 도형입니다.</p>";
}
?>

</body>
</html>
