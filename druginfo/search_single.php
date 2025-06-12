<?php
$drug = urlencode($_GET['drug']);
$apikey = "8Gww6YOLEiP4JIloDr3As5hXyM4IpSlQGEXNVXY4rAgBburHM111f754hrgFgNcz9hbkdVlDRtoZ%2F0NMRRRfyg%3D%3D";
$url = "https://apis.data.go.kr/1471000/DrbEasyDrugInfoService/getDrbEasyDrugList?serviceKey=$apikey&itemName=$drug&type=json";

$response = file_get_contents($url);
$data = json_decode($response, true);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>약물 정보</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=SUIT&display=swap');

    body {
      font-family: 'SUIT', sans-serif;
      background: linear-gradient(to bottom, #e0f7ff, #f5fcff);
      padding: 40px;
      text-align: center;
    }

    h2 {
      color: #2c5777;
      margin-bottom: 40px;
    }

    .card {
      background: #ffffff;
      border-radius: 14px;
      padding: 25px 30px;
      margin: 20px auto;
      width: 80%;
      max-width: 700px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      text-align: left;
    }

    .card h3 {
      color: #247ba0;
      margin-bottom: 15px;
    }

    .card p {
      margin: 8px 0;
      line-height: 1.6;
      color: #333;
    }

    a {
      display: inline-block;
      margin-top: 30px;
      padding: 10px 20px;
      background-color: #a4ddf6;
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      transition: background 0.3s;
    }

    a:hover {
      background-color: #89cae5;
    }
  </style>
</head>
<body>
  <h2>🔍 약물 검색 결과</h2>

  <?php
  if (isset($data['body']['items']) && count($data['body']['items']) > 0) {
    foreach ($data['body']['items'] as $item) {
      echo "<div class='card'>";
      echo "<h3>{$item['itemName']}</h3>";
      echo "<p><strong>📌 효능:</strong> {$item['efcyQesitm']}</p>";
      echo "<p><strong>💊 복용법:</strong> {$item['useMethodQesitm']}</p>";
      echo "<p><strong>⚠️ 주의사항:</strong> {$item['atpnQesitm']}</p>";
      echo "</div>";
    }
  } else {
    echo "<p>해당 약물을 찾을 수 없습니다.</p>";
  }
  ?>

  <a href="index.html">← 검색 화면으로 돌아가기</a>
</body>
</ht