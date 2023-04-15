<?php
  if(isset($_POST["password1"])){
    $pass = $_POST["password1"];
    if($pass == "首藤一" || $pass == "しゅとうはじめ"){
      setcookie('level','1',0,'/');
      header("Location: ./first/blog0801.php");
      exit();
    }else{
      global $alert;
      $alert = "答えは{$pass}ではありません。";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/first.css">
    <link rel="shortcut icon" href="images/favicon/favicon.ico">
    <title>ホーム</title>
</head>
<body>
    <div class="content">
        <h1>稲岸の部屋へようこそ</h1>
        
        <!-- <p><span>あなたは</span><iframe src="count_img/count.php" height="70" width="140" frameborder="0" scrolling="no"></iframe>人目の訪問者です</p> -->
        <!-- FC2 Counter  Starts here -->
        あなたは<script language="javascript" type="text/javascript" src="//counter1.fc2.com/counter.php?id=38833796&main=1"></script>
        <noscript><img src="//counter1.fc2.com/counter_img.php?id=38833796&main=1" /></noscript>人目の訪問者です

        <div class="news">
            <h2>お知らせ</h2>
            <p class="bold">サイトを大幅にリニューアルしました！</p>
            <p>今までのコンテンツは一度撤去しました（中学生の頃のブログは見るに堪えないものだったので笑）</p>
            <p>その代わり、最近のブログを載せています！</p>
            <p>ブログにアクセスしたい方はまずこちらの10問の問題に答えてください！</p>
            <p>このページを読んでいる皆ならすごく簡単なはずだよ！</p>
            
            <p><span class="bold">俺たちの塾の通っていた塾を経営していた先生（？）の名前は？</span><br>
            い：まつばらきみのぶ　な：まつばらこうせい　た：まつばらきみお</p>

            <p><span class="bold">５人の塾生の中で一番成績が良かったのは？</span><br>
            ん：久代奏太　い：稲岸友治　く：小山竜星</p>

            <p><span class="bold">中学を卒業する時、塾生の皆で埋めたものは？</span><br>
            る：爆弾　に：タイムカプセル　と：制服</p>

            <p><span class="bold">そのタイムカプセルはどこに埋めた？</span><br>
            か：市立第一中学　き：稲岸の家　ん：はくれいの森</p>

            <p><span class="bold">そのタイムカプセルに入っていないものは？</span><br>
            の：卒業アルバム　を：松原先生から皆への手紙　は：久代の未来の自分への手紙</p>

            <p><span class="bold">このブログを俺が開設したのはいつ？</span><br>
            き：大学の時　し：高校の時　な：中学の時</p>

            <p><span class="bold">このブログの開設を手伝ってくれたのは誰？</span><br>
            じ：江上幸彦　ま：久代奏太　か：山下隆彦</p>

            <p><span class="bold">俺たちのクラスで一番頭が悪かったやつは？</span><br>
            く：筧俊二　い：小山竜星　え：奥田陽太郎</p>

            <p><span class="bold">江上の隣に座っていた女子は？</span><br>
            よ：大石あかり　は：辺見紀子　な：平塚みのり</p>

            <p><span class="bold">俺たちが中学生の時、理科室から持ち出されて騒ぎになったのは？</span><br>
            ？：塩酸　！：硫黄　に：硫酸</p>

            <form method="post">
              <span class="bold">10個の問題から導かれる答えは？</span><br>
              <input type="text" name="password1">
              <input type="submit" value="入力">
              <div class="wrong">
                <?php
                  if(isset($alert)){
                    echo $alert;
                  }
                ?>
              </div>
        </form>

            <p class="date">2022-07-29</p>
        </div>
        <!-- FC2 Counter  Ends here -->
    </div>
</body>
</html>