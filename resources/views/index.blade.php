<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>新規・登録済</title>
    <link rel="stylesheet" href="{{ asset("/css/style.css") }}">
</head>

<body>
    <header>
        <button type="button" class="btn btn-link">Link</button>
    </header>
    <main>
        <a class="btn btn-primary" href="{{ route('register') }}" role="button" method="post">一般登録</a>

        <a class="btn btn-primary" href="{{ route('user.signup') }}" role="button" method="post">事業登録</a>
        <a class="btn btn-primary" href="{{ route('login') }}" role="button" method="POST">登録済</a>

        <a href="{{ route('thread_all') }}" class="link-primary">閲覧のみ</a>

    </main>

</body>

</html>
