<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 〜 function 〜</title>
  <link rel="stylesheet" href="styles/index.css">
</head>

<body>
  <header>
    <a href="index.php">
      TOP
    </a>
  </header>
  <div>
    <div>
      <h4 class="h4-title">挨拶</h4>
      <?PHP
      echo 'おはようございます！<br> ';
      echo '昨日はよく眠れましたか？<br> ';
      echo '今日も1日頑張りましょう。<br> ';
      ?>
    </div>

    <div>
      <!-- 同じコードを何度も書き、手間、無駄がある -->
      <h4 class="h4-title">同じ処理を繰り返す</h4>
      <?PHP
      echo 'おはようございます！<br> ';
      echo '昨日はよく眠れましたか？<br> ';
      echo '今日も1日頑張りましょう。<br> ';
      echo '<br> ';
      echo 'おはようございます！<br> ';
      echo '昨日はよく眠れましたか？<br> ';
      echo '今日も1日頑張りましょう。<br> ';
      ?>
    </div>
    <div>
      <h4 class="h4-title">関数を作成する</h4>
      <?PHP

      echo '朝のあいさつ<br><br>';
      function say_good_morning()
      {
        echo 'おはようございます！<br> ';
        echo '昨日はよく眠れましたか？<br> ';
        echo '今日も1日頑張りましょう。<br> ';
      }
      // say_good_morning();

      echo '<br><br>';

      echo '夜のあいさつ<br><br>';
      function say_good_evening()
      {
        echo 'こんばんは！<br>';
        echo '今日も一日お疲れさまでした。<br>';
      }

      // say_good_evening();
      ?>
    </div>

    <div>
      <h4 class="h4-title">関数の記述方法</h4>
      <p class="text-purple">
        <span class="text-purple">function</span>
        <span class="text-yellow">関数名(引数)</span>
        <span class="text-black">&lbrace;</span>
        <br>
        <span class="text-green">&emsp;一連の処理</span>
        <br>
        <span class="text-black">&rbrace;</span>
      </p>
    </div>

    <div>
      <h4 class="h4-title">関数の使用例</h4>
      <p>
        <?php
        echo '時間によって使う関数を変える。<br><br>';

        function say_good_afternoon()
        {
          echo 'こんにちは<br>';
          echo '今日も暑いですねっ！<br>';
        }

        $time = '9:00';
        // $time = '12:00';
        // $time = '18:00';
        if ($time == '9:00') {
          // 朝の挨拶
          say_good_morning();
        } else if ($time == '18:00') {
          // 夜の挨拶
          say_good_evening();
        } else {
          // 日中の挨拶
          say_good_afternoon();
        }
        ?>
      </p>
    </div>

  </div>
</body>

</html>