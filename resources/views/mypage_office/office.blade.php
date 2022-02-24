<link rel="stylesheet" href="{{ asset("/css/style.css") }}">
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
            <form action="{{ route('mypage.office') }}" method="POST">
              @csrf
            <div class="input-group input-group-sm">
                <span class="input-group-text" id="input-group-sm-example">name</span>
                <input type="text" class="form-control" aria-label="Small input group" aria-describedby="input-group-sm">
            </div>
            <div class="input-group input-group-sm">
                <span class="input-group-text" id="input-group-sm-example">address</span>
                <input type="text" class="form-control" aria-label="Small input group" aria-describedby="input-group-sm">
            </div>
            <div class="input-group input-group-sm">
                <span class="input-group-text" id="input-group-sm-example">email</span>
                <input type="text" class="form-control" aria-label="Small input group" aria-describedby="input-group-sm">
            </div>
            <div class="input-group input-group-sm">
                <span class="input-group-text" id="input-group-sm-example">tel</span>
                <input type="text" class="form-control" aria-label="Small input group" aria-describedby="input-group-sm">
            </div>
            <div class="input-group input-group-sm">
                <span class="input-group-text" id="input-group-sm-example">位置情報</span>
                <input type="text" class="form-control" aria-label="Small input group" aria-describedby="input-group-sm">
            </div>
            <div class="input-group input-group-sm">
                <span class="input-group-text" id="input-group-sm-example">求人情報</span>
                <input type="text" class="form-control" aria-label="Small input group" aria-describedby="input-group-sm">
            </div>
            <div class="input-group input-group-sm">
                <span class="input-group-text" id="input-group-sm-example">password</span>
                <input type="text" class="form-control" aria-label="Small input group" aria-describedby="input-group-sm">
            </div>
            <a href="" class="btn btn-primary">スレッド編集</a>
              </div>
            </form>
          </div>
        </nav>

      </div>
    </div>
  </div>
