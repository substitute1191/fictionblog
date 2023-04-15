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
    <link rel="stylesheet" href="../css/0815.css">
    <link rel="shortcut icon" href="../images/favicon/favicon.ico">
    <title>🐶稲岸の部屋だワン！🐶</title>
  </head>
  <body>
    <div class="container">
      <div class="title-wrapper">
      <span class="room">2年1組</span>
        <div class="title">
        </div>
      </div>
      <div class="wrapper">
        <?php include("../common/sidebarall.php") ?>
        <div class="content">
          <nav>
            <ol class="breadcrumb">
              <li><a href="/">ホーム</a></li>
              <li><a href="keyword3.php">ミッション３</a></li>
              <li>8/15 友達</li>
            </ol>
          </nav>
          <h2 class="blogtitle">友達</h2>
          <div class="main">
            <p>8/15。今日は雨が降っていたので家の中で大人しくしていることにした。
              8月は実は昔嫌なことがあった月でさ。こうして一人でぼーっとしているとそのことを思い出してセンチメンタルな気持ちになるんだよな。</p>

            <p>実は俺、小学校のころ古いアパートから一軒家に移り住むために隣の市からこっちにやってきたんだよね。
              その時小学校も少し離れた場所に転校することになった。
              それで前の小学校の友達とは別れたんだけどさ、その後も親しく付き合っていた友達が何人かいてね。
            </p>

            <p>中学、高校になっても連絡を取り合ったりしてたんだけどさ、、、</p>

            <p>その中の友達の一人が、2，3年前の8月に亡くなったんだよね。
              人の死ってこんなに突然訪れるんだと、衝撃で涙すら流せなかった</p>

            <p>あれから数年経った今でも、あいつの死を思い出してすごい悲しくなるんだよね。</p>

            <p>ごめん、ちょっと暗い話になっちゃったな！</p>
            <div class="kyounazo">
            <h2 class="nazotitle3">今日の一枚</h2>
              
              <img src="../images/nazo15.png" class="nazo">
            </div>
            <form name="flash" id="flash">
              <h2>フラッシュ暗算に挑戦！</h2>
              <input type name="number" size="10" id="number"><br>
              <input type="button" class="button" name="b_start" value="暗算開始" onClick="f_start()">
            </form>
            <div class="date">2022/08/15</div>
            <?php include('../common/comment.php') ?>
          </div>
        </div>  
      </div>
    </div>
    <?php include("../common/footer.php") ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript">
      var arr = ["96","-32","17","-55","-1001","-9","30","-80","989","68"]
      var idx = 0;

      function f_start(){
        idx = 0;
        timerID = setInterval('f_count()',150);
        document.flash.b_start.disabled = true;
      }

      function f_count(){
        if(idx > 9){
          f_clear()
        }else{
          document.flash.number.value = arr[idx];
          idx++;
        }
      }

      function f_clear(){
        clearInterval(timerID);
        document.flash.number.value = "";
        document.flash.b_start.disabled = false;
      }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="../javascript/accordion.js"></script>
  </body>
</html>