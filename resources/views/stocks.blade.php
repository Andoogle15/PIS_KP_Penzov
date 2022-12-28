@extends('layouts.app')

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
                            <div class="front"><img src="{{ asset('./storage/images/sales/sale1.jpg') }}" alt=""></div>
                            <div class="back"><span>Время проведения: 31.11.2022 - 31.12.2022</span></div>
                        </div>
                    </div>

                </div>
                <div class="col-sm">
                    <div class="stock-content">
                        <h4><b>Cчастливые будни</b></h4>
                        <span>Счастливые будни? Звучит потрясно!
                        <p>Целый месяц по будним дня вас ждут ошеломительные скидки! Каждый день скидки на разные категории еды. Не упустите возможность вкусно покушать!</p>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="wrap">
                        <div class="stock-card">
                            <div class="front"><img src="{{ asset('./storage/images/sales/sale2.jpg') }}" alt=""></div>
                            <div class="back"><span>Время проведения: 20.12.2022 - 31.12.2022</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="stock-content">
                        <h4><b>Приятный Бонус</b></h4>
                        <span>Лучшая акция для тек, кто желает совершать покупки выгодно! До 30% кешбек при оплате картой в четные дни недели, и маленький новогодний сюрприз от FoodCenter, при оплате наличными</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
