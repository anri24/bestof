<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/logo/bestof_sm.png')}}" type="image/x-icon" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Best Of</title>
{{--    <link rel="stylesheet" href="{{ asset('assets/font-icons.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('assets/css/app.css')  }}">
    @yield('style')
</head>
<body>
    <header class="header">
        <a href="#"><img class="logo" src="{{ asset('assets/logo/bestof.png') }}"></a>
        <div class="header-links">
            <a href="#" class="header-link">მარკეტი</a>
            <a href="#" class="header-link">კონტაქტი</a>
            <a href="#" class="header-link">ჩვენს შესახებ</a>
        </div>
        <div class="header-actions">
            <a href="#" class="header-action header-wishlist"><i class="fa-solid fa-heart fa-xl"></i></a>
            <button class="header-action header-user"><i class="fa-solid fa-user fa-xl"></i></button>
        </div>
    </header>

    @yield('content')

    <script src="https://kit.fontawesome.com/c168068ef3.js" crossorigin="anonymous"></script>
    @yield('script')
</body>
</html>
