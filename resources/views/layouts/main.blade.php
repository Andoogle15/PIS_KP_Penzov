<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <!--<link rel="stylesheet" type="text/css" href="{{ asset('resources/css/custom.css') }}"> -->
    @vite(['resources/css/custom.css'])
    @vite(['resources/js/custom.js'])
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="https://kit.fontawesome.com/536caefa35.js" crossorigin="anonymous"></script>
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">--}}

    <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
{{--    <script src="https://unpkg.com/@popperjs/core@2https://unpkg.com/@popperjs/core@2https://unpkg.com/@popperjs/core@2" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>--}}
{{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>--}}
    <title>FoodCenter</title>
</head>
<body>
    <header id="header" class="position-relative my-header">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F5F5F5">
            <div class="container-fluid my-container">
                <a href="{{ route('main.index') }}" class="navbar-brand">FoodCenter</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 top-menu">
                        <li class="nav-item">
                            <a href="{{ route('main.index') }}" class="nav-link">Главная</a>
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
                    <form class="d-flex search">
                        <input class="form-control mr-2" type="search" placeholder="Поиск" aria-label="Search">
                        <button class="btn-search btn-outline" type="submit">Поиск</button>
                    </form>
                    <a class="favorites" href="{{ route('favorite.index') }}">
                        <i class="fa-solid fa-heart"></i>
                    </a>
                    <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
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
                            <button type="button" class="btn-modal" data-bs-toggle="modal" data-bs-target="#modalMenu">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                            <div class="modal fade" id="modalMenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <table class="table table-hover table-borderless">
                                            <tbody>
                                            <tr>
                                                <td><a class="modal-menu-link" href="{{ route('profile.index') }}">Профиль</a></td>
                                            </tr>
                                            <tr>
                                                <td><a class="modal-menu-link" href="{{ route('order.index') }}">Заказы</a></td>
                                            </tr>
                                            <tr>
                                                <td><a class="modal-menu-link" href="{{ route('home') }}">Выйти</a></td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
{{--        <i class="fa-solid fa-bars"></i>--}}
    </header>

@yield('content')
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
