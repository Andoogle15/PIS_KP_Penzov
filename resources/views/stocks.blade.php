@extends('layouts.main')

@section('content')
    <div class="stocks">
        <div class="container">
            <div class="stocks-title">
                <h1>Акции и предложения</h1>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="wrap">
                        <div class="stock-card">
                            <div class="front"><img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt=""></div>
                            <div class="back"><span>Время проведения: 10.09.2022 - 10.12.2022</span></div>
                        </div>
                    </div>

                </div>
                <div class="col-sm">
                    <div class="stock-content">
                        <h4><b>Cчастливые будни</b></h4>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, cupiditate dicta dolorum ea fugit magni nisi nostrum repudiandae suscipit voluptates? Cupiditate dignissimos obcaecati optio possimus, quod similique sit voluptas voluptatum?</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="wrap">
                        <div class="stock-card">
                            <div class="front"><img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt=""></div>
                            <div class="back"><span>Время проведения: 10.09.2022 - 10.12.2022</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="stock-content">
                        <h4><b>Cчастливые будни</b></h4>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, cupiditate dicta dolorum ea fugit magni nisi nostrum repudiandae suscipit voluptates? Cupiditate dignissimos obcaecati optio possimus, quod similique sit voluptas voluptatum?</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
