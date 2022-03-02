<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>スレッド一覧</title>
    <link rel="icon" href="{{ secure_asset('/favicon.png') }}">
    <link rel="stylesheet" href="{{ secure_asset("/css/style.css") }}">
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


          <img class="atumal" src="{{ secure_asset("/iOS-の画像.jpg") }}" alt="あつまる">

          <a href="{{ route('threads.create') }}" class="btn btn-primary">スレッド作成</a>

    </header>
    <main>
        <div id="loading">
            <div class="spinner"></div>
        </div>

          <img src="{{ secure_asset("/img/new017/new017_10.gif") }}" alt="新着スレッド">

        <!-- スレッド作成の内容が本来表示 -->

        @foreach ($threads as $thread)
        <div class="col col-md-offset-3 col-md-6">
        <nav class="panel panel-default">
            <div class="panel-heading"> {{ $thread->title }}</div>
            <div class="panel-body">
                <div class="card">
                    <div class="card-body">
                      {{-- <h5 class="card-title"> {{ $thread->thread_detail }}</h5> --}}
                      <p class="card-text">{{ $thread->thread_detail }}</p>
                    </div>
                  </div>

                  {{-- 位置情報はDBにareaカラムが無いから手入力で入れたものを反映させる --}}
                  <label for="title">位置情報</label>
                  {{-- <input type="position" class="form-control" name="position" id="position" value="{{ old('position') }}" />
                </div> --}}

                <a href="{{ route('threads.disp',['id' => $thread->id]) }}" class="btn btn-primary">スレッド詳細</a>

                </div>
            </nav>
        </div>
          @endforeach
{{--
        <div class="card">
            <div class="card-body">
              <h5 class="card-title"> {{ $thread->title }}</h5>
              <p class="card-text">{{ $thread->thread_detail }}</p>


              <a href="{{ route('threads.disp',['id' => $thread->id]) }}" class="btn btn-primary">スレッド詳細</a>

            </div>
            <a href="{{ route('threads.disp',['id' => $thread->id]) }}" class="btn btn-primary">スレッド詳細</a>
          </div>
          @endforeach --}}


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
    <script src="{{ secure_asset("/JS/app.js") }}">
    </script>
    <script>
        document.getElementById('logout').addEventListener('click', function(event) {
          event.preventDefault();
          document.getElementById('logout-form').submit();
        });
      </script>
</body>

</html>
