@extends('layout.layout')

@section('content')

@foreach($category_array as $item) 
<div class="category-content">

    <div class="parallax-container">
        <div class="parallax"><img src="{{$item["images"]}}" class="image-width"></div>
    </div>
    <div class="section white">
        <div class="container">
            <a href="/id={{$item['id']}}" class="category-text">
            {{$item["title"]}}</a>
            <a href="{{$item["link_name"]}}">{{$item["link_name"]}}</a>
            <p>
                @if(empty($item['date_time']))
                <span></span>
                @else
                <span class="date">{{$item["date_time"]}} -</span>
                @endif
                {{$item["description"]}}
            </p>
        </div>
    </div>
    
</div>
@endforeach
@endsection