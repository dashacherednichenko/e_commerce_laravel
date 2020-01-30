{{--mini card of product--}}
<a href="{{route('product', $product->code)}}">{{$product->name}}</a>
({{$product->category->name}})<br>
<form action="{{route('basket-add', $product->id)}}" method="post">
    <button type="submit">в корзину</button>
    @csrf
</form>
