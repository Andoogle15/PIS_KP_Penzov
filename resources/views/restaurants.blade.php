@extends('layouts.main')

@section('content')
   <div class="container">
       <div class="restaurant-title">
           <h1>Рестораны</h1>
       </div>
       <div class="category-tags">
           <a class="category-tag" title="Первые блюда" href="#"><i class="fa-solid fa-bowl-food"><span>Первые блюда</span></i></a>
           <a class="category-tag" title="Вторые блюда" href="#"><i class="fa-solid fa-plate-wheat"><span>Вторые блюда</span></i></a>
           <a class="category-tag" title="Салаты" href="#"><i class="fa-solid fa-seedling"><span>Салаты</span></i></a>
           <a class="category-tag" title="Напитки" href="#"><i class="fa-solid fa-martini-glass"><span>Напитки</span></i></a>
           <a class="category-tag" title="Пицца" href="#"><i class="fa-solid fa-pizza-slice"><span>Пицца</span></i></a>
           <a class="category-tag" title="Суши" href="#"><i class="fa-solid fa-fish-fins"><span>Суши</span></i></a>
       </div>
       <div class="restaurant-cards">
           <div class="restaurant-card">
               <div class="restaurant-img">
                   <a href="{{ route('establishment.index') }}"><img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt=""></a>
               </div>
               <div class="restaurant-info">
                   <a class="restaurant-title" href="#">
                       <h4>Lorem ipsum</h4>
                   </a>
                   <div class="restaurant-address">
                       <div class="address-street">
                           ул.Нахимова
                       </div>
                       <div class="address-home">
                           1
                       </div>
                   </div>
               </div>
           </div>
           <div class="restaurant-card">
               <div class="restaurant-img">
                   <a href="{{ route('establishment.index') }}"><img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt=""></a>
               </div>
               <div class="restaurant-info">
                   <a class="restaurant-title" href="#">
                       <h4>Lorem ipsum</h4>
                   </a>
                   <div class="restaurant-address">
                       <div class="address-street">
                           ул.Нахимова
                       </div>
                       <div class="address-home">
                           1
                       </div>
                   </div>
               </div>
           </div>
           <div class="restaurant-card">
               <div class="restaurant-img">
                   <a href="{{ route('establishment.index') }}"><img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt=""></a>
               </div>
               <div class="restaurant-info">
                   <a class="restaurant-title" href="#">
                       <h4>Lorem ipsum</h4>
                   </a>
                   <div class="restaurant-address">
                       <div class="address-street">
                           ул.Нахимова
                       </div>
                       <div class="address-home">
                           1
                       </div>
                   </div>
               </div>
           </div>
           <div class="brake"></div>
           <div class="restaurant-card">
               <div class="restaurant-img">
                   <a href="{{ route('establishment.index') }}"><img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt=""></a>
               </div>
               <div class="restaurant-info">
                   <a class="restaurant-title" href="#">
                       <h4>Lorem ipsum</h4>
                   </a>
                   <div class="restaurant-address">
                       <div class="address-street">
                           ул.Нахимова
                       </div>
                       <div class="address-home">
                           1
                       </div>
                   </div>
               </div>
           </div>
           <div class="restaurant-card">
               <div class="restaurant-img">
                   <a href="{{ route('establishment.index') }}"><img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt=""></a>
               </div>
               <div class="restaurant-info">
                   <a class="restaurant-title" href="#">
                       <h4>Lorem ipsum</h4>
                   </a>
                   <div class="restaurant-address">
                       <div class="address-street">
                           ул.Нахимова
                       </div>
                       <div class="address-home">
                           1
                       </div>
                   </div>
               </div>
           </div>
           <div class="restaurant-card">
               <div class="restaurant-img">
                   <a href="{{ route('establishment.index') }}"><img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt=""></a>
               </div>
               <div class="restaurant-info">
                   <a class="restaurant-title" href="#">
                       <h4>Lorem ipsum</h4>
                   </a>
                   <div class="restaurant-address">
                       <div class="address-street">
                           ул.Нахимова
                       </div>
                       <div class="address-home">
                           1
                       </div>
                   </div>
               </div>
           </div>
           <div class="brake"></div>
           <div class="restaurant-card">
               <div class="restaurant-img">
                   <a href="{{ route('establishment.index') }}"><img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt=""></a>
               </div>
               <div class="restaurant-info">
                   <a class="restaurant-title" href="#">
                       <h4>Lorem ipsum</h4>
                   </a>
                   <div class="restaurant-address">
                       <div class="address-street">
                           ул.Нахимова
                       </div>
                       <div class="address-home">
                           1
                       </div>
                   </div>
               </div>
           </div>
           <div class="restaurant-card">
               <div class="restaurant-img">
                   <a href="{{ route('establishment.index') }}"><img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt=""></a>
               </div>
               <div class="restaurant-info">
                   <a class="restaurant-title" href="#">
                       <h4>Lorem ipsum</h4>
                   </a>
                   <div class="restaurant-address">
                       <div class="address-street">
                           ул.Нахимова
                       </div>
                       <div class="address-home">
                           1
                       </div>
                   </div>
               </div>
           </div>
           <div class="restaurant-card">
               <div class="restaurant-img">
                   <a href="{{ route('establishment.index') }}"><img src="{{ asset('./storage/images/popular/popular1.jpg') }}" alt=""></a>
               </div>
               <div class="restaurant-info">
                   <a class="restaurant-title" href="#">
                       <h4>Lorem ipsum</h4>
                   </a>
                   <div class="restaurant-address">
                       <div class="address-street">
                           ул.Нахимова
                       </div>
                       <div class="address-home">
                           1
                       </div>
                   </div>
               </div>
           </div>
           <div class="brake"></div>
       </div>
   </div>
@endsection
