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
    <link rel="shortcut icon" href="../images/favicon/favicon.ico">
    <link rel="stylesheet" href="css/0803.css">
    <title>稲岸の部屋</title>
  </head>
  <body>
    <div class="container">
      <div class="title-wrapper">
      <span class="room">2年1組</span>
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
              <li>8/7 松原先生</li>
            </ol>
          </nav>
          <h2 class="blogtitle">松原先生</h2>
          <div class="main">
            <p>今日、実家の近所にある川の近くを通ったんだ。それでその川を見て、昔ここに松原先生に連れてこられたことを思い出した。
              松原先生って本当変わった人だったよなー。塾をやってるくせに全然勉強教えてくれないんだもん笑</p>

            <p>何でも自分で経験しろと言って、いつも突然俺たちを町に連れ出していた。</p>
            <p>俺たちが川に連れ出された時もそうだった......急に川に連れてきたかと思えば、この川で一番大きな生き物を捕まえてきたやつに小遣いをやるって言い出したんだよね</p>

            <p>めっちゃ張り切って探したんだけど、俺はムカデみたいな虫しか見つけられなくて、、、
              気持ち悪いから触りたくなかったのに、一番大きい虫だったから頑張ってずっとキープしてたよ笑
            　何か生き物を探すってことを事前に教えてくれれば、籠とか持ってきたのに先生が教えてくれないからさ</p>

            <p>まあ結局久代が持ってきたカニみたいなやつに負けたけどな。
              ムカデの触り損でがっかりしたよ。</p>

            <p>皆は先生が連れて行ったところで印象に残っている場所はあるか？</p>
            <div class="kyounazo">
              <h2 class="nazotitle1">今日の一枚</h2>
              <img src="../images/nazo7.png" class="nazo">
            </div>
          </div>
          <div class="date">2022/08/07</div>
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