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
            <a href="{{ route('welcomeUnlog.index') }}" class="navbar-brand">FoodCenter</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 top-menu">
                    <li class="nav-item">
                        <a href="{{ route('stockUnlog.index') }}" class="nav-link">Акции</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contactUnlog.index') }}" class="nav-link">Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('infoUnlog.index') }}" class="nav-link">Доставка и оплата</a>
                    </li>
                </ul>
                <form class="d-flex search">
                    <input class="form-control mr-2" type="search" placeholder="Поиск" aria-label="Search">
                    <button class="btn-search btn-outline" type="submit">Поиск</button>
                </form>

                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">

                    <li>
                        <div class="linkToLogReg">
                            <a href="{{ route('login') }}" class="linksToLogin">Войти</a>
                            <a href="{{ route('register') }}" class="linksToLogin">Регистрация</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    {{--        <i class="fa-solid fa-bars"></i>--}}
</header>

<div class="container">
        <div class="info">
            <div class="info-title">
                <h1>Доставка и оплата</h1>
            </div>
            <div class="info-description">
                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dolores iste optio quas, sint
                    voluptatem! Assumenda illo inventore libero quos unde voluptatem? Architecto magni possimus, quas qui
                    soluta voluptas voluptatem!
                </div>
                <div>Adipisci aliquam assumenda at atque blanditiis doloribus harum hic id ipsum mollitia quisquam
                    similique, sunt ullam, veritatis voluptate. Alias delectus dolorem esse exercitationem hic incidunt
                    itaque officiis porro repellat sint.
                </div>
                <div>Accusantium cupiditate dolore id magnam modi provident quas quia voluptates! Adipisci alias architecto
                    atque aut autem dolore doloremque eligendi iure laudantium molestias nesciunt odit provident reiciendis
                    sequi tempore, totam veritatis!
                </div>
                <div>Accusamus ad autem corporis debitis deserunt ea eos error hic illo impedit nisi, nostrum officia
                    officiis pariatur quaerat quas qui, quibusdam quidem quod recusandae sed sequi similique temporibus unde
                    ut!
                </div>
            </div>
            <div class="info-map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab0730f57e086bfa3b96b6fd9734d142536cd6ac478ca84cb1b196bea5bab1d90&amp;width=1272&amp;height=641&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
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


