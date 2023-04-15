<?php
  if(!isset($_COOKIE['level'])){
    setcookie('level','2',0,'/');
  }
  setcookie('active','2',0,'/');

  if(isset($_POST["password2"])){
    $pass = $_POST["password2"];
    if($pass == "二次関数"){
      setcookie('level','3',0,'/');
      header("Location: ../nnext/keyword3.php");
      exit();
    }else{
      global $alert;
      $alert = "パスワードは{$pass}ではありません。";
    }
  }
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
        <span class="room">3年5組</span>
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
            </ol>
          </nav>
          <h2 class="blogtitle">二つ目のミッション</h2>
          <div class="main">
            <p>そう、正解は自習だ！</p>
            <p>8/5のページで背景の星空が隠れるくらいにウィンドウを縮めると、「自習」って文字だけが赤くなるから後はそれを入力すればいいんだ。</p>
            <p>どうだろう？難しかったかな？謎解きゲームなんて作るのは初めてだから、どれくらいの難易度にすればいいかよくわからないんだ</p>

            <p class="hintp">でもまあ、謎はまだまだ続くから安心（？）してくれ！
            <span class="hint">ヒント１：そこは竹口の家から視認できる（地図上で視認できる範囲は付属の赤い円で表す。竹口の家を円の中心に置いたとき、その赤い円が竹口の家から視認できる範囲を表してくれる）</span></p>
            <p>左のサイドバーに、ブログ記事が新たに5つ追加されているのが分かるよな？</p>

            <p>その5つの記事にも、今までと同じように謎が1つついている。合計5つの謎の答えを導いたら、それを使って下の画像の指示文を埋めてくれ。</p>
            <form action="keyword2.php" method="post">
              パスワード：<input type="text" name="password2">
              <input type="submit" value="入力">
              <div class="wrong">
                <?php
                  if(isset($alert)){
                    echo $alert;
                  }
                ?>
              </div>
            </form>
            <div class="kyounazo">
              <img src="../images/mission2.jpg" class="nazo">
            </div>
            <?php include('../common/comment.php') ?>
          </div>
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