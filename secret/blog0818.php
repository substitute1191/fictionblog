<?php
  global $alert;
  if(isset($_POST["password3"])){
    $pass = $_POST["password3"];
    if($pass == "95"){
      setcookie('level','5',0,'/');
      header("Location: ../secret/keyword4.php");
      exit();
    }else{
      $alert = "答えの数字は{$pass}ではありません。";
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
    <link rel="shortcut icon" href="../images/favicon/favicon.ico">
    <title>稲岸の部屋</title>
  </head>
  <body>
    <div class="container">
      <div class="title-wrapper">
        <span class="room">校長室</span>
        <div class="title">
        </div>
      </div>
      <div class="wrapper">
        <?php include("../common/sidebar4.php") ?>
        <div class="content">
          <nav>
            <ol class="breadcrumb">
              <li><a href="/">ホーム</a></li>
              <li>8/18 動物を探せ！</li>
            </ol>
          </nav>
          <h2 class="blogtitle">ミッション4</h2>
          <div class="main">
            <p>そう、正解は「授業参観」だ。とうとうここまで辿り着いたか。</p>
            <p>問題を解いて、席に座っていた人物の名前を埋めると「きゅーじゅうさんをひらけ」という文章が出てくるはずだ。<br>
            これを変換すると、Q13を開けになる。つまり、Q13に隠しリンクがあるということなんだな。そこで画像のQ13をクリックすると、KWが分かる。</p>
            <p>そろそろ、謎解きにも慣れてきたころかな？</p>
            <p>謎解きはまだまだ続くけど、確実にゴールに近づいているぞ！</p>

            <p>今回は趣向を変えて問題を１問だけにした。以下の問題を解いてほしい。<span class="hint">ヒント３：そこは小山の家からも視認できる</span></p>

            <p>問題：今までのブログの全ページから、羊、ゴリラ、犬、象、ウサギ、カニ、たぬきのイラストを探し出せ。その動物が載っているページの日数の合計が答えだ</p>
            <p>例えば0801のブログページに犬がいたら、1を足してくれ</p>
            <p>松原先生に今まで川や森で動物を探させられたことがあったよな？俺もそういうことを真似してやってみたくなったのさ。どれくらいの時間で全ての動物を見つけられるかな？</p>
            <form method="post">
              答えの数字は？：<input type="text" name="password3">
              <input type="submit" value="入力">
              <div class="wrong">
                <?php
                  if(isset($alert)){
                    echo $alert;
                  }
                ?>
              </div>
            </form>
            <div class="date">2022/08/18</div>
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