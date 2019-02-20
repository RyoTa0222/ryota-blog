<!DOCTYPE html>
<html lang="jp">
  <head>
    <meta charset="utf-8">
    <title>google</title>
    <meta name="description" content="laravelの検索結果">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- materiallize Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- materiallize Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- FontAwesome5 free -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  </head>
  <body>
    <header class="head-title">blog</header>

    <nav>
      <div class="nav-pc g-nav">
        <li><a href="">すべて</a></li>
        <li><a href="">ニュース</a></li>
        <li><a href="">画像</a></li>
        <li><a href="">動画</a></li>
        <li><a href="">もっと見る</a></li>
        <li><a href="">設定</a></li>
        <li><a href="">ツール</a></li>
      </div>
    
      <div class="nav-mobile">
        <ul id="slide-out" class="sidenav">
          <li><a href="">すべて</a></li>
          <li><a href="">ニュース</a></li>
          <li><a href="">画像</a></li>
          <li><a href="">動画</a></li>
          <li><a href="">もっと見る</a></li>
          <li><a href="">設定</a></li>
          <li><a href="">ツール</a></li>
        </ul>
        <a href="#" data-target="slide-out" class="sidenav-trigger nav-hamburger"><i class="fas fa-list-ul"></i></a>
      </div>
    </nav>

    <form action="/view/search" method="get" class="search-form">
      {{-- <p>記事の検索</p> --}}
      <input type="text" name="keywords" value="<?php $keywords ?>" class="search-field" placeholder="記事の検索">
      <button type="submit" name="" value="検索" class="btn waves-effect waves-light btn-detail">検索</button>
    </form>

    <form action="/view" method="get" class="btn-container">
      <button type="submit" name="" value="リセット" class="btn waves-effect waves-light btn-detail">リセット</button>
    </form>
    <p class="search-result">検索内容：
      @if(empty($keyword))
      <span></span>
      @else
      <span>{{$keyword}}</span>
      @endif 
    </p>

    <div class="content">
      @yield('content')
    </div>
   
   {{-- Parallax --}}
    <script>
      $(document).ready(function(){
        $('.parallax').parallax();
      });
    </script>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src=""></script>

    <script>
      $(document).ready(function(){
        $('.sidenav').sidenav();
      });
    </script>
  </body>
</html>