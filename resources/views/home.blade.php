@extends('layouts.app')

@section('content')
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-8">
                    <h1 id="start-page">Food Center</h1>
                    <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="icon-box">
                        <a href="{{ route('restaurant.index') }}"><i class="fa-solid fa-utensils"></i></a>
                        <h3><a href="{{ route('restaurant.index') }}">Рестораны</a></h3>
                    </div>
                </div>

                <div class="col-xl-2 col-md-4 col-6">
                    <div class="icon-box">
                        <a href="{{ route('sale.index') }}"><i class="fa-solid fa-percent"></i></a>
                        <h3><a href="{{ route('sale.index') }}">Выгодные предложения</a></h3>
                    </div>
                </div>

                <div class="col-xl-2 col-md-4 col-6">
                    <div class="icon-box">
                        <a href="#"><i class="fa-solid fa-bowl-food"></i></a>
                        <h3><a href="#">Первые блюда</a></h3>
                    </div>
                </div>

                <div class="col-xl-2 col-md-4 col-6">
                    <div class="icon-box">
                        <a href="#"><i class="fa-solid fa-plate-wheat"></i></a>
                        <h3><a href="#">Вторые блюда</a></h3>
                    </div>
                </div>

                <div class="col-xl-2 col-md-4 col-6">
                    <div class="icon-box">
                        <a href="#"><i class="fa-solid fa-seedling"></i></a>
                        <h3><a href="#">Салаты</a></h3>
                    </div>
                </div>

                <div class="col-xl-2 col-md-4 col-6">
                    <div class="icon-box">
                        <a href="#"><i class="fa-solid fa-martini-glass"></i></a>
                        <h3><a href="#">Напитки</a></h3>
                    </div>
                </div>

                <div class="col-xl-2 col-md-4 col-6">
                    <div class="icon-box">
                        <a href="#"><i class="fa-solid fa-pizza-slice"></i></a>
                        <h3><a href="#">Пицца</a></h3>
                    </div>
                </div>

                <div class="col-xl-2 col-md-4 col-6">
                    <div class="icon-box">
                        <a href="#"><i class="fa-solid fa-fish-fins"></i></a>
                        <h3><a href="#">Суши</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <a href="#" class="arrowUp"><i class="fa-solid fa-arrow-up"></i></a>
    <section class="main-content">
        <div class="section-name">
            <h2>Популярные блюда</h2>
        </div>
        <div class="container-cards">
            <div class="product-cards">
                <div class="product-card">
                    <div class="product-img">
                        <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                    </div>
                    <div class="product-details">
                        <h4>Пицца "4 Сезона</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, velit.</p>
                        <div class="product-bottom-details d-flex justify-content-between">
                            <div class="product-price">
                                730руб
                            </div>
                            <div class="product-links">
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                <a href="#"> <i class="fa-solid fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                    </div>
                    <div class="product-details">
                        <h4>Пицца "4 Сезона</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, velit.</p>
                        <div class="product-bottom-details d-flex justify-content-between">
                            <div class="product-price">
                                730руб
                            </div>
                            <div class="product-links">
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                <a href="#"> <i class="fa-solid fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                    </div>
                    <div class="product-details">
                        <h4>Пицца "4 Сезона</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, velit.</p>
                        <div class="product-bottom-details d-flex justify-content-between">
                            <div class="product-price">
                                730руб
                            </div>
                            <div class="product-links">
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                <a href="#"> <i class="fa-solid fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="brake"></div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                    </div>
                    <div class="product-details">
                        <h4>Пицца "4 Сезона</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, velit.</p>
                        <div class="product-bottom-details d-flex justify-content-between">
                            <div class="product-price">
                                730руб
                            </div>
                            <div class="product-links">
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                <a href="#"> <i class="fa-solid fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                    </div>
                    <div class="product-details">
                        <h4>Пицца "4 Сезона</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, velit.</p>
                        <div class="product-bottom-details d-flex justify-content-between">
                            <div class="product-price">
                                730руб
                            </div>
                            <div class="product-links">
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                <a href="#"> <i class="fa-solid fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                    </div>
                    <div class="product-details">
                        <h4>Пицца "4 Сезона</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, velit.</p>
                        <div class="product-bottom-details d-flex justify-content-between">
                            <div class="product-price">
                                730руб
                            </div>
                            <div class="product-links">
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                <a href="#"> <i class="fa-solid fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="brake"></div>
            </div>

        </div>
    </section>
@endsection
