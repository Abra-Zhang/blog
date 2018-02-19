<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arnold.Zxy Blog - @yield('title', '首页')</title>
    <link href="/favicon.ico" rel="icon" />
    <link rel="stylesheet" href="/css/app.css">
    @yield('specialCss')
</head>
<body>
@include('common.navbar')

<div class="container-fluid">
    @yield('content')
</div>

@include('common.footer')
<script src="/js/app.js"></script>
@yield('specialJs')
</body>
</html>