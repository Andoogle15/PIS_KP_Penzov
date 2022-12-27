@extends('layouts.app')

@section('content')
    <section class="section-favorite">
        <div class="container">
            <div class="favorite-header">
                <h1>Избранное</h1>
                <div class="favorite-count">
                    Товаров: 4
                </div>
            </div>
            <div class="favorite-cards">
                <div class="favorite-item">
                    <div class="favorite-img">
                        <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                    </div>
                    <div class="favorite-top">
                        <div class="favorite-title">
                            Красный борщ
                        </div>
                        <div class="favorite-desc">
                            300мл.
                        </div>
                    </div>
                    <div class="favorite-estab">Eaty</div>
                    <div class="favorite-bottom">
                        <div class="favorite-price">280руб.</div>
                        <a href="#" class="favorite-cart"><i class="fa-solid fa-cart-shopping"></i></a>
                        <span class="delete"><i class="fa-solid fa-trash"></i></span>
                    </div>
                </div>
                <div class="favorite-item">
                    <div class="favorite-img">
                        <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                    </div>
                    <div class="favorite-top">
                        <div class="favorite-title">
                            Красный борщ
                        </div>
                        <div class="favorite-desc">
                            300мл.
                        </div>
                    </div>
                    <div class="favorite-estab">Eaty</div>
                    <div class="favorite-bottom">
                        <div class="favorite-price">280руб.</div>
                        <a href="#" class="favorite-cart"><i class="fa-solid fa-cart-shopping"></i></a>
                        <span class="delete"><i class="fa-solid fa-trash"></i></span>
                    </div>
                </div>
                <div class="favorite-item">
                    <div class="favorite-img">
                        <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                    </div>
                    <div class="favorite-top">
                        <div class="favorite-title">
                            Красный борщ
                        </div>
                        <div class="favorite-desc">
                            300мл.
                        </div>
                    </div>
                    <div class="favorite-estab">Eaty</div>
                    <div class="favorite-bottom">
                        <div class="favorite-price">280руб.</div>
                        <a href="#" class="favorite-cart"><i class="fa-solid fa-cart-shopping"></i></a>
                        <span class="delete"><i class="fa-solid fa-trash"></i></span>
                    </div>
                </div>
                <div class="brake"></div>
                <div class="favorite-item">
                    <div class="favorite-img">
                        <img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt="">
                    </div>
                    <div class="favorite-top">
                        <div class="favorite-title">
                            Красный борщ
                        </div>
                        <div class="favorite-desc">
                            300мл.
                        </div>
                    </div>
                    <div class="favorite-estab">Eaty</div>
                    <div class="favorite-bottom">
                        <div class="favorite-price">280руб.</div>
                        <a href="#" class="favorite-cart"><i class="fa-solid fa-cart-shopping"></i></a>
                        <span class="delete"><i class="fa-solid fa-trash"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
