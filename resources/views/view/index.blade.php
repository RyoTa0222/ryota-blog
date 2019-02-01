@extends('layout.layout')

@section('content')
<form action="/view/search" method="get">
        <p>記事の検索</p>
        <input type="text" name="keywords" value="<?php $keywords ?>"><br>
        <input type="submit" name="" value="検索">
</form>

<form action="/view" method="get">
    <input type="submit" name="" value="リセット">
</form>
<p>検索：
        @if(empty($keyword))
        <span></span>
        @else
        <span>{{$keyword}}</span>
        @endif
        
</p>
@foreach($category_array as $item) 
<a href="/view/{{$item['id']}}" 
    style="
    font-size: 2rem;
    display: block;
    color: black;
    text-decoration: none;
     ">{{$item["title"]}}
     </a>
    <a href="{{$item["link_name"]}}">{{$item["link_name"]}}</a>
    <p>
         @if(empty($item['date_time']))
         <span></span>
         @else
         <span class="date">{{$item["date_time"]}} -</span>
         @endif

    {{$item["description"]}}</p>
@endforeach
@endsection