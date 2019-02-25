@extends('layout.layout')

@section('content')

<div class="category-content">

        <div class="parallax-container">
            <div class="parallax"><img src="{{$category["images"]}}" class="image-width"></div>
        </div>
        <div class="section white">
            <div class="container">
                <a href="/id={{$category['id']}}" class="category-text">
                {{$category["title"]}}</a>
                <a href="{{$category["link_name"]}}">{{$category["link_name"]}}</a>
                <p>
                    @if(empty($category['date_time']))
                    <span></span>
                    @else
                    <span class="date">{{$category["date_time"]}} -</span>
                    @endif
                    {{$category["description"]}}
                </p>
            </div>
        </div>
        
    </div>

@endsection