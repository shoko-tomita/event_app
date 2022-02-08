'use strict';
{
    var cnt = 0
    var loading = window.onload = function() {
        cnt++;
        const timeoutId = setTimeout(loading, 1000);
        if(cnt > 4){
            const spinner = document.getElementById('loading');
            spinner.classList.add('loaded');
            clearTimeout(timeoutId);//timeoutIdをclearTimeoutで指定している
        }
    }
    loading();
}
