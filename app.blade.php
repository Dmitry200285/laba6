<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<style>
    body{
        font-size: 16px;
        font-family: "Arial Black";
        text-shadow: 1px 1px 5px 10px;
    }
</style>
<body>
<div style="background-color: coral;font-size: 20px;color: white;padding:20px;">
    <a href="/blog" style="text-decoration: none;">Мой блог   </a>
    <a href="/blog/create" style="text-decoration: none;">Создать пост</a>
</div>
@yield('content')
</body>
</html>
