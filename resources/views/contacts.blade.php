@extends('layouts.main')

@section('content')
   <div class="contacts">
       <div class="container">
           <div class="contact-title">
               <h1>Контакты</h1>
           </div>
           <div class="contacts-icons">
               <div class="row">
                   <div class="col-sm">
                       <ul style="list-style: none">
                           <li><a href="#"><i class="fa-solid fa-phone"></i><a href="tel:555 123-45-67">555 123-45-67</a></a></li>
                           <li><a href="#"><i class="fa-brands fa-facebook"></i>Facebook</a></li>
                           <li><a href="#"><i class="fa-brands fa-twitter"></i>Twitter</a></li>
                           <li><a href="#"><i class="fa-brands fa-instagram"></i>Instagram</a></li>
                       </ul>
                   </div>
                   <div class="col-sm">
                       <ul style="list-style: none">
                           <li><a href="#"><i class="fa-brands fa-discord"></i>Discord</a></li>
                           <li><a href="#"><i class="fa-brands fa-youtube"></i>Youtube</a></li>
                           <li> <a href="#"><i class="fa-brands fa-telegram"></i>Telegram</a></li>
                           <li><a href="#"><i class="fa-solid fa-envelope"></i>info@info.ru</a></li>
                       </ul>
                   </div>
               </div>
           </div>
           <div class="form-send-message">
               <h2>Напишите нам</h2>
               <p>Заполните форму и отправьте сообщение! Мы обязательно с Вами свяжемся!</p>
               <div class="form">
                   <input required type="text" name="name" placeholder="Как к Вам можно обращаться" autocomplete="off">
                   <input required type="text" name="phone" placeholder="Ваш телефон" autocomplete="off">
                   <input required type="email" name="email" placeholder="Ваша электронная почта" autocomplete="off">
                   <div>
                       <textarea required name="mess" placeholder="Напишите сообщение" rows="6"></textarea>
                   </div>
               </div>
               <input class="button" type="submit" value="Отправить">
           </div>
       </div>
   </div>
@endsection
