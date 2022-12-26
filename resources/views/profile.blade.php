@extends('layouts.main')

@section('content')
   <div class="container-profile">
       <div class="row">
           <div class="col">
                <div class="profile-img">
                    <img src="{{ asset('./storage/images/profile.png') }}" alt="">
                </div>
           </div>
           <div class="col-6">
               <div class="profile-info">
                   <div class="profile-info-title">
                       <h1 class="profile-title">Мои Данные:</h1>
                   </div>
                   <div class="profile-info-fio">
                       <div class="profile-info-name">Имя</div>
                       <div class="profile-info-login">Ваш логин</div>
                       <div class="profile-info-email">E-mail</div>
                       <div class="profile-info-phone">Номер телефона</div>
                   </div>
                   <a class="profile-logout" href="{{ route('home') }}">Выйти</a>
               </div>
           </div>
       </div>
   </div>
@endsection
