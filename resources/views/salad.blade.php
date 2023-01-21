@extends('layouts.app')

@section('content')
    <section class="main-content">
        <div class="section-name-sales">
            <h2>Салаты</h2>
        </div>
        <div class="container">
            <div class="row">
                @foreach($data as $element)
                    <div class="column col-lg-4 col-sm-6 mb-3">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="{{ asset($element->photo) }}" alt="">
                            </div>
                            <div class="product-details">
                                <h4>{{ $element->title }}</h4>
                                <div class="product-bottom-details d-flex justify-content-between">
                                    <div class="product-price-sales">
                                        {{ $element->price }}
                                    </div>
                                    <div class="product-links">
                                        <a href="{{ route('add_to_cart', $element->id) }}"><i class="fa-solid fa-cart-shopping"></i></a>
                                        <a href="#"> <i class="fa-solid fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
