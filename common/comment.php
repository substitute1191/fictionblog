<?php
  global $msg;
  if(!empty($_POST['btn_submit'])){
    if(empty($_POST['name']) || empty($_POST['comment'])){
      $msg = "未入力の欄があります。";
    }else{
      $msg = "コメントを受け付けました。管理人から承認されたら表示されます。";
    }
  }
?>

<div class="commentformarea">
    <h2>何でも聞いてね！</h2>
    <form class="commentform" method="post">
    <div class="item">
        <label class="label" for="name" name="name">名前</label>
        <input id="name" type="text" name="name">
    </div>
    <div class="item">
        <label class="label" for="message">本文</label>
        <textarea rows="4" id="message" placeholder="何でも聞いてね" name="comment"></textarea>
    </div>
    <div class="item no-label">
        <input type="submit" class="csubmit" name="btn_submit">
    </div>
    </form>
    <div class="reaction">
        <?php echo $msg ?>
    </div>
</div>