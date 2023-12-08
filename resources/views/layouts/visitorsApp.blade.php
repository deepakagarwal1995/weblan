<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title ?? 'Not Found' }} | {{ config('app.name') }}</title>
    <meta name="description" content="{{ config('app.name') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('inc.headerLinks')

    @yield('head')
</head>
<body>
    <div id="preloader"></div>

    @include('inc.header')

    @yield('content')

    @include('inc.footer')

    <!-- all js here -->
    @include('inc.footerLinks')

    @yield('scripts')
</body>
</html>

