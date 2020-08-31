<?php
/**
(1) 勝敗（勝ち・負け・あいこ）は$resultに代入してください
(2) プレイヤーの手は$playerHandに代入してください
(3) コンピューターの手は$pcHandに代入してください
**/

// ここから処理を記述
$hands = ["グー", "チョキ", "パー"]; // じゃんけんの手を配列に代入する

// プレイヤーの手がPOSTされたら
if (isset($_POST['playerHand'])) {
  // プレイヤーの手を代入
  $playerHand = $_POST["playerHand"];

  // PCの手をランダムで選択
  $key = array_rand($hands);
  $pcHand = $hands[$key];

  // 勝敗の結果を表示
  if ($playerHand == $pcHand) {
    $result = "あいこ";
  } elseif ($playerHand == "グー" && $pcHand == "チョキ") {
    $result = "勝ち";
  } elseif ($playerHand == "チョキ" && $pcHand == "パー") {
    $result = "勝ち";
  } elseif ($playerHand == "パー" && $pcHand == "グー") {
    $result = "勝ち";
  } else {
    $result = "負け";
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf8">
  <title>じゃんけん</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="wrapper">
  <header>
    <div class="header-logo">PHP学習</div>
  </header>
  <main>
    <h1>結果は・・・</h1>
    <div class="result-box">
      <p class="result-word"><?php echo $result ?>!</p>

      あなた:<?php echo $playerHand ?><br>
      コンピューター:<?php echo $pcHand ?><br>

      <p><a class="red" href="index.php">>>もう一回戦する</a></p>
    </div>
  </main>
</div>
</body>
</html>