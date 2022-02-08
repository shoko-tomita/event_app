<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>スレッド一覧</title>
    <link rel="stylesheet" href="{{ asset("/css/style.css") }}">
</head>

<body>
    <header>
        <div class="container">
        <button type="button" class="btn btn-link"></button>

        <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <p>ユーザー画像</p>
          <button type="button" class="btn btn-link"></button>
        </div>
    </header>
    <main>
        <div id="loading">
            <div class="spinner"></div>
        </div>
          <!-- class=loadedの記述の位置がわからない -->

          <img src="../public/img/new017/new017_10.gif" alt="新着スレッド">
        <!-- スレッド作成の内容が本来表示 -->
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
              <h5 class="card-title">◯◯のイベント</h5>
              <p class="card-text">スレッド内容スレッド内容スレッド内容スレッド内容スレッド内容スレッド内容スレッド内容スレッド内容スレッド内容スレッド内容スレッド内容スレッド内容</p>
              <a href="#" class="btn btn-primary">スレッド詳細</a>
            </div>
          </div>
    </main>
    <script src="../js/app.js"></script>
</body>

</html>