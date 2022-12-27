@extends('layouts.app')

@section('content')
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
                                    <small class="small-price">{{ $el->price }}</small> 220руб
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
                                    <small class="small-price">{{ $el->price }}</small> 400руб
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
                                    <small class="small-price">{{ $el->price }}</small> 110руб
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
                                    <small class="small-price">{{ $el->price }}</small> 100руб
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
                                    <small class="small-price">{{ $el->price }}</small> 100руб
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
                                    <small class="small-price">{{ $el->price }}</small> 555руб
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

    </section>
@endsection
