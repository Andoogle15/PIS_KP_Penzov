@extends('layouts.app')

@section('content')
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-8">
                    <h1 id="start-page">Food Center</h1>
                    <h2>Быстро. Вкусно. А что еще надо?</h2>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="icon-box">
                        <a href="{{ route('restaurant.allData') }}"><i class="fa-solid fa-utensils"></i></a>
                        <h3><a href="{{ route('restaurant.allData') }}">Рестораны</a></h3>
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
                        <a href="{{ route('firstCourse.allData') }}"><i class="fa-solid fa-bowl-food"></i></a>
                        <h3><a href="{{ route('firstCourse.allData') }}">Первые блюда</a></h3>
                    </div>
                </div>

                <div class="col-xl-2 col-md-4 col-6">
                    <div class="icon-box">
                        <a href="{{ route('secondCourse.allData') }}"><i class="fa-solid fa-plate-wheat"></i></a>
                        <h3><a href="{{ route('secondCourse.allData') }}">Вторые блюда</a></h3>
                    </div>
                </div>

                <div class="col-xl-2 col-md-4 col-6">
                    <div class="icon-box">
                        <a href="{{ route('salad.allData') }}"><i class="fa-solid fa-seedling"></i></a>
                        <h3><a href="{{ route('salad.allData') }}">Салаты</a></h3>
                    </div>
                </div>

                <div class="col-xl-2 col-md-4 col-6">
                    <div class="icon-box">
                        <a href="{{ route('drink.allData') }}"><i class="fa-solid fa-martini-glass"></i></a>
                        <h3><a href="{{ route('drink.allData') }}">Напитки</a></h3>
                    </div>
                </div>

                <div class="col-xl-2 col-md-4 col-6">
                    <div class="icon-box">
                        <a href="{{ route('pizza.allData') }}"><i class="fa-solid fa-pizza-slice"></i></a>
                        <h3><a href="{{ route('pizza.allData') }}">Пицца</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <a href="#" class="arrowUp"><i class="fa-solid fa-arrow-up"></i></a>
    <section class="main-content">
        <div class="section-name">
            <h2>Выгодные предложения</h2>
        </div>
        <div class="container-cards">
            <div class="product-cards">
                @foreach($one as $el)
                    <div class="product-card">
                        <div class="product-img">
                            <img src="{{ asset($el->photo) }}" alt="">
                        </div>
                        <div class="product-details">
                            <h4>{{ $el->title }}</h4>
                            <div class="product-bottom-details d-flex justify-content-between">
                                <div class="product-price-sales">
                                    <small class="small-price">{{ $el->price }}</small> 480руб
                                </div>
                                <div class="product-links">
                                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                    <a href="#"> <i class="fa-solid fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    @foreach($two as $el)
                        <div class="product-card">
                            <div class="product-img">
                                <img src="{{ asset($el->photo) }}" alt="">
                            </div>
                            <div class="product-details">
                                <h4>{{ $el->title }}</h4>
                                <div class="product-bottom-details d-flex justify-content-between">
                                    <div class="product-price-sales">
                                        <small class="small-price">{{ $el->price }}</small> 480руб
                                    </div>
                                    <div class="product-links">
                                        <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                        <a href="#"> <i class="fa-solid fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @foreach($three as $el)
                        <div class="product-card">
                            <div class="product-img">
                                <img src="{{ asset($el->photo) }}" alt="">
                            </div>
                            <div class="product-details">
                                <h4>{{ $el->title }}</h4>
                                <div class="product-bottom-details d-flex justify-content-between">
                                    <div class="product-price-sales">
                                        <small class="small-price">{{ $el->price }}</small> 480руб
                                    </div>
                                    <div class="product-links">
                                        <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                        <a href="#"> <i class="fa-solid fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @foreach($four as $el)
                        <div class="product-card">
                            <div class="product-img">
                                <img src="{{ asset($el->photo) }}" alt="">
                            </div>
                            <div class="product-details">
                                <h4>{{ $el->title }}</h4>
                                <div class="product-bottom-details d-flex justify-content-between">
                                    <div class="product-price-sales">
                                        <small class="small-price">{{ $el->price }}</small> 480руб
                                    </div>
                                    <div class="product-links">
                                        <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                        <a href="#"> <i class="fa-solid fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @foreach($five as $el)
                        <div class="product-card">
                            <div class="product-img">
                                <img src="{{ asset($el->photo) }}" alt="">
                            </div>
                            <div class="product-details">
                                <h4>{{ $el->title }}</h4>
                                <div class="product-bottom-details d-flex justify-content-between">
                                    <div class="product-price-sales">
                                        <small class="small-price">{{ $el->price }}</small> 480руб
                                    </div>
                                    <div class="product-links">
                                        <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                        <a href="#"> <i class="fa-solid fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @foreach($six as $el)
                        <div class="product-card">
                            <div class="product-img">
                                <img src="{{ asset($el->photo) }}" alt="">
                            </div>
                            <div class="product-details">
                                <h4>{{ $el->title }}</h4>
                                <div class="product-bottom-details d-flex justify-content-between">
                                    <div class="product-price-sales">
                                        <small class="small-price">{{ $el->price }}</small> 480руб
                                    </div>
                                    <div class="product-links">
                                        <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                        <a href="#"> <i class="fa-solid fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

            </div>

        </div>
        <a class="more-sales" href="{{ route('sale.index') }}">Больше</a>
    </section>
    <section class="main-content">
        <div class="section-name">
            <h2>Рестораны</h2>
        </div>
        <div class="container-cards">
            <div class="product-cards">
                @foreach($seven as $est)
                    <div class="restaurant-card">
                        <div class="restaurant-img">
                            <a href="{{ route('establishment.allData') }}"><img src="{{ asset($est->photo) }}" alt=""></a>
                        </div>
                        <div class="restaurant-info">
                            <a  class="restaurant-title" href="{{ route('establishment.allData') }}">
                                <h4>{{ $est->title }}</h4>
                            </a>
                            <div class="restaurant-address">
                                <div class="address-street">
                                    {{ $est->street }}
                                </div>
                                <div class="address-home">
                                    {{ $est->house }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <a class="more-sales" href="{{ route('restaurant.allData') }}">Больше</a>
    </section>
@endsection
