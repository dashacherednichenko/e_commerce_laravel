@extends('standart')

@section('title', 'Каталог')

@section('content')
    catalog
    @foreach($categories as $category)
        <a href="{{route('category', $category->code)}}">{{$category->name}}</a>
    @endforeach
@endsection
