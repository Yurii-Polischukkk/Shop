@extends('master')
@section('content')
    <div class="starter-template">
        @foreach($categories as $category)
            <div class="panel">
                <a href="{{route('category',$category->code)}} ">
                    <img height="56px" src="{{ Storage::url($category->image) }}">
                    <h2>{{$category->name}}</h2>
                </a>
                <p>
                    {{$category->description}}
                </p>
            </div>
        @endforeach
    </div>
@endsection
