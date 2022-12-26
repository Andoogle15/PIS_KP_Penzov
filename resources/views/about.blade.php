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
            <a href="{{ url('/') }}" class="navbar-brand">FoodCenter</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 top-menu">
                    <span>/  О нас</span>
                </ul>
            </div>
        </div>
    </nav>
    {{--        <i class="fa-solid fa-bars"></i>--}}
</header>
   <section class="welcome-screen">
       <div class="container">
           <div class="welcome-screen">
               <div class="welcome-img">
                   <img src="{{ asset('./storage/images/about.jpg') }}" alt="">
               </div>
               <div class="welcome-text">
                   <div class="welcome-misson">Наша задача:</div>
                   <div class="welcome-phrase">Быстро доставить качественную еду нашему клиенту</div>
                   <div class="welcome-citate">Есть — значит жить, значит работать, значит строить, творить, мыслить.</div>
               </div>
           </div>
       </div>
   </section>

    <section class="aboutfoodcenter">
        <div class="container">
            <div class="aboutfoodcenter-content">
                <div class="aboutfoodcenter-title">Что такое FoodCenter?</div>
                <div class="aboutfoodcenter-text">FoodCenter - маркетплейс, площадка, на которой рестораны, кафе и другие заведения по питанию выставляю свой ассортимент на продажу. После приеобретения и оформления заказа, наши курьер доставят его Вам на столько быстро, на сколько это возможно. Для нас главное, чтобы клиент получил свежую и довезенную в сохранности еду и остался доволен.
                    <p></p>
                    <p>Мы понимаем на сколько важно качественное обслуживание для клиентов, потому что именно это и стало мотивацией для нас, энтузиастов из Крыма, создать такого рода площадку. Где можно собрать заказа из блюд различной кухни и не ждать утомительные несколько часов, пока курьер доставит ваш заказ.</p>
                    <p>Наши курьеры быстро доставляют заказ, потому что блюда в нем будут готовиться в ближайших к вашему местоположению точках сети</p>

                    <p><b>Основан в г. Севастополе, Российская Федерация, 2022г.</b></p>
                </div>
            </div>
        </div>
    </section>

    <section class="moreaboutus">
        <div class="container">
            <div class="moreaboutsus-card-1">
                <div class="moreaboutus-img">
                    <img src="{{ asset('./storage/images/aboutpage/aboutpage1.jpg') }}" alt="">
                </div>
                <div class="moreaboutsus-content-1">
                    <div class="moreaboutus-title">Качественный сервис</div>
                    <div class="moreaboutus-text">Мы поддерживаем бесперебойную работу системы
                        <p></p>
                        <p>Следим за качеством оказания услуг нашим клиентам</p>
                    </div>
                </div>
            </div>

            <div class="moreaboutsus-card-2">
                <div class="moreaboutus-img-2">
                    <img src="{{ asset('./storage/images/aboutpage/aboutpage2.jpg') }}" alt="">
                </div>
                <div class="moreaboutsus-content-2">
                    <div class="moreaboutus-title">Качественная еда</div>
                    <div class="moreaboutus-text">
                        Мы сотрудничаем только с проверенными заведениями
                        <p>по питанию, которые прошли все проверки</p>
                        <p>Потому что мы заботимся о здоровье наших клиентов</p>
                    </div>
                </div>
            </div>

            <div class="moreaboutsus-card-3">
                <div class="moreaboutus-img-3">
                    <img src="{{ asset('./storage/images/aboutpage/aboutpage3.jpg') }}" alt="">
                </div>
                <div class="moreaboutsus-content-3">
                    <div class="moreaboutus-title">Быстрая доставка</div>
                    <div class="moreaboutus-text">
                        Курьеры очень быстро доставят ваш заказ, так как он собирается в ближайших точках сети заведения
                        <p></p>
                        <p>Это обеспечивает свежесть и сохранность блюд</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="features-label">Основные особенности</div>
            <div class="features-card">
                <span class="icon"><i class="fa-solid fa-boxes-stacked"></i></span>
                <div class="features-content">
                    <div class="features-title">Все в одном заказе</div>
                    <div class="features-text">Нет необходимости заказывать в каждом ресторане в отдельный заказ. в FoodCenter в 1 заказ можно выбрать еду с разных заведений одновременно. Наш курьер все соберет и привезет вам.</div>
                </div>
            </div>
            <div class="features-card-2">
                <span class="icon"><i class="fa-solid fa-user-plus"></i></span>
                <div class="features-content-2">
                    <div class="features-title">Сотрудничество</div>
                    <div class="features-text">Мы открыты к любому виду сотрудничества. Можете вступить в нашу команду курьеров с дальшейшем карьерным ростом. Если вы лицо, представляющее какое-либо заведение общепита, то мы открыты к сотрудничеству с вами.</div>
                </div>
            </div>
            <div class="features-card-3">
                <span class="icon"><i class="fa-solid fa-child-reaching"></i></span>
                <div class="features-content-3">
                    <div class="features-title">Система лояльности</div>
                    <div class="features-text">Гибкая система лояльности и бонусов, включающая в себя бонусы постоянным клиентам, накопительные скидки, скидки на доставку и многое другое.</div>
                </div>
            </div>
        </div>
    </section>

    <section class="wow-service">
        <div class="container">
            <div class="wow-service-content">
                <div class="wow-service-title">Всегда на связи</div>
                <div class="wow-service-text">Нам важно, чтобы каждый оставался на 101% доволен взаимодействием с нами. Чтобы обеспечить нашим клиентам высокий сервис мы работаем в выходные и праздники.</div>
                <div class="wow-service-cards">
                    <div class="wow-service-card">
                        <span class="icon-card"><i class="fa-solid fa-calendar-days"></i></span>
                        <div class="icon-text">Мы доступны во всех соцсетях и мессенджерах даже в выходные и праздники.</div>
                    </div>
                    <div class="wow-service-card">
                        <span class="icon-card"><i class="fa-solid fa-headset"></i></span>
                        <div class="icon-text">Наш консультанты помогут с любыми вопросами касаемо доставки и оплаты, также помогут с выбором.</div>
                    </div>
                    <div class="wow-service-card">
                        <span class="icon-card"><i class="fa-regular fa-comment-dots"></i></span>
                        <div class="icon-text">С помощью мессенджеров можно держать связь с курьером.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="startuse">
        <div class="container-fluid">
            <div class="startuse-text">
                Закажите еду в FoodCenter прямо сейчас
            </div>
            <a href="{{ route('register') }}" class="startuse-btn">Регистрация</a>
        </div>
    </section>

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
