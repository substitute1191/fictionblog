// メニューを開く関数
const slideDown = function(el) {
    el.style.height = 'auto'; //いったんautoに
    let h = el.offsetHeight; //autoにした要素から高さを取得
    el.style.height = h + 'px';
    el.animate([ //高さ0から取得した高さまでのアニメーション
      { height: 0 },
      { height: h + 'px' }
    ], {
      duration: 10, //アニメーションの時間（ms）
     });
     el.style.height = 'auto'; //ブラウザの表示幅を途中で閲覧者が変えた時を考慮してautoに戻す
  };

  // メニューを閉じる関数
const slideUp = function(el) {
    let h = el.offsetHeight;
    el.style.height = h + 'px';
    el.animate([
      { height: h + 'px' },
      { height: 0 }
    ], {
      duration: 10,
     });
     el.style.height = 0;
};
  //アコーディオンコンテナ全てで実行
const accordions = document.querySelectorAll('.include-accordion');


window.addEventListener('DOMContentLoaded',function(){
    accordions.forEach(function(accordion){
        const accordionLis = accordion.children;
        console.log(accordionLis);

        Array.prototype.forEach.call(accordionLis,function(accordionLi){
            if(!accordionLi.classList.contains('active')){
                console.log(accordionLi.childNodes[3]);
                accordionLi.childNodes[3].style.height = 0;
            }
        });
    })
})

accordions.forEach( function(accordion) {
    //アコーディオンボタン全てで実行
    const accordionBtns = accordion.querySelectorAll('.accordionBtn');
    console.log(accordionBtns);
    accordionBtns.forEach( function(accordionBtn, index) {
      accordionBtn.addEventListener('click', function(e) {
        e.target.parentNode.classList.toggle('active'); //ボタンの親要素(ul>li)にクラスを付与／削除
        const content = accordionBtn.nextElementSibling; //ボタンの次の要素（ul>ul）
        if(e.target.parentNode.classList.contains('active')){
          slideDown(content); //クラス名がactive（＝閉じていた）なら上記で定義した開く関数を実行
        }else{
          slideUp(content); //クラス名にactiveがない（＝開いていた）なら上記で定義した閉じる関数を実行
        }
      });
    });
});