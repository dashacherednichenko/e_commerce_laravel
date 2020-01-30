@extends('standart')

@section('title', 'Купить кондиционер Киев, Украина. Установка кондиционеров-CLIMAGROUP')

@section('description')&#10148;&#10148;&#10148;Подобрать и купить кондиционер? Вам сюда! &#10003;Лучшие цены! &#10003;Оплата частями! &#10003;Официальная гарантия, &#10003;доставка, &#10003;установка и обслуживание
@endsection

@section('content')
    Главная
    @foreach($products as $product)
        @include('minicard', compact('product'))
    @endforeach
@endsection