'use strict';
{

    let cnt = 0
    let loading = window.onload = function() {
        cnt++;
        const timeoutId = setTimeout(loading, 1000);
        if(cnt > 4){
            const spinner = document.getElementById('loading');
            spinner.classList.add('loaded');
            clearTimeout(timeoutId);
            //timeoutIdをclearTimeoutで指定している
        }
    }
    loading();

    // $(function() {
    //     $('.navbar_toggle').on('click', function () {
    //     $(this).toggleClass('open');
    //     $('.menu').toggleClass('open');
    //     });
    //     });

    $(".openbtn1").click(function () {//ボタンがクリックされたら
        $(this).toggleClass('active');//ボタン自身に activeクラスを付与し
          $("#g-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
          $(".circle-bg").toggleClass('circleactive');//丸背景にcircleactiveクラスを付与
      });

      $("#g-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
          $(".openbtn1").removeClass('active');//ボタンの activeクラスを除去し
          $("#g-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスを除去
          $(".circle-bg").removeClass('circleactive');//丸背景のcircleactiveクラスを除去
      });
}
