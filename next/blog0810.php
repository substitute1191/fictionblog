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
    <link rel="stylesheet" href="../css/0810.css">
    <link rel="shortcut icon" href="../images/favicon/favicon.ico">
    <title>稲岸の部屋</title>
  </head>
  <body>
    <div class="container">
      <div class="title-wrapper">
        <span class="room">3年1組</span>
        <div class="faketitle">
                 二次関数
        </div>
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
              <li>8/10 周期表</li>
            </ol>
          </nav>
          <h2 class="blogtitle">周期表</h2>
          <div class="main">
          <img src="../images/zou.png" class="neko">
          <p>今日は大学で化学を専攻している友達と電話する機会があった。</p>
          <p>前期は実験が多くて大変だったらしく、毎週レポートを課されてしんどいと憂鬱そうだった。夏季休業に入ってレポートから解き放たれたから、すごく活き活きしてるみたいだったよ。</p>

          <p>俺らの授業は大したことないから理系に進むと大変そうで嫌だなと思っちゃうな。</p>
          <p>俺の化学なんか周期表の存在が出てきたあたりで止まってる。</p>

          <p>水兵リーベ僕の船、七曲りシップスクラークか、っていう語呂合わせだけはよく覚えてるんだけど、どれが何に対応してるか忘れたから全然意味ないんだよな笑</p>


            <img src="../images/syukihyo.jpg" class="syukihyo">

            <p>ネットで周期表を見つけたからここに載せてみた。</p>
            <p>皆はどれくらい覚えてるか？</p>
            <div class="kyounazo">
              <h2 class="nazotitle2">今日の一枚</h2>
              <img src="../images/nazo10.png" class="nazo">
            </div>
          </div>
          <div class="date">2022/08/10</div>
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
    <script type="text/javascript">
      (function(){
        var elements = document.getElementsByClassName("title");

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