<?php
  if(isset($_POST["password3"])){
    $pass = $_POST["password3"];
    if($pass == "授業参観n" || $pass == "授業参観ｎ"){
      setcookie('level','4',0,'/');
      header("Location: ../secret/blog0818.php");
      exit();
    }else if($pass == "授業参観"){
      $alert = "パスワードは{$pass}ではありません。<p class='blue'>(StoryFile-4を開いてください)</p>";
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
        <span class="room">2年4組</span>
        <div class="title">
        </div>
      </div>
      <div class="wrapper">
        <?php include("../common/sidebarall.php") ?>
        <div class="content">
          <nav>
            <ol class="breadcrumb">
              <li><a href="/">ホーム</a></li>
              <li>ミッション３</li>
            </ol>
          </nav>
          <h2 class="blogtitle">三つ目のミッション</h2>
          <div class="main">
            <p>そう、正解は二次関数だ！</p>
            <p>問題をすべて解いてキーワードを埋めると、「紛失した理科室の鍵が発見された場所は？」という問題が出てくるはずだ。<br>
              よく思い出してもらえば、それが3年1組の黒板の裏に隠されていたということが分かるはず。そこで3年1組となっている8/10のページの黒板を動かすと、キーワードが分かるということだな。
            </p>
            <p>そろそろ、謎解きにも慣れてきたころかな？</p>
            <p>謎解きはまだまだ続くけど、確実にゴールに近づいているぞ！</p>

            <p class="">左のサイドバーに、ブログ記事が新たに３つ追加されている。</p>
            
            <p class="hintp">３つのブログ記事についている謎を解いて、次のサイトに進むための方法を見つけてくれ。<span class="hint">ヒント２：その場所は江上の家から視認できる</span></p>
            <p><span class="blue">ミッション３の謎を確認したら、StoryFile-3を開いてください。</span></p>
            <form method="post">
              パスワード：<input type="text" name="password3">
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
              <img src="../images/mission3-1.png" class="nazo">
              <img src="../images/mission3-2.png" class="nazo">
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