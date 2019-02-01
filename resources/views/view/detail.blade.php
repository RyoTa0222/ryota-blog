@extends('layout.layout')

@section('content')

<form action="/view" method="get">
    <input type="submit" name="" value="リセット">
</form>


<a href="/view/{{$category['id']}}" 
    style="
    font-size: 2rem;
    display: block;
    color: black;
    text-decoration: none;
     ">{{$category["title"]}}
     </a>
    <a href="{{$category["link_name"]}}">{{$category["link_name"]}}</a>
    <p>
         @if(empty($category['date_time']))
         <span></span>
         @else
         <span class="date">{{$category["date_time"]}} -</span>
         @endif

    {{$category["description"]}}</p>


@endsection