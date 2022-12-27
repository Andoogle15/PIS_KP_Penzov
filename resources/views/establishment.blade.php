@extends('layouts.app')

@section('content')
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
@endsection
