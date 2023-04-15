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
    <div class="container">
      <div class="title-wrapper">
        <span class="room">3年4組</span>
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
              <li>8/14 成長</li>
            </ol>
          </nav>
            <h2 class="blogtitle">成長</h2>
          <div class="main">
            <p>サイトの下部に記載されている俺への連絡先、皆はもう見た？</p>
            <p>これ、俺が中学の時に作ったメールアドレスなんだけど覚えてる？</p>
            <p>皆覚えてるか分かんないけど、昔中山しおりっていう女子と付き合ってたんだよね。当時はすごい入れ込んでてさ、サイトで彼女に向けた謎のポエムを公開したり、メールアドレスをこんなにしたりして、本当に周りが見えなくなってたんだけど</p>
            <p>高校生になって別の高校に行くことになって彼女と別れてから、すごい今までのことが恥ずかしくなってきて笑</p>

            <p>当時はすべて抹消しようとしてたんだけど、最近になって逆に面白くなってきたんだよな<br>
          だから、管理人へのメールもこの痛メールを使うことにしたんだ</p>
          <p>不思議に思うのは、どうして今になって、恥ずかしかったはずの自分を認められるようになったんだろうってことだ<br>
          高校の頃は、中学時代を少し思い出すだけですごい恥ずかしい気分になったのに笑</p>

          <p>きっと、自分への万能感みたいなものが薄れて、恥ずかしい自分とかを認められるようになったってことなんじゃないかなと思ってる
            <br>これも一種の成長だよな？</p>
            <!-- <p><span class="blue">※このブログの文章を誰かが一人でも読んだらいったん議論を止めてStoryFile-Bを開いてください。</span></p> -->
            <div class="kyounazo">
              <h2 class="nazotitle2">今日の一枚</h2>
              <img src="../images/nazo14.png" class="nazo">
            </div>
          </div>
          <div class="date">2022/08/14</div>
          <?php include('../common/comment.php') ?>
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