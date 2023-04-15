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
    <title>稲岸の部屋</title>
  </head>
  <body>
    <div class="container">
      <div class="title-wrapper">
      <span class="room">1年2組</span>
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
              <li>8/2 帰省</li>
            </ol>
          </nav>
          <h2 class="blogtitle">帰省</h2>
          <div class="main">
            <p>大学に入ってから、大学の近くに移り住んで一人暮らしをしていたけど、８月から夏季休業に入ったんで実家に戻ってきたんだよね。</p>

            <p>高校の時は早く家から出たいって思ってたんだけど、一人暮らしを経験してからだと実家のありがたみも分かるもんだな。料理は自分で作らなくても出てくるし、風呂掃除とかもしてもらえるからね。いかに中学や高校でありがたい環境に居たのかが良くわかる。</p>

            <p>ただまあ実家に戻っても、やることがないから暇なんだよな。せっかくの時間を無駄にしたくないから、このタイムカプセル探しゲームをやろうって思いついたんだよ。</p>

            <p>色々準備をするのに地元にいた方が都合がいいし、ブログを作るのってそれなりに手間がかかるからな。このゲームをブログ上でやることにしたのは、オンラインの方が皆を集めやすいと思ったからだ。</p>

            <p>とりあえず毎日1ページずつ、21時に更新していくことにする。ミッションのページだけはそのカテゴリの最初の日付の時に一緒に作っているけど。
            こういうとき大事なのは、いつにやるか時間を決めて継続的に取り組むことだと江上から教わった。
            まあそもそも、謎を作るのが俺には難しいから1日何ページも更新するのは大変っていう理由もあるんだけどな笑</p>


            <div class="kyounazo">
              <h2 class="nazotitle1">今日の一枚</h2>
              <img src="../images/nazo2.png" class="nazo">
            </div>
          </div>
          <div class="date">2022/08/02</div>
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