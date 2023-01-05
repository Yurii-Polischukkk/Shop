@extends('master')
 @section('content')
    <div class="starter-template">
        @if(session()->has('success'))
        <p class="alert alert-success">{{session()->get('success')}}</p>
        @endif
        <h1>Всі товари</h1>

        <div class="row">
            @foreach($products as $product)
            @include('card', compact('product'))
            @endforeach
    </div>
    </div>
 @endsection
