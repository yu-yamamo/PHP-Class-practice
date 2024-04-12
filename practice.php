<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題</title>
</head>
<body>
  <p>今日の桃販売価格！！</p>
  <?php
    //桃の変数数定義
    $peach_price = array();

    //桃の15個の価格を決定し配列に入れる
    for($counter = 0; $counter < 15; $counter++){
      $peach_price[] = rand(200,300) ;
    }

    //最高値、最安値、平均値の抽出・出力
    $peach_max = max($peach_price);
    $peach_min = min($peach_price);
    $peach_averege = round(array_sum($peach_price) / count($peach_price),0);
    
    echo "桃の最高値は".$peach_max."です。";
    echo "<br>";
    echo "桃の最安値は".$peach_min."です。";
    echo "<br>";
    echo "桃の平均値は".$peach_averege."です。";
    echo "<br>";
    echo "<br>";
    
  ?>

  <p>本日の苺の販売価格！！</p>
  <?php
    //イチゴの変数数定義
    $strawberry_price = array();

    //イチゴの15個の価格を決定し配列に入れる
    for($counter = 0; $counter < 15; $counter++){
      $strawberry_price[] = rand(400,500) ;
    }

    //最高値、最安値、平均値の抽出・出力
    $strawberry_max = max($strawberry_price);
    $strawberry_min = min($strawberry_price);
    $strawberry_averege = round(array_sum($strawberry_price) / count($strawberry_price),0);
    
    echo "苺の最高値は".$strawberry_max."です。";
    echo "<br>";
    echo "苺の最安値は".$strawberry_min."です。";
    echo "<br>";
    echo "苺の平均値は".$strawberry_averege."です。";
    echo "<br>";
    
  ?>

</body>
</html>
