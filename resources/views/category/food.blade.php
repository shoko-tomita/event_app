<link rel="stylesheet" href="{{ secure_asset("/css/style.css") }}">
@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <nav class="panel panel-default">
          <div class="panel-heading"><h5>Food</h5></div>
          <div class="panel-body">
            @if($errors->any())
              <div class="alert alert-danger">
                @foreach($errors->all() as $message)
                  <p>{{ $message }}</p>
                @endforeach
              </div>
            @endif
            <form action="{{ route('category.food') }}" method="POST">
              @csrf
            {{-- <img class="new" src="../../public/img/new017/new017_10.gif" alt="新着スレッド"> --}}
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
            </form>
          </div>
        </nav>

      </div>
    </div>
  </div>
