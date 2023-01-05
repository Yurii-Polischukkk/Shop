

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин: Главная</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('index')}}">Інтернет Магазин</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{route('index')}}">Всі товари</a></li>
                <li ><a href="{{route('categories')}}">Категорії</a>
                </li>
                <li ><a href="{{route('basket')}}">В корзину</a></li>


            </ul>

            <ul class="nav navbar-nav navbar-right">

                @guest
                    <li><a href="{{route('login')}}">Увійти</a></li>
                @endguest
                @auth
                        <li><a href="{{route('home')}}">Замовлення</a></li>
                <li><a href="{{route('get-logout')}}">Вихід</a></li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
<div class="container">
@yield('content')
</div>
</body>
</html>
