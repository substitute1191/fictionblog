<?php
  if(!isset($_COOKIE['level'])){
    $level = 1;
  }else{
    $level = (int)$_COOKIE['level'];
  }

  $active = 0;
?>

<div class="sidebar">
  <div class="sbtitle-area"><div class="sbtitle">記事の一覧</div></div>
  <ul class="include-accordion">
    <li class="<?php if($active==1) echo "active" ?>">
      <button class="accordionBtn" type="Button">ミッション1</button>
      <ul>
        <li class="bmission"><a href="../first/keyword.php">最初のミッション</a></li>
        <div class="sbitem"><li class="blink"><a href="../first/blog0801.php">8/1 謎解きを始めよう</a></li></div>
        <div class="sbitem"><li class="blink"><a href="../first/blog0802.php">8/2 帰省</a></li></div>
        <div class="sbitem"><li class="blink"><a href="../first/blog0803.php">8/3 小テスト</a></li></div>
        <div class="sbitem"><li class="blink"><a href="../first/blog0804.php">8/4 タイムカプセル</a></li></div>
        <div class="sbitem"><li class="blink"><a href="../first/blog0805.php">8/5 カラオケ</a></li></div>
        <div class="sbitem"><li class="blink"><a href="../first/blog0806.php">8/6 ストーカー</a></li></div>
        <div class="sbitem"><li class="blink"><a href="../first/blog0807.php">8/7 松原先生</a></li></div>
        <div class="sbitem"><li class="blink"><a href="../first/blog0808.php">8/8 時間割</a></li></div>
        <div class="sbitem"><li class="blink"><a href="../first/blog0809.php">8/9 ルール</a></li></div>
      </ul>
    </li>

    <li class="<?php 
      if($level<2) echo "hide";
      if($active==2) echo "active";
    ?>">
        <button class="accordionBtn Btn2" type="Button">ミッション2</button>
        <ul>
          <li class="bmission"><a href="../next/keyword2.php">二つ目のミッション</a></li>
          <div class="sbitem"><li class="blink"><a href="../next/blog0810.php">8/10 周期表</a></li></div>
          <div class="sbitem"><li class="blink"><a href="../next/blog0811.php">8/11 修学旅行</a></li></div>
          <div class="sbitem"><li class="blink"><a href="../next/blog0812.php">8/12 ペットボトルロケット</a></li></div>
          <div class="sbitem"><li class="blink"><a href="../next/blog0813.php">8/13 嬉しい連絡</a></li></div>
          <div class="sbitem"><li class="blink"><a href="../next/blog0814.php">8/14 成長</a></li></div>
        </ul>
    </li>

    <li class="<?php 
      if($level<3) echo "hide";
      if($active==3) echo "active";
      ?>">
        <button class="accordionBtn Btn3" type="Button">ミッション3</button>
        <ul>
          <li class="bmission"><a href="../nnext/keyword3.php">三つ目のミッション</a></li>
          <div class="sbitem"><li class="blink"><a href="../nnext/blog0815.php">8/15 友達</a></li></div>
          <div class="sbitem"><li class="blink"><a href="../nnext/blog0816.php">8/16 突然の連絡</a></li></div>
          <div class="sbitem"><li class="blink"><a href="../nnext/blog0817.php">8/17 卒業式</a></li></div>
        </ul>
    </li>

    <li class="<?php 
      if($level<4) echo "hide";
      if($active==4) echo "active";
      ?>">
        <button class="accordionBtn Btn4" type="Button">ミッション4</button>
        <ul>
          <li><img src="../images/kani.png" class="zou"></li>
          <li class="sbitem"><a href="../secret/blog0818.php">8/18 動物を探せ！</a></li>
        </ul>
    </li>

    <li class="<?php 
      if($level<5) echo "hide";
      if($active==5) echo "active";
      ?>">
        <button class="accordionBtn Btn5" type="Button">ミッション5</button>
        <ul>
          <li class="sbitem"><a href="../secret/keyword4.php">8/19</a></li>
        </ul>
    </li>

    <li class="<?php 
      if($level<6) echo "hide";
      if($active==6) echo "active";
      ?>">
        <button class="accordionBtn Btn6" type="Button">ミッション6</button>
        <ul>
          <li class="sbitem"><a href="../finale/keyword5.php">8/20 タイムカプセルの場所は？</a></li>
        </ul>
    </li>
  </ul>
</div>