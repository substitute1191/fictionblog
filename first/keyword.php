<?php
  if(!isset($_COOKIE['level'])){
    setcookie('level','1',0,'/');
  }
  setcookie('active','1',0,'/');
  
  if(isset($_POST["password1"])){
    $pass = $_POST["password1"];
    if($pass == "自習"){
      setcookie('level','2',0,'/');
      header("Location: ../next/keyword2.php");
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
        <span class="room">職員室</span>
        <div class="title">
        </div>
      </div>
      <div class="wrapper">
      <?php include('../common/sidebarall.php') ?>
        <div class="content">
          <nav>
            <ol class="breadcrumb">
              <li><a href="/">ホーム</a></li>
              <li>ミッション１</li>
            </ol>
          </nav>
          <h2 class="blogtitle">ミッション１</h2>
          <div class="main">
            今、皆には8月1日から8月9日までのブログ記事が見えていると思う。
            で、それぞれのブログには必ず謎が1枚添付されているはずだ。
            謎を解くと答えが出てくるから、それを下の画像に埋めていってくれ。
            すると、新たな指示が出てくるからそれに従うとパスワードが分かる。
            正しいパスワードを入力すると、次のページに進めるぞ！
            <!-- <br><input type="button" class="kwinput" value="パスワードを入力して他のページへアクセスする" onclick="gate();"> -->         
            <form action="keyword.php" method="post">
              パスワード：<input type="text" name="password1">
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
              <img src="../images/mission1.jpg" class="nazo">
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
    <!--
    <script type="text/javascript">
      function gate() {
        var UserInput = prompt("パスワードを入力して下さい:","");
        if(UserInput !== null){
          location.href = "next/" + UserInput + ".php";
        }
      }
   </script>
    -->
  </body>
</html>