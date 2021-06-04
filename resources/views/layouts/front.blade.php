<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    @yield('css')
</head>

<body>
    <!-- 本範例要做到的事情有 -->
    <!-- 1. 剛好佔滿一整個畫面 -->
    <!-- 2. parallax 效果 怎麼做 -->
    <!-- 3. 文字區塊 高度會是活動的 -->
    <!-- 4. id與class的混合使用技巧 -->
    <div class="nav">
        <a href="{{ asset('/') }}">首頁</a>
        <a href="{{ asset('/news') }}">最新消息</a>
        <a href="{{ asset('/product') }}">產品</a>
        <a href="#block-2-Anchor">文字區塊1</a>
        <a href="#block-4-Anchor">文字區塊2</a>
        <a href="#block-6-Anchor">文字區塊3</a>

    </div>

   <div class="container">
       @yield('content')
   </div>

<script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</script>
</body>

</html>
