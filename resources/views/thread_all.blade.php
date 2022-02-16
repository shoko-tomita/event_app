<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>スレッド一覧</title>
    <link rel="icon" href="{{ asset('/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset("/css/style.css") }}">
</head>

<body>
    <header>
        <div class="container">
        <button type="button" class="btn btn-link"></button>

        <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Foods</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Work shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Photo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Beauty</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Seminar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Other</a>
            </li>
          </ul>
          <img class="atumal" src="{{ asset("/iOS-の画像.jpg") }}" alt="あつまる">

          {{-- スレッド作成がうまく行かない・表示しない --}}
          <a href="{{ route('threads.create') }}" class="btn btn-primary">スレッド作成</a>

    </header>
    <main>
        <div id="loading">
            <div class="spinner"></div>
        </div>

          <img src="{{ asset("/img/new017/new017_10.gif") }}" alt="新着スレッド">
        <!-- スレッド作成の内容が本来表示 -->

        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
              <h5 class="card-title">◯◯のイベント</h5>
              <p class="card-text">スレッド内容スレッド内容スレッド内容スレッド内容スレッド内容スレッド内容スレッド内容スレッド内容スレッド内容スレッド内容スレッド内容スレッド内容</p>

                {{-- todoのフォルダの追加？Chapter3から
              @foreach($folders as $folder)
                <a href="{{ route('tasks.index', ['id' => $folder->id]) }}" class="list-group-item">
                    {{ $folder->title }}
                </a>
              @endforeach --}}

              {{-- @foreach($therads as $thread)
                <a href="{{ route('thread_all', ['id' => $thread->id]) }}" class="list-group-item">
                    {{ $thread->title }}
                </a>
              @endforeach --}}
                 {{-- routeの記述間違い{{ route('disp') }} --}}

              {{-- ルーティングでの画面遷移がうまくいかない --}}
              {{-- {{ route('threads.disp') }} --}}
              <a href="" class="btn btn-primary">スレッド詳細</a>
            </div>
            <a  href="#" id="logout">ログアウト</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="{{ route('user.withdrawal') }}" onclick="res = confirm('本当に退会しますか？');
            event.preventDefault();
            if( res == true ) {
              document.getElementById('withdrawal-form').submit();
            }">
              ・退会
            </a>
            <form id="withdrawal-form" action="{{ route('user.withdrawal') }}" method="post" style="display: none;">
            @csrf
            <form>

        </div>
    </main>
    <script src="../js/app.js">
    </script>
</body>

</html>
