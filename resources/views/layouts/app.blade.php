<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}
    <title>FoodCenter</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    @vite(['resources/css/custom.css'])
    <script src="https://kit.fontawesome.com/536caefa35.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md text-black shadow-sm" style="background-color: #F5F5F5">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('home') }}">
                    FoodCenter
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class=" collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 top-menu">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('stock.index') }}" class="nav-link">Акции</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact.index') }}" class="nav-link">Контакты</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('info.index') }}" class="nav-link">Доставка и оплата</a>
                        </li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item-login">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item-login">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                </li>
                            @endif
                        @else


                            <form class="d-flex search">
                                <input class="form-control mr-2" type="search" placeholder="Поиск" aria-label="Search">
                                <button class="btn-search btn-outline" type="submit">Поиск</button>
                            </form>
                            <a class="favorites" href="{{ route('favorite.index') }}">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                            <li class="nav-item">
                                <button type="button" class="btn-modal" data-bs-toggle="modal" data-bs-target="#modalCart">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                                <div class="modal fade" id="modalCart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header text-black" style="background-color: #F5F5F5">
                                                <h5 class="modal-title" id="exampleModalLabel">Корзина</h5>
                                                <button type="button" class="close bg-transparent text-white" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table table-hover table-borderless ">
                                                    <tbody>
                                                    <tr>
                                                        <td><img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt=""></td>
                                                        <td><a href="#">Пицца "4 Сезона"</a></td>
                                                        <td>480руб</td>
                                                        <td>1</td>
                                                        <td><a href="#">X</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt=""></td>
                                                        <td><a href="#">Пицца "4 Сезона"</a></td>
                                                        <td>480руб</td>
                                                        <td>1</td>
                                                        <td><a href="#">X</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt=""></td>
                                                        <td><a href="#">Пицца "4 Сезона"</a></td>
                                                        <td>480руб</td>
                                                        <td>1</td>
                                                        <td><a href="#">X</a></td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <a class="toorder-btn" href="{{ route('makeOrder.index') }}">Оформить заказ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="orders" href=" {{ route('order.index') }}"><i class="fa-sharp fa-solid fa-receipt"></i></a>
                            </li>

                            <li class="nav-item">
                                <button type="button" class="btn-modal" data-bs-toggle="modal" data-bs-target="#logoutMenu">
                                    {{ Auth::user()->name }}
                                </button>
                                <div class="modal fade" id="logoutMenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <a  href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Выйти') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                    {{ Auth::user()->name }}--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Выйти') }}--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </li>--}}

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')

    </div>
    <footer>
        <section class="footer">
            <div class="container">
                <div class="row">

                    <div class="col-md-3 col-6">
                        <h4>Информация</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">Главная</a></li>
                            <li><a href="#">О нас</a></li>
                            <li><a href="#">Оплата и доставка</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-6">
                        <h4>Время работы</h4>
                        <ul class="list-unstyled">
                            <li>Юр.-адрес: г. Севастополь, ул.Нахимова, 1</li>
                            <li>Время приема: пн-пт: 9:00-18:00</li>
                            <li>Время работы доставки: пн-вс: 8:00-23:00 </li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-6">
                        <h4>Контакты</h4>
                        <ul class="list-unstyled">
                            <li><a href="tel:5551234567">555 123-45-67</a></li>
                            <li><a href="tel:5551234568">555 123-45-68</a></li>
                            <li><a href="tel:5551234569">555 123-45-69</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-6">
                        <h4>Социальные сети</h4>
                        <div class="footer-icons">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            <a href="#"><i class="fa-brands fa-telegram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
