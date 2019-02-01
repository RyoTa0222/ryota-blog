<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="utf-8">
  <title>google</title>
  <meta name="description" content="laravelの検索結果">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="shortcut icon" href="favicon.png">
  <link rel="stylesheet" src="style.css">
  <script src="main.js"></script> -->
  <style>
  .g-nav{
    display: flex;
    justify-content: space-around;
  }
  .g-nav li{
    list-style-type: none;
  }
  .g-nav li:hover{
    cursor: pointer;
    text-decoration: underline;
  }
  body{
      margin: 0 20%;
      text-align: center;
    }
    .date{
      color: gray;
    }
  </style>
</head>
<body>
 <header>blog</header>

 <nav class="g-nav">
  <li>すべて</li>
  <li>ニュース</li>
  <li>画像</li>
  <li>動画</li>
  <li>もっと見る</li>
  <li>設定</li>
  <li>ツール</li>
  </nav>
  

 
 

 <div class="content">
@yield('content')
</div>

</body>
</html>