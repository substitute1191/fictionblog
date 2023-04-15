<?php
  if(!isset($_COOKIE['level'])){
    setcookie('level','2',0,'/');
  }
  setcookie('active','2',0,'/');

  
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
    <title>稲岸の部屋</title>
  </head>
  <body>
    <div class="container sakura5">
      <div class="title-wrapper">
        <span class="room">3年2組</span>
        <div class="title">
        </div>
      </div>
      <div class="wrapper">
        <?php include("../common/sidebarall.php") ?>
        <div class="content">
          <nav>
            <ol class="breadcrumb">
              <li><a href="/">ホーム</a></li>
              <li><a href="keyword2.php">ミッション２</a></li>
              <li>8/12 ペットボトルロケット</li>
            </ol>
          </nav>
          <h2 class="blogtitle">ペットボトルロケット</h2>
          <div class="main">
            <p>今日は久々に、塾の近くにあった道中公園に寄ってみた。</p>
            <p>昔はよく先生にこの公園に連れてこられたもんだよな。</p>

            <p>鬼ごっことか色んな遊びをしたと思うけど、一番よく覚えているのはペットボトルロケットを皆で飛ばしたことだ。あの時は誰がロケットを一番遠くまで飛ばせるかで競ったんだよ。</p>

            <p>使うロケットは一緒で、空気を入れる回数、水の量、発射台の射出角度は変えられる。</p>
            <p>やる前に色々調べてもいいって言われてたから、親からパソコンを借りて「ペットボトルロケット　遠くへ飛ばす方法」で調べてた。</p>

            <p>誰かがやってた自由研究みたいなのが出てきたから、そこに書いてあった遠くに飛ばせた条件をそっくり真似したんだけどさ、なんか、、、すごく微妙な飛距離だったんだよな笑</p>
            <p>一番遠くに飛ばしてたのは久代だった。なんで俺のはダメだったのかって聞いたら、「お前は水を入れすぎだ」って言われてさ。</p>
            
            <p>よく考えたら、小学生の時の自由研究とかさっさと終わらせたいから途中から捏造の結果を書いてた気がするんだよな笑</p>
            <p>その自由研究も大して回数重ねずに結果を書いてたんだろうな。やっぱああいうのはあてにしちゃダメだなと思ったよ。</p>

            <div class="kyounazo">
              <h2 class="nazotitle2">今日の一枚</h2>
              <img src="../images/nazo12.png" class="nazo">
            </div>
          </div>
          <div class="date">2022/08/12</div>
          <?php include('../common/comment0812.php') ?>
        </div>  
      </div>
    </div>
    <?php include("../common/footer.php") ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="../javascript/accordion.js"></script>
  </body>
</html>