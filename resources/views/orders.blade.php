@extends('layouts.main')

@section('content')
   <div class="container container-orders">
       <h1 class="orders-title">Заказы</h1>
       <table class="table table-orders table-borderless table-hover">
           <thead>
           <tr>
               <th scope="col">№Заказа</th>
               <th scope="col">Адрес</th>
               <th scope="col">Время доставки</th>
               <th scope="col">Сумма</th>
           </tr>
           </thead>
           <tbody>
           <tr>
               <th scope="row">12043</th>
               <td>Ул. Нахимова, д.1, кв. 5</td>
               <td>60-90</td>
               <td>1570руб.</td>
           </tr>
           <tr>
               <th scope="row">12044</th>
               <td>Ул. Нахимова, д.1, кв. 5</td>
               <td>60-90</td>
               <td>1230руб.</td>
           </tr>
           <tr>
               <th scope="row">12045</th>
               <td> Ул. Нахимова, д.1, кв. 5</td>
               <td>60-90</td>
               <td>590руб.</td>
           </tr>
           </tbody>
       </table>
   </div>
@endsection
