<?php
//---- 오늘 날짜
$thisyear = date('Y');
$thismonth = date('n');
$today = date('j');

//---- GET 값이 없으면 오늘 기준
$year = isset($_GET['year']) ? intval($_GET['year']) : $thisyear;
$month = isset($_GET['month']) ? intval($_GET['month']) : $thismonth;

// 이전/다음 달 계산
$prev_month = $month - 1;
$next_month = $month + 1;
$prev_year = $next_year = $year;

if ($month == 1) {
    $prev_month = 12;
    $prev_year = $year - 1;
} else if ($month == 12) {
    $next_month = 1;
    $next_year = $year + 1;
}

$preyear = $year - 1;
$nextyear = $year + 1;

// 날짜 관련 계산
$max_day = date('t', mktime(0, 0, 0, $month, 1, $year));
$start_week = date("w", mktime(0, 0, 0, $month, 1, $year));
$total_week = ceil(($max_day + $start_week) / 7);
$last_week = date('w', mktime(0, 0, 0, $month, $max_day, $year));
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>PHP 달력</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <style>
    .holy { color: #FF6C21; font-weight: bold; }
    .blue { color: #0000FF; }
    .black { color: #000000; }
    .today { background-color: #f0f0f0; border-radius: 50%; padding: 5px; display: inline-block; }
  </style>
</head>
<body>
<div class="container">
  <table class="table table-bordered text-center">
    <tr>
      <td><a href="?year=<?= $preyear ?>&month=<?= $month ?>">◀◀</a></td>
      <td><a href="?year=<?= $prev_year ?>&month=<?= $prev_month ?>">◀</a></td>
      <td colspan="3">
        <a href="?year=<?= $thisyear ?>&month=<?= $thismonth ?>">
          <?= $year ?>년 <?= $month ?>월
        </a>
      </td>
      <td><a href="?year=<?= $next_year ?>&month=<?= $next_month ?>">▶</a></td>
      <td><a href="?year=<?= $nextyear ?>&month=<?= $month ?>">▶▶</a></td>
    </tr>
    <tr class="info">
      <th>일</th><th>월</th><th>화</th><th>수</th><th>목</th><th>금</th><th>토</th>
    </tr>

<?php
$day = 1;
for ($i = 1; $i <= $total_week; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 7; $j++) {
        echo "<td height='50' valign='top'>";
        if (!(($i == 1 && $j < $start_week) || ($i == $total_week && $j > $last_week))) {
            $class = ($j == 0) ? 'holy' : (($j == 6) ? 'blue' : 'black');
            $highlight = ($year == $thisyear && $month == $thismonth && $day == $today) ? 'today' : '';
            echo "<span class='$class $highlight'>{$day}</span>";
            $day++;
        }
        echo "</td>";
    }
    echo "</tr>";
}
?>
  </table>
</div>
</body>
</html>
