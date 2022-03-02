<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>マイページ・一般ユーザー</title>
    <link rel="stylesheet" href="{{ secure_asset("/css/style.css") }}">
</head>

<body>
    <header>
        <button type="button" class="btn btn-link"></button>
    </header>
    <main>
        <img src="assets/images/bs-images/img-2x1.png" class="img-fluid" alt="img-fluid">

         <!-- ユーザー登録で画像無くてもいいかな？
         mypageから画像登録でもいいかも -->

         @if($errors->any())
         <div class="alert alert-danger">
           @foreach($errors->all() as $message)
             <p>{{ $message }}</p>
           @endforeach
         </div>
       @endif
       <form action="{{ route('register') }}" method="POST">
         @csrf
        <div class="input-group input-group-sm">
            <span class="input-group-text" id="input-group-sm-example">name</span>
            <input type="text" class="form-control" aria-label="Small input group" aria-describedby="input-group-sm">
          </div>
        <div class="input-group input-group-sm">
            <span class="input-group-text" id="input-group-sm-example">email</span>
            <input type="text" class="form-control" aria-label="Small input group" aria-describedby="input-group-sm">
          </div>
          <div class="input-group input-group-sm">
            <span class="input-group-text" id="input-group-sm-example">password</span>
            <input type="text" class="form-control" aria-label="Small input group" aria-describedby="input-group-sm">
          </div>
          <button type="button" class="btn btn-outline-primary" data-bs-toggle="button" autocomplete="off">編集</button>
        </form>
    </main>

</body>
<script src="../js/event.js"></script>
</html>
