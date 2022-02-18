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

        {{-- bootstrapのnavバーのレスポンシブが崩れる --}}
        <nav class="navbar navbar-expand-xl navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBasic" aria-controls="navbarBasic" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse show" id="navbarBasic">
                <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>



        {{-- <div class="container"> --}}
        {{-- <button type="button" class="btn btn-link"></button>

         <ul class="nav navbar navbar-expand-md">
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
          </ul> --}}


          <img class="atumal" src="{{ asset("/iOS-の画像.jpg") }}" alt="あつまる">

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
