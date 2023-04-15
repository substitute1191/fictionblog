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
    <link rel="shortcut icon" href="../images/favicon/favicon-0808.ico">
    <link rel="stylesheet" href="css/0803.css">
    <title>稲岸の部屋</title>
  </head>
  <body>
    <div class="container">
      <div class="title-wrapper">
      <span class="room">2年2組</span>
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
              <li>8/8 時間割</li>
            </ol>
          </nav>
          <h2 class="blogtitle">時間割</h2>
          <div class="main">
            <p>今日も部屋を整理していたら中学3年の頃の時間割が出てきた。３年の頃の時間割って覚えてるか？
              1年間同じ時間割で、６月ころにはもう諳んじられるくらいに染み付いてたはずだったんだけど。。。
              卒業したら全然忘れちまうもんだな笑</p>

            <p>でも、好きな授業のことは何となく覚えてるんだよな。俺は国語と学活と音楽と美術が好きだった。</p>
            <p>まず国語は基本的に日本語の授業だから特に勉強しなくても内容を理解しやすいから好きだった。
              それに国語の担当だった藤村先生の話が面白かったんだよね。色々有名な文学作品を面白く紹介してくれたよな。

              国語は5，6限には無かったけど全曜日にあったからね。国語まで嫌いだったら毎日つらかったと思う。</p>
            <p>次は学活。学活って正直授業と呼んでいいものかどうかよく分からんけど笑
              楽だったから学活が嫌いだった奴なんて多分いないよな？学活は火曜の3限にあったんだ。
            </p>
            <p>音楽は歌ったり楽器を演奏したりするのが楽しいから好きだったなー。音楽は水曜の2限。</p>
            <p>美術も好きで金曜の3限にあった。</p>

            <p>他の授業は嫌いだった。皆は何の授業が好きだった？</p>


            <div class="kyounazo">
              <h2 class="nazotitle1">今日の一枚</h2>
              <img src="../images/nazo8.png" class="nazo">
            </div>
          </div>
          <div class="date">2022/08/08</div>
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