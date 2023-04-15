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
    <link rel="stylesheet" href="../css/0803.css">
    <link rel="shortcut icon" href="../images/favicon/favicon.ico">
    <title>稲岸の部屋</title>
  </head>
  <body>
    <div class="container">
      <div class="title-wrapper">
      <span class="room">1年3組</span>
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
              <li>8/3 小テスト</li>
            </ol>
          </nav>
          <h2 class="blogtitle">小テスト</h2>
          <div class="main">
          <p>3年の頃は学年全体で週に何回か小テストを解かされてたよなー。</p>
            
            <p>解くたびに点数が良くないと先生に怒られたもんだ。</p>

            <p>３年３組だけは首藤先生が独自に川ごとの得点対抗戦を開いてて、川ごとに得点の合計を競ってたんだよな。<br>
              あれのせいで低い点を取るのがなんだか申し訳なかったから割と効果があったのかも。
            </p>

            <p>懐かしいことに、あの頃の小テストが何枚か部屋を掃除してたら出てきたんだよね。</p>

            <img src="../images/漢字小テスト3.png" class="KanjiTest">
            <p class="caption">これは漢字のテストだな。いくつか間違っている漢字もある。皆は解けるか？</p>
            
            <img src="../images/英語小テスト4.JPG" class="EnglishTest">

            <p class="caption">これは英語の小テスト......中学生には難しい単語が混じってないか？<br>
          下に書いてあるウサギは隣の採点してくれたやつが描いてくれたものだ</p>
            <div class="kyounazo">
              <h2 class="nazotitle1">今日の一枚</h2>
              <img src="../images/nazo3.png" class="nazo">
            </div>
          </div>
          <div class="date">2022/08/03</div>
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