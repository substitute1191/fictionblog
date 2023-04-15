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
    <title>稲岸の部屋</title>
  </head>
  <body>
    <div class="all">
      <div class="container">
        <div class="title-wrapper">
          <span class="room">1年1組</span>
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
                <li>8/1 謎解きを始めよう</li>
              </ol>
            </nav>
            <h2 class="blogtitle">謎解きを始めよう</h2>
            <div class="main">
            <p>皆久しぶり。稲岸友治です。<br>
          最初の10問はどうだったかな？中学を卒業してからもう５年も経つとはいえ、流石にすぐ思い出<span class="wai">せ</span>たんじゃないかな。</p>
              
              <p>実は今日は皆に伝えたいことがあって、それでこのブログを見てもらっている。</p>
  
              <p>皆は松原先生の塾で、中学を卒業する前にタイムカプセルを埋めたことを覚えてるか？成人したら掘り出そうって話をしていたけど、先生が亡くなったし皆も忙しいしで忘れていたと思うんだ。</p>
  
              <p>最近、そのタイムカプセルのことが気になって、俺が一人で掘り返してみたんだ。<br>
              <span class="bold">実はその中から色々面白いものが見つかったんだけど......</span><br>
                ただ皆に見せるだけってのもつまらないよな？</p>
  
              <p>だから俺、タイムカプセルを手に入れるための謎解きゲームを作ったんだ。謎解きって皆も聞いたことあるだろ？最近流行ってるよね。<br>
                実はこのブログの1ページ1ページで謎が出題されるんだ。
                謎を解いていくと、徐々に先の日のブログに進んでいけるような仕組みになっている。</p>

              <p>謎解きといっても、普通のひらめきだけでは解けない問題もある。そういう時は......皆が中学校で過ごした「思い出」のことを考えるとヒントが出てくるかもしれない。</p>
  
              <p>別にタイムカプセルなんて必要ないって？いやいや、まあそんな野暮なことは言わずにやってみてくれよ笑<br>
                面白いと思うからさ！</p>
  
              <p>早速、皆に最初のミッションを与えよう。このブログを読み終わったら、最初のミッションと書かれたページに飛んでほしい。</p>

  
              <div class="kyounazo">
                <h2 class="nazotitle1">今日の一枚</h2>
                <img src="../images/nazo1.png" class="nazo">
              </div>
            </div>
            <div class="date">2022/08/01</div>
            <?php include('../common/comment.php') ?>
          </div>  
        </div>
      </div>
      <?php include('../common/footer.php') ?>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="../javascript/accordion.js"></script>
  </body>
</html>