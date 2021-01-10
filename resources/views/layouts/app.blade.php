<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <meta name="author" content="Andrés Vergara">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @yield('style')
</head>

@yield('modal')

<body >
    <div class="contentMain">
        <header class="header">
            <div class="logo">
               DASHBOARD
            </div>
            @include('includes.navbar')
        </header>
    
        <section class="contentData">
            @yield('contentData')
        </section>
    </div>
    @yield('script')
</body>
</html>
