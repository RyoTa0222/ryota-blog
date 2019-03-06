@extends('layout.layout')

@section('content')

<div class="category-content">
    <a href="/id={{$category['id']}}" class="content-link">
        <div>
            <div class="parallax-container">
                <div class="parallax"><img src="{{$category["images_path"]}}" class="image-width effect-blur-thumb"></div>
            </div>
            <div class="section white">
                <div class="container">
                    {{-- <a href="/id={{$category['id']}}" class="category-text">
                    {{$category["title"]}}</a> --}}
                    <h2 class="category-text">{{$category["title"]}}</h2>
                    {{-- <a href="{{$category["link_name"]}}">{{$category["link_name"]}}</a> --}}
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
    </a>        
</div>

@endsection