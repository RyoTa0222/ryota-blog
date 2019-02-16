<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="utf-8">
  <title>google</title>
  <meta name="description" content="laravelの検索結果">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
    <header class="head-title">blog</header>

    <nav class="g-nav">
     <li><a href="">すべて</a></li>
     <li><a href="">ニュース</a></li>
     <li><a href="">画像</a></li>
     <li><a href="">動画</a></li>
     <li><a href="">もっと見る</a></li>
     <li><a href="">設定</a></li>
     <li><a href="">ツール</a></li>
     </nav>
     
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
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>