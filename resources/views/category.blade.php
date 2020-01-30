@extends('standart')

@section('title')
    {{$category -> name}}
@endsection

@section('content')
    {{$category -> name}} ({{$category -> products ->count()}})<br>

    @foreach($category->products as $product)
        @include('minicard', compact('product'))
    @endforeach
@endsection


