<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>事業所・一般ユーザー</title>
    <link rel="stylesheet" href="{{ asset("/css/style.css") }}">
</head>

<body>
    <header>
        <button type="button" class="btn btn-link">Link</button>
    </header>
    <main>

        {{-- 遷移先ページに記述がわからない --}}
        <a class="btn btn-primary" href="{{ route('office_registration') }}" role="button" method="POST">事業所</a>
        <a class="btn btn-primary" href="{{ route('general_registration') }}" role="button" method="POST">一般ユーザー</a>

       <p>ですか？</p>
    </main>

</body>

</html>
