<?php
  if(!isset($_COOKIE['level'])){
    setcookie('level','2',0,'/');
  }
  setcookie('active','2',0,'/');
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
    <link rel="stylesheet" href="../css/0811.css">
    <link rel="shortcut icon" href="../images/favicon/favicon.ico">
    <title>稲岸の部屋</title>
  </head>
  <body>
    <div class="container">
      <div class="title-wrapper">
        <span class="room">理科室</span>
        <div class="title">
        </div>
        <img src="../images/flask.png" id="flask1" onclick="broken1()">
        <img src="../images/flask.png" id="flask2" onclick="broken2()">
      </div>
      <div class="wrapper">
        <?php include("../common/sidebarall.php") ?>
        <div class="content">
          <nav>
            <ol class="breadcrumb">
              <li><a href="/">ホーム</a></li>
              <li><a href="keyword2.php">ミッション２</a></li>
              <li>8/11 修学旅行</li>
            </ol>
          </nav>
          <h2 class="blogtitle">修学旅行</h2>
          <div class="main">
            
            <p>修学旅行で皆で京都に行ったの、覚えてるか？
              でも俺は正直、京都で何を見たかはあんまり覚えてないんだよな笑</p>
              <p>本当に覚えているのは、修学旅行の前に班の皆で、自由時間の際にどの場所に行くか話し合ったこととか<span class="blue">(B)</span>
                ホテルの部屋からこっそり抜け出したこととかそういうことだ。
              </p>
              <p>部屋から抜け出したときは江上に無茶ぶりをしちゃったなあ</p>
             <p>夜になったら皆の部屋に遊びに行きたかったんだけど、出歩き禁止令が出てたじゃん？</p>
             <p>先生がずっと見回りしてたから外からは行けなかったんだよね。</p>
             <p>でも俺、やっぱり皆の部屋に行きたかったからベランダ伝いに抜け出したよ。
              先生が点呼に来たら俺の声真似をして返事してって江上に任せといてさ。</p>
            
              <p>江上はめちゃくちゃ嫌がってたけど、俺が抜け出したのがバレてなかったからうまくやってくれたみたいだな。
                あの時は無茶なお願いをして悪かったと思う笑　部屋がどんな様子になってたのか気になるな</p>

                <p>皆は修学旅行でどんなことを覚えてる？</p>
            <div class="kyounazo">
              <h2 class="nazotitle2">今日の一枚</h2>
              <img src="../images/nazo11.png" class="nazo">
            </div>
          </div>
          <div class="date">2022/08/11</div>
          <?php include('../common/comment.php') ?>
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
    <script>
      var img = new Array();

      img[0] = new Image();
      img[0].src = "../images/flask.png";
      img[1] = new Image();
      img[1].src = "../images/broken_flask.png"

      var cnt1 = 0;
      var cnt2 = 0;

      function broken1(){
        if(cnt1 === 0) cnt1++;
        document.getElementById("flask1").src = img[cnt1].src;
        document.getElementById("flask1").style.width = 100 + "px";
        document.getElementById("flask1").style.top = 65 + "px";

        if(cnt1 === 1 && cnt2 === 1){
          hukidasi();
        }
      }

      function broken2(){
        if(cnt2 === 0) cnt2++;
        document.getElementById("flask2").src = img[cnt2].src;
        document.getElementById("flask2").style.width = 100 + "px";
        document.getElementById("flask2").style.top = 65 + "px";

        if(cnt1 === 1 && cnt2 === 1){
          hukidasi();
        }
      }

      function hukidasi(){
        console.log("フラスコが二つ割れた！")
        var img_element = document.createElement("img");
        img_element.src = "../images/hukidasi.png";
        img_element.style.position = "absolute";
        img_element.style.top = "-10px";
        img_element.style.left = "1500px";
        img_element.style.zIndex = "1000";
        var article = document.querySelector(".container");
        article.appendChild(img_element);
        img_element.animate({
          left:["1500px",0,"-100px","50px","-10px",0,"50px"],
        },{
          fill:"forwards",
          duration:500
        });
      }

      
    </script>
  </body>
</html>