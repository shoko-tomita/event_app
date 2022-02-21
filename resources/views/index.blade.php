<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>新規・登録済</title>
    <link rel="stylesheet" href="{{ asset("/css/style.css") }}">
    {{-- <link rel="stylesheet" type="text/css" href="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-8/css/reset.css">
    <link rel="stylesheet" type="text/css" href="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-8/css/5-8.css"> --}}
</head>

<body>
    <header>
        <div id="particles-js"></div>
        <div id="wrapper">
        <img class="atumal" src="{{ asset("/iOS-の画像.jpg") }}" alt="あつまる">
    </header>
    <main>
        <a class="btn btn-primary" href="{{ route('register') }}" role="button" method="post">事業登録</a>

        <a class="btn btn-primary" href="{{ route('user.signup') }}" role="button" method="post">一般登録</a>
        <a class="btn btn-primary" href="{{ route('login') }}" role="button" method="POST">登録済</a>

        <a href="{{ route('thread_all') }}" class="link-primary">閲覧のみ</a>


    </main>
    </div>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-8/js/5-8.js">

    particlesJS("particles-js",{
        "particles":{
          "number":{
            "value":80,//この数値を変更すると紙吹雪の数が増減できる
            "density":{
              "enable":false,
              "value_area":400
            }
          },
          "color": {
              "value": ["#EA5532", "#F6AD3C", "#FFF33F", "#00A95F", "#00ADA9", "#00AFEC","#4D4398", "#E85298"]//紙吹雪の色の数を増やすことが出来る
          },
          "shape":{
            "type":"polygon",//形状はpolygonを指定
            "stroke":{
              "width":0,
            },
            "polygon":{
              "nb_sides":5//多角形の角の数
            }
            },
            "opacity":{
              "value":1,
              "random":false,
              "anim":{
                "enable":true,
                "speed":20,
                "opacity_min":0,
                "sync":false
              }
            },
            "size":{
              "value":5.305992965476349,
              "random":true,//サイズをランダムに
              "anim":{
                "enable":true,
                "speed":1.345709068776642,
                "size_min":0.8,
                "sync":false
              }
            },
            "line_linked":{
              "enable":false,
            },
            "move":{
              "enable":true,
            "speed":8,//この数値を小さくするとゆっくりな動きになる
            "direction":"bottom",//下に向かって落ちる
            "random":false,//動きはランダムにならないように
            "straight":false,//動きをとどめない
            "out_mode":"out",//画面の外に出るように描写
            "bounce":false,//跳ね返りなし
              "attract":{
                "enable":false,
                "rotateX":600,
                "rotateY":1200
              }
            }
          },
          "interactivity":{
            "detect_on":"canvas",
            "events":{
              "onhover":{
                "enable":false,
              },
              "onclick":{
                "enable":false,
              },
              "resize":true
            },
          },
          "retina_detect":true
        });

    </script>
</body>

</html>
