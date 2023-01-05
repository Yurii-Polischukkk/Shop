@extends('master')
@section('content')

    <div class="starter-template">

        <h2>{{$product}}</h2>
        <h2>{{ $product->name }}</h2>
        <p>Ціна: <b>{{ $product->price }} грн</b></p>
        <img src="src="{{ Storage::url($product->image) }}">
        <p>Отличный продвинутый телефон с памятью на 64 gb</p>

        <form action=" /basket/add/1" method="POST">
            <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>

            @csrf        </form>
    </div>
@endsection
