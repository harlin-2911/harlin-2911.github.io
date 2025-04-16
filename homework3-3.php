<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Homework 3-3: 피보나치 수열</title>
</head>
<body>
    <h2>Homework 3-3: Fibonacci</h2>
    <form method="get">
        <label>정수 n 입력 (2~100):</label>
        <input type="number" name="n" min="2" max="100" required>
        <input type="submit" value="실행">
    </form>

    <?php
    if (isset($_GET['n'])) {
        $n = intval($_GET['n']);
        if ($n >= 2 && $n <= 100) {
            $fib = [1, 1];
            echo "<h3>피보나치 수열 및 비례</h3>";
            echo "1 = 1<br>";
            echo "2 = 1<br>";

            for ($i = 2; $i < $n; $i++) {
                $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
                $ratio = round($fib[$i] / $fib[$i - 1], 6);
                echo ($i + 1) . " = {$fib[$i]} / {$fib[$i - 1]} = {$ratio}<br>";
            }
        } else {
            echo "2 이상 100 이하의 숫자를 입력하세요.";
        }
    }
    ?>
</body>
</html>
