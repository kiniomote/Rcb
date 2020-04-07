<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Republican Center for the Blind">
    <meta name="author" content="Попадин Д.В.">
    <meta name="keywords" content="Blind,DNR,Donetsk,слепые,слабовидящие,ДНР,Донецк">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=eada7f02-b7e8-41c3-9ccc-774eba8f5b00&lang=ru_RU" type="text/javascript"></script>
    <script src="{{ asset('js/yamap.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    <link href="{{ asset('css/text.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header class="bg-info">
            <!-- TOP HEADER -->
            <div class="container">
                <div class="row">
                    <div class="mr-auto row ml-0" id="social-networks">
                        <a id="vk_btn" class="row text-decoration-none ml-0" target="_blank" href="https://vk.com/public148497528">
                            <div class="btn btn-primary mb-0">VK</div>
                            <div class="text-white my-auto ml-2 h5">Группа ВКонтакте</div></a>

                    </div>
                    <!--
                    <form class="col-12 col-md-6 d-none d-md-inline text-right" action="" method="post">
                        <input class="ml-auto form-control-sm" type="search" id="search-text" name="input-search" placeholder="Поиск...">
                        <button class="btn btn-info ml-auto " type="submit">Найти</button>
                    </form>
                    -->
                </div>
            </div>
        </header>
        <!-- BOTTOM HEADER -->
        <div class="logo bg-white">
            <div class="container py-2">
                <div class="row">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img class="img-fluid d-none d-md-flex"
                                 src="{{ asset('images/logo.jpg') }}" alt="">
                            <h2 class="h2 text-dark d-inline d-md-none">Республиканский центр слепых</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm py-0">
            <div class="container">
                <div class="h5 d-inline d-lg-none text-white mb-0 my-2">Меню</div>
                <button class="navbar-toggler my-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item {{ request()->routeIs('main') ? 'active' : '' }}">
                            <a class="nav-link h5 mb-0 my-2 mx-4" href="{{ route('main') }}">Главная</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('documents') ? 'active' : '' }}">
                            <a class="nav-link h5 mb-0 my-2 mx-2" href="{{ route('documents') }}">Документы</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('education') ? 'active' : '' }}">
                            <a class="nav-link h5 mb-0 my-2 mx-2" href="{{ route('education') }}">Образование</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('equipment') ? 'active' : '' }}">
                            <a class="nav-link h5 mb-0 my-2 mx-2" href="{{ route('equipment') }}">Оборудование</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('vacancy') ? 'active' : '' }}">
                            <a class="nav-link h5 mb-0 my-2 mx-2" href="{{ route('vacancy') }}">Вакансии</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <div class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="h3 row">
                            <div class="paragraph-marker-h3"></div>
                            <div class="paragraph-h3">Местоположение</div>
                        </div>
                        <div id="myMap" class="myMap"></div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="h3 row">
                            <div class="paragraph-marker-h3"></div>
                            <div class="paragraph-h3">Контактная информация</div>
                        </div>
                        <p>
                            <b>e-mail:</b> <a href="mailto:rcb2016@mail.ru">rcb2016@mail.ru</a><br>
                            <b>skype:</b> <a href="skype:live:.cid.e8072b294e7ecce8?chat">live:.cid.e8072b294e7ecce8</a><br>
                            <b>тел.:</b> 071-332-33-47
                        </p>
                        <div class="text-splitter"></div>
                        <p>
                            <b>Адрес:</b> Донецк, ул. Артема, 74
                            (3-й подъезд, со стороны б. Пушкина)
                        </p>
                        <div class="text-splitter"></div>
                        <p>
                            <b>График работы:</b><br>
                            <b>Пн</b> 9:00 - 18:00<br>
                            <b>Вт</b> 9:00 - 18:00<br>
                            <b>Ср</b> 9:00 - 18:00<br>
                            <b>Чт</b> 9:00 - 18:00<br>
                            <b>Пт</b> 9:00 - 17:00<br>
                            <b>Сб</b> Закрыто<br>
                            <b>Вс</b> Закрыто
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <footer class="">
            <p class="text-white text-center py-2">
                Copyright © 2020 - Официальный сайт Республиканского центра дополнительного образования для слепых и слабовидящих. Все права защищены.
            </p>
        </footer>
    </div>
</body>
</html>
