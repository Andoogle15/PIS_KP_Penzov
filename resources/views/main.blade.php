@extends('layouts.main')

@section('content')

    <!-- Carousel -->
    <div class="container-fluid my-carousel">
        <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel"
        data-bs-interval="5000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>

            </div>
            <div class="carousel-inner carousel-inner">
                <div class="carousel-item active display-flex max-height-500">
                    <img src="{{ asset('storage/images/carousel/one.jpg') }}" alt="Carousel">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/images/carousel/two.jpg') }}" alt="Carousel">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/images/carousel/three.jpg') }}" alt="Carousel">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>


    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="product-card">
                        <div class="product-img">
                            <a href="#" alt=""></a>
                        </div>
                        <div class="product-details">
                            <h4><a href="#">Пицца "4 Сезона"</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, velit.</p>
                        </div>
                        <div class="product-bottom-details d-flex justify-content-between">
                            <div class="product-price">
                                <small class="small-price">730руб</small> 480руб
                            </div>
                            <div class="product-button">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <i class="fa-solid fa-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="product-card">
                        <div class="product-img">
                            <a href="#" alt=""></a>
                        </div>
                        <div class="product-details">
                            <h4><a href="#">Пицца "4 Сезона"</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, velit.</p>
                        </div>
                        <div class="product-bottom-details d-flex justify-content-between">
                            <div class="product-price">
                                <small class="small-price">730руб</small> 480руб
                            </div>
                            <div class="product-button">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <i class="fa-solid fa-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="product-card">
                        <div class="product-img">
                            <a href="#" alt=""></a>
                        </div>
                        <div class="product-details">
                            <h4><a href="#">Пицца "4 Сезона"</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, velit.</p>
                        </div>
                        <div class="product-bottom-details d-flex justify-content-between">
                            <div class="product-price">
                                <small class="small-price">730руб</small> 480руб
                            </div>
                            <div class="product-button">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <i class="fa-solid fa-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
