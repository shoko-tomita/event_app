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

    document.getElementById('logout').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('logout-form').submit();
      });

}
