@extends('standart')

@section('title', 'Корзина')


@section('content')
    Корзина<br>
    @foreach($order->products as $product)
        {{$product->name}}-{{$product->price}}-{{$product->pivot->count}}од.
        <form action="{{route('basket-add', $product->id)}}" method="post">
            <button type="submit">+</button>
            @csrf
        </form>
        <form action="{{route('basket-remove', $product->id)}}" method="post">
            <button type="submit">-</button>
            @csrf
        </form>
        <br>
    @endforeach
@endsection