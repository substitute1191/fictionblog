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
    <link rel="stylesheet" href="../css/0809.css">
    <link rel="stylesheet" href="css/0803.css">
    <title>稲岸の部屋</title>
  </head>
  <body>
    <div class="container">
      <div class="title-wrapper">
      <span class="room">2年3組</span>
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
              <li>8/9 ルール</li>
            </ol>
          </nav>
          <h2 class="blogtitle">ルール</h2>
          <div class="main">
            <p>中学校の頃は変な規則がたくさんあって窮屈だったよなあ。
              髪型はツーブロックはダメだの、学校にトランプは持ち込んじゃいけないだのさあ。
              一回誰かが学校でお菓子を配ったってだけで、学年集会が開かれて全員が怒られたこととかあったもんな？</p>
            <p>中学にはいい思い出がいっぱいあるけど、<span class="wai">せ</span>っかく大学生になって自由な今、あんな不自由な場所に戻りたいかって言われると微妙だな笑
              今は本当に気楽でいい。自由すぎて、自分でちゃんとやらないとどんどん置いて行かれるのはたいへ<span class="wai">ん</span>だけどな。</p>
            <p>でも、不自由だった中学生のころの方がどうでもいいことを楽しいと思えたんだよな。</p>
            <p>机から中学のころ使ってたノートが出てきてな、、、
              そこに紙とペンだけで色々遊ぼうとしていた努力の跡が見れたんだよ
            </p>
            <img class="sugoroku" src="../images/sugoroku.jpg">
            <p class="caption">これはすごろくで遊んでいたらしき形跡だ。
              正直、色んな所から恥ずかしさがにじみ出ているけど目をつむってほしい笑
            でも昔はこういうのが面白かったんだな</p>
            <img class="doors" src="../images/20doors.jpg">
            <p class="caption">これは20の扉っていう物当てゲームだ</p>
            <img class="parapara" src="../images/parapara.jpg">
            <p class="caption">数ページで挫折したパラパラ漫画<br>
          一体何を書きたかったんだか 見てるとなんだか<span class="wai">せ</span>つなくなるな、、、</p>
            <p>今から見返しても何も面白いとは思えないけど、、、<br>
              こんなことを楽しめる中学時代の方が豊かな心を持っていたんじゃな<span class="wai">い</span>かと思うこともあるんだよな<br>
              いや、さすがに感傷に浸りすぎかな？
            </p>
            <div class="kyounazo">
              <h2 class="nazotitle1">今日の一枚</h2>
              <img src="../images/nazo9.png" class="nazo nazo9">
            </div>
          </div>
          <div class="date">2022/08/09</div>
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