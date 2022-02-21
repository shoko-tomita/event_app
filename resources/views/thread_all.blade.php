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

    <header id="header">
        <h3>ATUMARU</h3>
      </header>

    <div class="openbtn1"><span></span><span></span><span></span></div>
    <nav id="g-nav">
    <div id="g-nav-list"><!--ナビの数が増えた場合縦スクロールするためのdiv※不要なら削除-->
    <ul>
        <li><a href="{{ route('category.food') }}">Food</a></li>
        <li><a href="{{ route('category.workshop') }}">Workshop</a></li>
        <li><a href="{{ route('category.photo') }}">Photo</a></li>
        <li><a href="{{ route('category.beauty') }}">Beauty</a></li>
        <li><a href="{{ route('category.seminar') }}">Seminar</a></li>
        <li><a href="{{ route('category.other') }}">Other</a></li>
    </ul>
    </div>
    </nav>
    <div class="circle-bg"></div>

{{--
    <header>

        <nav>
            <div class="drawer">
             <h5 class="navbar_brand" href="#">ATUMARU</h5>
             <div class="navbar_toggle">
              <span class="navbar_toggle_icon"></span>
              <span class="navbar_toggle_icon"></span>
              <span class="navbar_toggle_icon"></span>
             </div>
            </div>
            <div class="menu">
             <ul>
              <li><a href="#">Food</a></li>
              <li><a href="#">Workshop</a></li>
              <li><a href="#">Photo</a></li>
              <li><a href="#">Beauty</a></li>
              <li><a href="#">Seminar</a></li>
              <li><a href="#">Other</a></li>
             </ul>
            </div>
           </nav> --}}

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

              @foreach ($threads as $thread)
                <p>これは {{ $thread->id }} ユーザーです。</p>
             @endforeach

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


              {{-- <tbody>
                @foreach($threads as $thread)
                    <tr>
                        <td>{{ $thread->title }}</td>
                        <td>{{ $thread->thread_detail }}</td>
                    </tr>
                @endforeach
            </tbody> --}}

            {{-- <p>{{ $book->id }}</p>
            <div class="book__texts">
                <div class="book__title">{{ $book->title }}</div> --}}


              <a href="{{ route('threads.disp') }}" class="btn btn-primary">スレッド詳細</a>
            </div>
            <a  href="#" id="logout">ログアウト</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>・
            <a href="{{ route('user.withdrawal') }}" onclick="res = confirm('本当に退会しますか？');
            event.preventDefault();
            if( res == true ) {
              document.getElementById('withdrawal-form').submit();
            }">
              退会
            </a>
            <form id="withdrawal-form" action="{{ route('user.withdrawal') }}" method="post" style="display: none;">
            @csrf
            <form>

        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="../js/app.js">
    </script>
</body>

</html>
