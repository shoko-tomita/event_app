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
            <form action="{{ route('threads.disp') }}" method="POST">
              @csrf
              {{ $thread->title }}
              <div class="form-group">
                <label for="title">スレッド名</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" />
                <label for="title">スレッド内容</label>
                <input type="text" class="form-control" name="text" id="text" value="{{ old('text') }}" />
                <label for="title">位置情報</label>
                <input type="position" class="form-control" name="position" id="position" value="{{ old('position') }}" />
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-primary">お店のページ</button>
              </div>
            </form>
          </div>
        </nav>

      </div>
    </div>
  </div>
