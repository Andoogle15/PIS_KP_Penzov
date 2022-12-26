<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/js/app.js'])
        @vite(['resources/css/custom.css'])
        <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:ital,wght@0,400;0,700;1,300&display=swap;subset=cyrillic-ext" rel="stylesheet">
        <script src="https://kit.fontawesome.com/536caefa35.js" crossorigin="anonymous"></script>

        <title>FoodCenter</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
             /*normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css *!html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}*/
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="header">
            <div class="container">
                <div class="links">
                    <a href="{{ route('welcomeUnlog.index') }}">Меню</a>
                    <a href="{{ route('login') }}">Войти</a>
                    <a href="{{ route('register') }}">Регистрация</a>
                </div>
                <div class="intro__inner">
                    <h1 class="intro__title">FoodCenter</h1>
                    <h2 class="intro__subtitle">Инновационная площадка для заказа еды</h2>
                    <a class="btn-w" href="#about-link">Читать далее</a>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="section__inner">
                <div class="section__title">Что мы делаем</div>
                <div class="section__subtitle">Немного о нас</div>
            </div>
            <div class="container">
                <div class="about-card">
                    <div class="about-card-item">
                        <div class="about-card-item-inner">
                            <div class="card-img">
                                <img src="{{ asset('./storage/images/about/about1.jpg') }}" alt="">
                            </div>
                            <div class="card-text">Быстрая доставка</div>
                        </div>
                    </div>
                    <div class="about-card-item">
                        <div class="about-card-item-inner">
                            <div class="card-img">
                                <img src="{{ asset('./storage/images/about/about2.jpg') }}" alt="">
                            </div>
                            <div class="card-text">Вкусная еда</div>
                        </div>
                    </div>
                    <div class="about-card-item">
                        <div class="about-card-item-inner">
                            <div class="card-img">
                                <img src="{{ asset('./storage/images/about/about3.jpg') }}" alt="">
                            </div>
                            <div class="card-text">Качественный сервис</div>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!--Section -->

        <div class="statistics">
            <div class="container">
                <div class="stat">
                    <div class="stat-item">
                        <div class="stat-cout">>10тыс.</div>
                        <div class="stat-text">Довольных клиентов</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-cout">>20</div>
                        <div class="stat-text">Ресторанов и кафе</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-cout">>1тыс.</div>
                        <div class="stat-text">Положительных отзывов</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-devices">
           <div class="container">

               <div class="section-header">
                   <h3 class="section-suptitle">Для всех устройств</h3>
                   <h2 class="section-title">Уникальный дизайн</h2>
               </div>

               <div class="devices">
                   <div> <img src="{{ asset('./storage/images/ipad.png') }}" alt="" class="devices-item"></div>

                   <img src="{{ asset('./storage/images/iphone.png') }}" alt="" class="devices-item devices-item--iphone">
               </div>

           </div>
        </div>

        <div class="section section-clients">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-suptitle">Счастливые клиенты</h3>
                    <h2 class="section-title">Что люди говорят</h2>
                </div>
                <div class="clients">
                    <div class="clients-item">
                        <i class="fa-regular fa-face-smile"></i>
                        <div class="clients-content">
                            <div class="clinets-name">Gozy Ivan</div>
                            <div class="clients-text">Lorem ipsum dolor sit.</div>
                        </div>
                    </div>
                    <div class="clients-item">
                        <i class="fa-regular fa-face-smile-wink"></i>
                        <div class="clients-content">
                            <div class="clinets-name">Semenuk Zahar</div>
                            <div class="clients-text">Lorem ipsum dolor sit.</div>
                        </div>
                    </div>
                    <div class="clients-item">
                        <i class="fa-regular fa-face-laugh-wink"></i>
                        <div class="clients-content">
                            <div class="clinets-name">Sydakov Alexander</div>
                            <div class="clients-text">Lorem ipsum dolor sit.</div>
                        </div>
                    </div>
                    <div class="clients-item">
                        <i class="fa-regular fa-face-grin-wide"></i>
                        <div class="clients-content">
                            <div class="clinets-name">Anzin Ruslan</div>
                            <div class="clients-text">Lorem ipsum dolor sit.</div>
                        </div>
                    </div>
                    <div class="clients-item">
                        <i class="fa-regular fa-face-grin-hearts"></i>
                        <div class="clients-content">
                            <div class="clinets-name">Fedin Vitya i-2-20</div>
                            <div class="clients-text">Lorem ipsum dolor sit.</div>
                        </div>
                    </div>
                    <div class="clients-item">
                        <i class="fa-regular fa-face-laugh"></i>
                        <div class="clients-content">
                            <div class="clinets-name">Shevchenko Daniil Batutovich</div>
                            <div class="clients-text">Lorem ipsum dolor sit.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="section section-blog">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-suptitle">Наша история</h3>
                    <h2 class="section-title">Последние посты блога</h2>
                </div>
                <div class="blog">
                    <div class="blog-item">
                        <div class="blog-header">
                            <a href=""><img class="blog-photo" src="{{ asset('./storage/images/blogs/blog1.jpg') }}" alt=""></a>
                            <div class="blog-date">
                                <div class="blog-date-day">15</div>Dec
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-title">
                                <a href="#">Покупки выгодно</a>
                            </div>
                            <div class="blog-text">Расскажем о том как делать покупки выгодно. Где когда и как их делать, и на чем можно сэкономить</div>
                        </div>
                        <div class="blog-footer">
                            <div class="blog-stat">
                                <span class="blog-stat-item">
                                    <i class="fa-solid fa-eye"></i>542
                                </span>
                                <span class="blog-stat-item">
                                    <i class="fa-solid fa-comment-dots"></i>17
                                </span>
                            </div>
                        </div>
                    </div> <!-- blog item -->
                    <div class="blog-item">
                        <div class="blog-header">
                            <a href=""><img class="blog-photo" src="{{ asset('./storage/images/blogs/blog2.jpg') }}" alt=""></a>
                            <div class="blog-date">
                                <div class="blog-date-day">14</div>Dec
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-title">
                                <a href="#">Система лояльности</a>
                            </div>
                            <div class="blog-text">Расскажем о системе лояльности. О том как добиться максимальной выгоды и как это использовать при заказе</div>
                        </div>
                        <div class="blog-footer">
                            <div class="blog-stat">
                                <span class="blog-stat-item">
                                    <i class="fa-solid fa-eye"></i>992
                                </span>
                                <span class="blog-stat-item">
                                    <i class="fa-solid fa-comment-dots"></i>42
                                </span>
                            </div>
                        </div>
                    </div> <!-- blog item -->
                    <div class="blog-item">
                        <div class="blog-header">
                            <a href=""><img class="blog-photo" src="{{ asset('./storage/images/blogs/blog3.jpg') }}" alt=""></a>
                            <div class="blog-date">
                                <div class="blog-date-day">12</div>Dec
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-title">
                                <a href="#">Сотрудничество с FoodCenter</a>
                            </div>
                            <div class="blog-text">Расскажем о том, как начать работать вместе с нами. О вакансиях и о сотрудничестве</div>
                        </div>
                        <div class="blog-footer">
                            <div class="blog-stat">
                                <span class="blog-stat-item">
                                    <i class="fa-solid fa-eye"></i>1560
                                </span>
                                <span class="blog-stat-item">
                                    <i class="fa-solid fa-comment-dots"></i>98
                                </span>
                            </div>
                        </div>
                    </div> <!-- blog item -->
                </div>
            </div>
        </div>



        <section class="section-aboutus">
            <div class="container-fluid">
                <div class="aboutus-label">
                    Заинтересовали? Больше информации о нас     =>      <a href="{{ route('about.index') }}" id="about-link" class="aboutus-link">Здесь</a>
                </div>
            </div>
        </section>



        <div class="section section-map">
            <div class="container">
                <div class="map">
                    <h2 class="map-title">
                        <div><i class="fa-solid fa-location-dot"></i></div>
                        <a href="https://www.google.ru/maps" target="_blank">Открыть карту</a>
                    </h2>
                </div>
            </div>
        </div>



        <footer class="footer">
            <div class="container">

                <div class="footer-inner">
                    <div class="footer-col footer-col-first">
                        <div class="footer-logo">FoodCenter</div>
                        <div class="footer-text">FoodCenter - маркетплейс, площадка, на которой рестораны, кафе и другие заведения по питанию выставляю свой ассортимент на продажу. После приеобретения и оформления заказа, наши курьер доставят его Вам на столько быстро, на сколько это возможно. Для нас главное, чтобы клиент получил свежую и довезенную в сохранности еду и остался доволен.</div>
                        <div class="footer-social">
                            <div class="footer-social-header">
                                <b>15k</b>followers
                            </div>

                            <div class="footer-social-content">
                                Подпишись на:
                                <a href="#" target="_blank">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fa-brands fa-telegram"></i>
                                </a>
                            </div>
                        </div> <!-- footer social -->

                        <form class="subscribe" action="/" method="post">
                            <input type="email" class="subscribe-input" name="name" placeholder="Ваша почта">
                            <button class="subscribe-btn" type="submit">Подписаться</button>
                        </form>
                    </div> <!-- footer-col -->

                    <div class="footer-col footer-col-second">
                        <div class="footer-title">Блог</div>
                        <div class="blogs">

                            <div class="blogs-item">
                                <img src="{{ asset('./storage/images/footer_blog/blog1.jpg') }}" alt="" class="blogs-img">
                                <div class="blogs-content">
                                    <a href="" class="blogs-title">Покупки выгодно</a>
                                    <div class="blogs-date">Dec 15, 2022</div>
                                </div>
                            </div>
                            <div class="blogs-item">
                                <img src="{{ asset('./storage/images/blogs/blog2.jpg') }}" alt="" class="blogs-img">
                                <div class="blogs-content">
                                    <a href="#" class="blogs-title">Система лояльности</a>
                                    <div class="blogs-date">Dec 15, 2022</div>
                                </div>
                            </div>
                            <div class="blogs-item">
                                <img src="{{ asset('./storage/images/blogs/blog3.jpg') }}" alt="" class="blogs-img">
                                <div class="blogs-content">
                                    <a href="#" class="blogs-title">Сотрудничество с foodcenter</a>
                                    <div class="blogs-date">Dec 15, 2022</div>
                                </div>
                            </div>

                        </div> <!-- blogs -->
                    </div>

                    <div class="footer-col footer-col-third">
                        <div class="footer-title">Pinterest</div>

                        <div class="pinterest">
                            <a href="#" class="pinterest-item" target="_blank">
                                <img src="{{ asset('./storage/images/pinterest/footer1.jpg') }}" alt="">
                            </a>
                            <a href="#" class="pinterest-item" target="_blank">
                                <img src="{{ asset('./storage/images/pinterest/footer2.jpg') }}" alt="">
                            </a>
                            <a href="#" class="pinterest-item" target="_blank">
                                <img src="{{ asset('./storage/images/pinterest/footer3.jpg') }}" alt="">
                            </a>
                            <a href="#" class="pinterest-item" target="_blank">
                                <img src="{{ asset('./storage/images/pinterest/footer4.jpg') }}" alt="">
                            </a>
                            <a href="#" class="pinterest-item" target="_blank">
                                <img src="{{ asset('./storage/images/pinterest/footer5.jpg') }}" alt="">
                            </a>
                            <a href="#" class="pinterest-item" target="_blank">
                                <img src="{{ asset('./storage/images/pinterest/footer6.jpg') }}" alt="">
                            </a>
                            <a href="#" class="pinterest-item" target="_blank">
                                <img src="{{ asset('./storage/images/pinterest/footer7.jpg') }}" alt="">
                            </a>
                            <a href="#" class="pinterest-item" target="_blank">
                                <img src="{{ asset('./storage/images/pinterest/footer8.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="more">Посмотреть больше</div>
                    </div>

                </div> <!-- footer inner -->

            </div>
        </footer>



{{--        <div class=" flex items-top justify-center min-h-screen bg-gray-100  sm:items-center py-4 sm:pt-0">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}" class="btn-login text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}" class="btn-register ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    </body>
</html>
