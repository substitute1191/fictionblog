<?php
  if(isset($_POST["password4"])){
    $pass = $_POST["password4"];
    if($pass == "かいどうこうたのめいにち"){
      setcookie('level','6',0,'/');
      header("Location: ../finale/kokuhaku.php");
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
        <span class="room">2年5組</span>
        <div class="title">
        </div>
      </div>
      <div class="wrapper">
        <?php include("../common/sidebarall.php") ?>
        <div class="content">
          <nav>
            <ol class="breadcrumb">
              <li><a href="/">ホーム</a></li>
              <li>8/19</li>
            </ol>
          </nav>
          <h2 class="blogtitle">5つ目のミッション</h2>
          <div class="main">
            <p>この問題を解いて答えを下のフォームに入力してくれ。</p>
            <form method="post">
              Q18の答えは？：<input type="text" name="password4">
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
              <img src="../images/nazo18.png" class="nazo">
            </div>
            <div class="date">2022/08/19</div>
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