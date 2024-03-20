<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('logo/bestof_sm.png')}}" type="image/x-icon" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Best Of</title>
    @yield('style')
</head>
<body>
    <header class="header">
        <img class="logo" src="{{ asset('logo/bestof.png') }}">
        <div class="header-links">
            <a class="header-link">test1</a>
            <a class="header-link">test2</a>
            <a class="header-link">test3</a>
        </div>
        <div class="header-actions">
            <a class="header-action header-wishlist">wishlists</a>
            <button class="header-action header-user">user</button>
        </div>
    </header>

    @yield('content')

    @yield('script')
</body>
</html>
