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
            {{-- <form action="{{ route('office.edit') }}" method="POST"> --}}
              @csrf
              {{-- {{ old('title', $task->title) }} --}}
              <label> {{ old('name', $user->name) }}</label>
              <p><img src="{{ asset("/img/new017/home.png") }}" alt="">{{ old ('address', $user->address ) }}</p>
              <p><img src="{{ asset("/img/new017/tel.png") }}" alt="">{{ old ('tel', $user->tel) }}</p>
              <p><img src="{{ asset("/img/new017/mail.png") }}" alt="">{{ old ('email', $user->email) }}</p>
              <p><img src="{{ asset("/img/new017/recruit.png") }}" alt="">求人情報</p>
              <p><img src="{{ asset("/img/new017/position.png") }}" alt="">位置情報</p>

            <a href="" class="btn btn-primary">マイページ編集</a>
              </div>
            </form>
          </div>
        </nav>

      </div>
    </div>
  </div>
