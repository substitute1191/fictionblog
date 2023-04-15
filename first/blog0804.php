<?php
  if(!isset($_COOKIE['level'])){
    setcookie('level','1',0,'/');
  }
  setcookie('active','1',0,'/');
?>

<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/accordion.css">
    <link rel="stylesheet" href="css/0803.css">
    <link rel="shortcut icon" href="../images/favicon/favicon.ico">
    <title>稲岸の部屋</title>
  </head>
  <body>
    <div class="container">
      <div class="title-wrapper">
      <span class="room">1年4組</span>
        <div class="title">
        </div>
      </div>
      <div class="wrapper">
      <?php include('../common/sidebarall.php') ?>
        <div class="content">
          <nav>
            <ol class="breadcrumb">
              <li><a href="/">ホーム</a></li>
              <li><a href="keyword.php">ミッション１</a></li>
              <li>8/4 タイムカプセル</li>
            </ol>
          </nav>
          <h2 class="blogtitle">タイムカプセル</h2>
          <div class="main">
            <p>実は今日、俺ははくれいの森に行ってタイムカプセルを掘り出してきたんだ。位置は覚えてるんだけど、中々掘り出すのに苦労したよ。</p>

            <p>江上に頼んで作ってもらった桜の形のバッジのセンサーを当ててみたら、ちゃんと開いたよ。俺のだけアクシデントで割れてるから機能しないんじゃないかってちょっと心配だったけど杞憂だった。</p>

            <p>このタイムカプセルの箱は江上に作ってもらったんだよね。
              バッジをかざしたら空くようにしたいとか、中は防湿にしてほしいとか色んな要求をしたんだけど
              江上は俺の言ったとおりの箱を作り上げてくれた。感謝しかないよ<span class="blue">(C)</span></p>

            <p>残念だけどこれからこのタイムカプセルは全く別のところに隠させてもらう。</p>

            <p>これを掘り出してはい終わりじゃつまんないからな。もっと面白いイベントにしたいんだ。</p>

            <p>俺が新たにタイムカプセルを隠した場所を知りたければこのブログを先まで読み進めてほしい。
              知りたくなくても読み進めてほしい笑
            </p>

            <div class="kyounazo">
              <h2 class="nazotitle1">今日の一枚</h2>
              <img src="../images/nazo4.png" class="nazo">
            </div>
          </div>
          <div class="date">2022/08/04</div>
          <?php include('../common/comment.php') ?>
        </div>  
      </div>
    </div>
    <?php include('../common/footer.php') ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="../javascript/accordion.js"></script>
  </body>
</html>