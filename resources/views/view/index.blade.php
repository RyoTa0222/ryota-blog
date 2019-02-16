@extends('layout.layout')

@section('content')
<form action="/view/search" method="get" class="search-form">
        {{-- <p>記事の検索</p> --}}
        <input type="text" name="keywords" value="<?php $keywords ?>" class="search-field" placeholder="記事の検索">
        <button type="submit" name="" value="検索" class="btn waves-effect waves-light btn-detail">検索</button>
</form>

<form action="/view" method="get" class="btn-container">
    <button type="submit" name="" value="リセット" class="btn waves-effect waves-light btn-detail">リセット</button>
</form>
<p class="search-result">検索：
        @if(empty($keyword))
        <span></span>
        @else
        <span>{{$keyword}}</span>
        @endif
        
</p>
@foreach($category_array as $item) 
<div class="category-content">

    <div class="parallax-container">
        <div class="parallax"><img src="{{$item["images"]}}" class="image-width"></div>
    </div>
    <div class="section white">
        <div class="container">
            <a href="/view/{{$item['id']}}" class="category-text">
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