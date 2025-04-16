<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Homework 3-4: 도형 계산기</title>
</head>
<body>
    <h2>Homework 3-4: 도형 계산기</h2>
    <form method="get">
        <label>도형 선택:
            <select name="shape">
                <option value="triangle">삼각형</option>
                <option value="rectangle">직사각형</option>
                <option value="circle">원</option>
                <option value="box">직육면체</option>
                <option value="cylinder">원통</option>
                <option value="sphere">구</option>
            </select>
        </label><br><br>

        <label>가로 / 밑변 / 반지름 (width): <input type="number" name="width" step="any" required></label><br>
        <label>세로 / 높이 (height): <input type="number" name="height" step="any"></label><br>
        <label>길이 (length, 직육면체용): <input type="number" name="length" step="any"></label><br><br>

        <input type="submit" value="계산">
    </form>

    <?php
    if (isset($_GET['shape'])) {
        $shape = $_GET['shape'];
        $width = floatval($_GET['width']);
        $height = isset($_GET['height']) ? floatval($_GET['height']) : 0;
        $length = isset($_GET['length']) ? floatval($_GET['length']) : 0;

        echo "<h3>계산 결과</h3>";

        switch ($shape) {
            case "triangle":
                $area = $width * $height / 2;
                echo "삼각형 면적 = $width * $height / 2 = " . round($area, 2);
                break;
            case "rectangle":
                $area = $width * $height;
                echo "직사각형 면적 = $width * $height = " . round($area, 2);
                break;
            case "circle":
                $area = pi() * pow($width, 2);
                echo "원 면적 = π * $width<sup>2</sup> = " . round($area, 2);
                break;
            case "box":
                $volume = $width * $length * $height;
                echo "직육면체 체적 = $width * $length * $height = " . round($volume, 2);
                break;
            case "cylinder":
                $volume = pi() * pow($width, 2) * $height;
                echo "원통 체적 = π * $width<sup>2</sup> * $height = " . round($volume, 2);
                break;
            case "sphere":
                $volume = (4 / 3) * pi() * pow($width, 3);
                echo "구 체적 = 4/3 * π * $width<sup>3</sup> = " . round($volume, 2);
                break;
            default:
                echo "올바른 도형을 선택하세요.";
        }
    }
    ?>
</body>
</html>
