<link rel="stylesheet" href="{{ asset("/css/style.css") }}">
@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <nav class="panel panel-default">
          <div class="panel-heading">スレッド詳細</div>
          <div class="panel-body">
            @if($errors->any())
              <div class="alert alert-danger">
                @foreach($errors->all() as $message)
                  <p>{{ $message }}</p>
                @endforeach
              </div>
            @endif

              @csrf

              <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"> {{ $thread->title }}</h5>
                    <p class="card-text">{{ $thread->thread_detail }}</p>

                  </div>
                </div>

                {{-- 位置情報はDBにareaカラムが無いから手入力で入れたものを反映させる --}}
                <label><img src="{{ asset("/img/new017/position.png") }}" alt="">位置情報</label>
                {{-- <label for="title">位置情報</label> --}}
                
                {{-- <input type="position" class="form-control" name="position" id="position" value="{{ old('position') }}" />
              </div> --}}
              <br>
              {{-- {{ route('mypage.office',['id' => $thread->user_id]) }} --}}
              <a href="{{ route('mypage.office',['id' => $thread->user_id]) }}" class="btn btn-primary">お店の詳細</a>
              {{-- {{ route('threads.edit',['id' => $thread->user_id]) }} --}}
              <a href="" class="btn btn-primary">スレッド編集</a>
              <a href="" class="btn btn-primary">スレッド削除</a>

          </div>
        </nav>

      </div>
    </div>
  </div>
