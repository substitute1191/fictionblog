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
    <link rel="stylesheet" href="../css/0805.css">
    <link rel="shortcut icon" href="../images/favicon/favicon.ico">
    <title>稲岸の部屋</title>
  </head>
  <body>
    <div class="container">
      <div class="title-wrapper">
      <span class="room">1年5組</span>
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
              <li>8/5 カラオケ</li>
            </ol>
          </nav>
          <h2 class="blogtitle">カラオケ</h2>
          <div class="main">
            <p>一回皆でカラオケに行ったことがあるの覚えてるか？</p>

            <p>いつだったかなあ、もうどういうきっかけで行ったのかも思い出せないんだけどさ。</p>

            <p>いつもはそういうのに来ない江上を無理やり連れてきたんだよね。好きな曲歌っていいからっつってさ。</p>

            <p>そしたら、急に江上が「君が代」を3回くらい入れだして、、、
              何でって聞いたら「<span class="tar1">自</span>分はこの曲以外知らない」って言ったんだ</p>

              <p>いや、今時すごい愛国者でも君が代しか歌わない奴なんていないだろってなって滅茶苦茶面白かったのを覚えてるんだよね</p>

              <p>他に知ってる曲思い出せるだろって聞いたけど、さんざん考えた後に「犬のおまわりさん」も知ってるかもって言われて、、、
                わざとでも天然でもどっちにしても、江上は本物の天才なんだってその日俺は確信したんだよね。
              </p>
              <p>あれからもう５年くらい経ったから、流石の江上もそろそろ他に歌える曲を<span class="tar1">習</span>得したんじゃないか？？</p>

            <div class="kyounazo">
              <h2 class="nazotitle1">今日の一枚</h2>
              <img src="../images/nazo5.png" class="nazo">
            </div>
          </div>
          <div class="date">2022/08/05</div>
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