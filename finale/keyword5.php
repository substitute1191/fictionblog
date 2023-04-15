<?php
  global $alert;
  if(isset($_POST["password4"])){
    $pass = $_POST["password4"];
    if($pass == "稲岸の部屋"){
      $alert = "タイムカプセルの隠し場所は{$pass}ではありません。<span class='blue'>（StoryFile-5を開いてください）</span>";
    }else{
      $alert = "タイムカプセルの隠し場所は{$pass}ではありません。";
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
    <link rel="stylesheet" href="../css/0819.css">
    <link rel="stylesheet" href="css/0803.css">
    <link rel="shortcut icon" href="../images/favicon/favicon.ico">
    <title>稲岸の部屋</title>
  </head>
  <body>
    <div class="container">
      <div class="title-wrapper">
        <span class="room">美術室</span>
        <div class="title">
        <img src="../images/ehude.png" alt="" id="ehude">
        <img src="../images/palette.png" alt="" id="palette">
      </div>
      </div>
      <div class="wrapper">
        <?php include("../common/sidebarall.php") ?>
        <div class="content">
          <nav>
            <ol class="breadcrumb">
              <li><a href="/">ホーム</a></li>
              <li>8/20 タイムカプセルの場所は？</li>
            </ol>
          </nav>
          <h2 class="blogtitle">最後のミッション</h2>
          <div class="main">
            <p>なーんてな！冗談だよ、冗談！笑
              海堂の死がある一人の責任だなんて全然思ってないから笑</p>

              <p>ちょっと皆を怖がらせたかっただけだよ。
              怖かったでしょ？</p>

              <p>さ、タイムカプセル探しの本題に戻ろうか！
              いよいよ最後の問題だ！</p>

              <p>実は今まで、皆がミッションをクリアして新しいページに進むたびにタイムカプセルの場所についてヒントを合計3つ出していたんだけど気づいたかな？
              そんなものはなかったって？
              まあ、ブログを青くしてみたら分かると思うよ。</p>

              <p>それでもヒントが足りない？いや、もう十分ヒントは出しているはずだ。そもそも中学の時から俺は皆にヒントを教えているからね。</p>
              <p>このブログを読んで......何か思い出したことは無かったかな？</p>

              <p>それらのヒントと、この記事につけた地図を参考にして俺が新たに隠したタイムカプセルの場所を特定してほしい。</p>

              <p>あ、そうそう、タイムカプセルには俺からのプレゼントを加えておいたんだよね。
              きっと皆、喜んでくれると思う。もしかしたら、喜ばない人もいるかもしれないけどね。</p>

              <p>そういえば今日クラスLINEに大石から同窓会をやりませんかって連絡が来てたよな。<br>
              大石のやつ、俺が企画しようと思ったのに先を越されたぜ笑<br>
              でも、中学の皆で遊ぶことを計画しているのは俺だけじゃないって分かって嬉しかったよ。<br>
              同窓会でも皆で楽しめる何かをしたいと思ってるから皆も出来るだけ参加してほしい。</p>
            <form method="post">
              タイムカプセルが隠された場所は？：<input type="text" name="password4">
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
            今までのヒントとこの画像をもとに、俺が新たにタイムカプセルを隠した場所を導いてほしい。
              <img src="../images/map.png" class="tizu">
              <div class="basyo">
                <h3>地図上の場所</h3>
                <p>1.郵便局</p>
                <p>2.ガソリンスタンド</p>
                <p>3.コンビニ</p>
                <p>4.マンション「グリーンコーポ」</p>
                <p>5.第一総合病院</p>
                <p>6.パン屋「Fresh Bakery」</p>
                <p>7.あおぞら保育園</p>
                <p>8.小山の家</p>
                <p>9.公民館</p>
                <p>10.みちなか公園</p>
                <p>11.スーパーマーケット「かごや」</p>
                <p>12.レンタル倉庫サービス</p>
                <p>13.喫茶店「コンシェルジュ」</p>
                <p>14.花屋「フローラル」</p>
                <p>15.市立第一中学</p>
                <p>16.江上の家</p>
                <p>17.竹口の家</p>
                <p>18.はくれいの森</p>
                <p>19.寺</p>
              </div>
              <div class="circle"></div>
              <div class="circle"></div>
              <div class="circle"></div>
            </div>
            <div class="date">2022/08/20</div>
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
    <script type="text/javascript">
      (function(){
        var elements = document.getElementsByClassName("circle");

        var x;
        var y;

        for(var i=0;i<elements.length;i++){
          elements[i].addEventListener("mousedown",mdown,false);
          elements[i].addEventListener("touchstart",mdown,false);
        }

        function mdown(e) {
          this.classList.add("drag");

          if(e.type === "mousedown"){
            var event = e;
          }else {
            var event = e.changedTouches[0];
          }

          x = event.pageX - this.offsetLeft;
          y = event.pageY - this.offsetTop;

          document.body.addEventListener("mousemove",mmove,false);
          document.body.addEventListener("touchmove",mmove,false);
        }

        function mmove(e){
          var drag = document.getElementsByClassName("drag")[0];

          e.preventDefault();

          drag.style.top = event.pageY - y + "px";
          drag.style.left = event.pageX - x + "px";

          drag.addEventListener("mouseup",mup,false);
          document.body.addEventListener("mouseleave",mup,false);
          drag.addEventListener("touchend",mup,false);
          document.body.addEventListener("touchleave",mup,false);
        }

        function mup(e){
          var drag = document.getElementsByClassName("drag")[0];

          document.removeEventListener("mouseup",mmove,false);
          drag.removeEventListener("mouseup",mup,false);
          document.body.removeEventListener("touchmove",mmove,false);
          drag.removeEventListener("touchend",mup,false);

          drag.classList.remove("drag");
        }
      })()
    </script>
    <script src="../javascript/accordion.js"></script>
  </body>
</html>