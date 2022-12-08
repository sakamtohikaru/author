<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('Document')</title>
  <style>
    body{
      font-size:16px;
      margin: 5px;
    }
    h1{
      font-size:60px;
      color:while;
      text-shadow:1px 0 5px #289ADC;
      letter-spasing:-4px;
      margin:10px;
    }
    .content{
      margin:10px;
    }
  </style>
</head>
<body>
  <h1>@yield('title')</h1>
  <div class="content">
    @yield('content')
  </div>
</body>
</html>