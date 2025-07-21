<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
  <link rel="stylesheet" href="styles/index.css">
</head>

<body>
  <div class="flex">
    <div>

      <h1>テキスト</h1>
      <p>この文章はHTMLで出力しています。</p>
      <p>
        <?php
        echo 'この文章はPHPで出力しています。'
        ?>
      </p>
    </div>
    <div>
      <h4>型</h4>
      <p>
        <?php
        echo 'こんにちは';
        echo '<br> '; 
        echo '今日はいい天気ですね';
        echo '<br> '; 
        echo 100;
        echo '<br> '; 
        echo 0.1;
        echo '<br> '; 
        echo TRUE;
        echo '<br> '; 
        echo FALSE;
        ?>
      </p>
    </div>
    <div>
      <h4>四則演算</h4>
      <p>
        <?php
        echo 45 + 18;
        echo '<br> '; 
        echo 30 - 12;
        echo '<br> ';
        echo 15 * 6;
        echo '<br> ';
        echo 30 / 3;
        echo '<br> ';
        echo 45 % 8;
        ?>
      </p>
      <p>
        <?php
        echo 4.5 + 1.8;
        echo '<br> ';
        echo 3.0 - 1.2;
        echo '<br> ';
        echo 1.5 * .6;
        echo '<br> ';
        echo 3 / 0.3;
        echo '<br> ';
        echo 100 - 99.9;
        ?>
      </p>
    </div>
    <div>
      <h4>文字列連結</h4>
      <p>
        <?php
        echo '45' . '18';
        echo '<br> ';
        echo '今日の天気は' . '晴れ';
        echo '<br> ';
        echo '今日の天気は' . '曇り';
        ?>
      </p>
    </div>
  </div>
</body>

</html>