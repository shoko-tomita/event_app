<link rel="stylesheet" href="{{ asset("/css/style.css") }}">
@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <nav class="panel panel-default">
          <div class="panel-heading">マイページ・事業所/編集</div>
          <div class="panel-body">
            @if($errors->any())
              <div class="alert alert-danger">
                @foreach($errors->all() as $message)
                  <p>{{ $message }}</p>
                @endforeach
              </div>
            @endif


                 <form action="{{ route('update',['id' => $office->id]) }}" method="POST">
              @csrf


              <div class="form-group">
                <label for="title">会社名</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ old('name', $office->name) }}" />
                <label for="title">住所</label>
                <input type="text" class="form-control" name="text" id="text" value="{{ old ('address', $office->address ) }}" />
                <label for="position">電話番号</label>
                <input type="position" class="form-control" name="position" id="position" value="{{ old ('tel', $office->tel) }}" />
                <label for="position">メールアドレス</label>
                <input type="position" class="form-control" name="position" id="position" value="{{ old ('email', $office->email) }}" />
                <label for="position">求人情報</label>
                <input type="position" class="form-control" name="position" id="position" value="" />
                <label for="position">位置情報</label>
                <input type="position" class="form-control" name="position" id="position" value="" />
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-primary">更新</button>
              </div>

              {{-- <input type="text" name="name" value=" {{ old('name', $office->name) }}" >
              <img src="{{ asset("/img/new017/home.inputng") }}" alt="">
              <input type="text" name="name" value=" {{ old ('address', $office->address ) }}" >
              <input><img src="{{ asset("/img/new017/tel.png") }}" alt="">{{ old ('tel', $office->tel) }}</p>
              <input><img src="{{ asset("/img/new017/mail.inputng") }}" alt="">{{ old ('email', $office->email) }}</input>
              <p><img src="{{ asset("/img/new017/recruit.png") }}" alt="">求人情報</p>
              <p><img src="{{ asset("/img/new017/inputosition.png") }}" alt="">位置情報</p>

            <a href="" class="btn btn-primary">更新</a> --}}
              </div>
            </form>
          </div>
        </nav>

      </div>
    </div>
  </div>
