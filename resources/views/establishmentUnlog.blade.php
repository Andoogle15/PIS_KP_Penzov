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
    <div class="section section-estab">
        <div class="container">
            <section class="section-estab-header">
                <div class="estab-header">
                    <div class="estab-img">
                        <img src="{{ asset('./storage/images/estab/eaty.jpg') }}" alt="">
                    </div>
                    <div class="estab-text">Eaty</div>
                    <hr class="line">
                    <div class="estab-header-footer">Прием заказов до 23:00</div>
                </div>
            </section>
            <div class="category-tags">
                <a class="category-tag" title="Первые блюда" href="#first"><i class="fa-solid fa-bowl-food"><span>Первые блюда</span></i></a>
                <a class="category-tag" title="Вторые блюда" href="#second"><i class="fa-solid fa-plate-wheat"><span>Вторые блюда</span></i></a>
                <a class="category-tag" title="Салаты" href="#salads"><i class="fa-solid fa-seedling"><span>Салаты</span></i></a>
                <a class="category-tag" title="Напитки" href="#drinks"><i class="fa-solid fa-martini-glass"><span>Напитки</span></i></a>
                <a class="category-tag" title="Пицца" href="#pizza"><i class="fa-solid fa-pizza-slice"><span>Пицца</span></i></a>
            </div>
            <section class="estab-menu">

                <div id="first" class="section-menu-title">Первые блюда</div>

                <div class="menu-list">
                    <div class="menu-list-items">
                        <div class="menu-list-item">
                            <div class="menu-list-item-img">
                                <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                            </div>
                            <div class="menu-list-item-title">
                                Красный борщ
                            </div>
                            <div class="menu-list-item-desc">300мл</div>
                            <div class="menu-list-item-bottom">
                                <div class="menu-list-item-price">250руб.</div>
                                <a class="menu-list-item-cart" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>

                        </div>
                        <div class="menu-list-item">
                            <div class="menu-list-item-img">
                                <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                            </div>
                            <div class="menu-list-item-title">
                                Красный борщ
                            </div>
                            <div class="menu-list-item-desc">300мл</div>
                            <div class="menu-list-item-bottom">
                                <div class="menu-list-item-price">250руб.</div>
                                <a class="menu-list-item-cart" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                        <div class="menu-list-item">
                            <div class="menu-list-item-img">
                                <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                            </div>
                            <div class="menu-list-item-title">
                                Красный борщ
                            </div>
                            <div class="menu-list-item-desc">300мл</div>
                            <div class="menu-list-item-bottom">
                                <div class="menu-list-item-price">250руб.</div>
                                <a class="menu-list-item-cart" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                        <div class="break"></div>
                    </div>
                </div>

                <div id="second" class="section-menu-title">Вторые блюда</div>
                <div class="menu-list">
                    <div class="menu-list-items">
                        <div class="menu-list-item">
                            <div class="menu-list-item-img">
                                <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                            </div>
                            <div class="menu-list-item-title">
                                Красный борщ
                            </div>
                            <div class="menu-list-item-desc">300мл</div>
                            <div class="menu-list-item-bottom">
                                <div class="menu-list-item-price">250руб.</div>
                                <a class="menu-list-item-cart" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>

                        </div>
                        <div class="menu-list-item">
                            <div class="menu-list-item-img">
                                <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                            </div>
                            <div class="menu-list-item-title">
                                Красный борщ
                            </div>
                            <div class="menu-list-item-desc">300мл</div>
                            <div class="menu-list-item-bottom">
                                <div class="menu-list-item-price">250руб.</div>
                                <a class="menu-list-item-cart" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                        <div class="menu-list-item">
                            <div class="menu-list-item-img">
                                <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                            </div>
                            <div class="menu-list-item-title">
                                Красный борщ
                            </div>
                            <div class="menu-list-item-desc">300мл</div>
                            <div class="menu-list-item-bottom">
                                <div class="menu-list-item-price">250руб.</div>
                                <a class="menu-list-item-cart" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                        <div class="break"></div>
                        <div class="menu-list-item">
                            <div class="menu-list-item-img">
                                <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                            </div>
                            <div class="menu-list-item-title">
                                Красный борщ
                            </div>
                            <div class="menu-list-item-desc">300мл</div>
                            <div class="menu-list-item-bottom">
                                <div class="menu-list-item-price">250руб.</div>
                                <a class="menu-list-item-cart" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                        <div class="menu-list-item">
                            <div class="menu-list-item-img">
                                <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                            </div>
                            <div class="menu-list-item-title">
                                Красный борщ
                            </div>
                            <div class="menu-list-item-desc">300мл</div>
                            <div class="menu-list-item-bottom">
                                <div class="menu-list-item-price">250руб.</div>
                                <a class="menu-list-item-cart" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                        <div class="menu-list-item">
                            <div class="menu-list-item-img">
                                <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                            </div>
                            <div class="menu-list-item-title">
                                Красный борщ
                            </div>
                            <div class="menu-list-item-desc">300мл</div>
                            <div class="menu-list-item-bottom">
                                <div class="menu-list-item-price">250руб.</div>
                                <a class="menu-list-item-cart" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                        <div class="break"></div>
                    </div>
                </div>

                <div id="salads" class="section-menu-title">Салаты</div>
                <div class="menu-list">
                    <div class="menu-list-items">
                        <div class="menu-list-item">
                            <div class="menu-list-item-img">
                                <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                            </div>
                            <div class="menu-list-item-title">
                                Красный борщ
                            </div>
                            <div class="menu-list-item-desc">300мл</div>
                            <div class="menu-list-item-bottom">
                                <div class="menu-list-item-price">250руб.</div>
                                <a class="menu-list-item-cart" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>

                        </div>
                        <div class="menu-list-item">
                            <div class="menu-list-item-img">
                                <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                            </div>
                            <div class="menu-list-item-title">
                                Красный борщ
                            </div>
                            <div class="menu-list-item-desc">300мл</div>
                            <div class="menu-list-item-bottom">
                                <div class="menu-list-item-price">250руб.</div>
                                <a class="menu-list-item-cart" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                        <div class="break"></div>
                    </div>
                </div>

                <div id="drinks" class="section-menu-title">Напитки</div>
                <div class="menu-list">
                    <div class="menu-list-items">
                        <div class="menu-list-item">
                            <div class="menu-list-item-img">
                                <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                            </div>
                            <div class="menu-list-item-title">
                                Красный борщ
                            </div>
                            <div class="menu-list-item-desc">300мл</div>
                            <div class="menu-list-item-bottom">
                                <div class="menu-list-item-price">250руб.</div>
                                <a class="menu-list-item-cart" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                        <div class="menu-list-item">
                            <div class="menu-list-item-img">
                                <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                            </div>
                            <div class="menu-list-item-title">
                                Красный борщ
                            </div>
                            <div class="menu-list-item-desc">300мл</div>
                            <div class="menu-list-item-bottom">
                                <div class="menu-list-item-price">250руб.</div>
                                <a class="menu-list-item-cart" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                        <div class="menu-list-item">
                            <div class="menu-list-item-img">
                                <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                            </div>
                            <div class="menu-list-item-title">
                                Красный борщ
                            </div>
                            <div class="menu-list-item-desc">300мл</div>
                            <div class="menu-list-item-bottom">
                                <div class="menu-list-item-price">250руб.</div>
                                <a class="menu-list-item-cart" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                        <div class="break"></div>
                        <div class="menu-list-item">
                            <div class="menu-list-item-img">
                                <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                            </div>
                            <div class="menu-list-item-title">
                                Красный борщ
                            </div>
                            <div class="menu-list-item-desc">300мл</div>
                            <div class="menu-list-item-bottom">
                                <div class="menu-list-item-price">250руб.</div>
                                <a class="menu-list-item-cart" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                        <div class="menu-list-item">
                            <div class="menu-list-item-img">
                                <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                            </div>
                            <div class="menu-list-item-title">
                                Красный борщ
                            </div>
                            <div class="menu-list-item-desc">300мл</div>
                            <div class="menu-list-item-bottom">
                                <div class="menu-list-item-price">250руб.</div>
                                <a class="menu-list-item-cart" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                        <div class="break"></div>
                    </div>
                </div>

                <div id="pizza" class="section-menu-title">Пицца</div>
                <div class="menu-list">
                    <div class="menu-list-items">
                        <div class="menu-list-item">
                            <div class="menu-list-item-img">
                                <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                            </div>
                            <div class="menu-list-item-title">
                                Красный борщ
                            </div>
                            <div class="menu-list-item-desc">300мл</div>
                            <div class="menu-list-item-bottom">
                                <div class="menu-list-item-price">250руб.</div>
                                <a class="menu-list-item-cart" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                        <div class="menu-list-item">
                            <div class="menu-list-item-img">
                                <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                            </div>
                            <div class="menu-list-item-title">
                                Красный борщ
                            </div>
                            <div class="menu-list-item-desc">300мл</div>
                            <div class="menu-list-item-bottom">
                                <div class="menu-list-item-price">250руб.</div>
                                <a class="menu-list-item-cart" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                        <div class="menu-list-item">
                            <div class="menu-list-item-img">
                                <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                            </div>
                            <div class="menu-list-item-title">
                                Красный борщ
                            </div>
                            <div class="menu-list-item-desc">300мл</div>
                            <div class="menu-list-item-bottom">
                                <div class="menu-list-item-price">250руб.</div>
                                <a class="menu-list-item-cart" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                        <div class="break"></div>
                        <div class="menu-list-item">
                            <div class="menu-list-item-img">
                                <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                            </div>
                            <div class="menu-list-item-title">
                                Красный борщ
                            </div>
                            <div class="menu-list-item-desc">300мл</div>
                            <div class="menu-list-item-bottom">
                                <div class="menu-list-item-price">250руб.</div>
                                <a class="menu-list-item-cart" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                        <div class="break"></div>
                    </div>
                </div>
            </section>
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
