<link rel="stylesheet" href="{{ secure_asset("/css/style.css") }}">
@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <nav class="panel panel-default">
          <div class="panel-heading">マイページ・事業所</div>
          <div class="panel-body">
            @if($errors->any())
              <div class="alert alert-danger">
                @foreach($errors->all() as $message)
                  <p>{{ $message }}</p>
                @endforeach
              </div>
            @endif

            <form action="" method="POST">
              @csrf
              <label> {{ $user->name }}</label>
              <p><img src="{{ secure_asset("/img/new017/home.png") }}" alt="">{{ $user->address }}</p>
              <p><img src="{{ secure_asset("/img/new017/tel.png") }}" alt="">{{ $user->tel }}</p>
              <p><img src="{{ secure_asset("/img/new017/mail.png") }}" alt="">{{ $user->email }}</p>
              <p><img src="{{ secure_asset("/img/new017/recruit.png") }}" alt="">求人情報</p>
              <p><img src="{{ secure_asset("/img/new017/position.png") }}" alt="">位置情報</p>

            <a href="" class="btn btn-primary">マイページ編集</a>
              </div>
            </form>
          </div>
        </nav>

      </div>
    </div>
  </div>
