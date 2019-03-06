@extends('layout.layout')

@section('content')

@foreach($category_array as $item) 
<div class="category-content">
    <a href="/id={{$item['id']}}" class="content-link">
        <div>
            <div class="parallax-container">
                <div class="parallax"><img src="{{$item["images_path"]}}" class="image-width effect-blur-thumb"></div>
            </div>
            <div class="section white">
                <div class="container">
                    {{-- <a href="/id={{$item['id']}}" class="category-text">
                    {{$item["title"]}}</a> --}}
                    <h2 class="category-text">{{$item["title"]}}</h2>
                    {{-- <a href="{{$item["link_name"]}}">{{$item["link_name"]}}</a> --}}
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
    </a>
</div>
@endforeach
@endsection