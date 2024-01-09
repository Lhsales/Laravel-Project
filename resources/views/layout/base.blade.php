<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel | @yield('head-title')</title>

    @include('layout.include.head')
</head>
<body class="d-flex flex-column min-vh-100">
    @include('layout.include.header')
    @include('layout.include.toast')

    <section class="page-section">
        <div class="container">
            <h2 class="text-uppercase text-center mb-0">
                @yield('title')
            </h2>
        </div>
    </section>

    @yield('content')
    
    @include('layout.include.footer')

    @include('layout.include.scripts')
</body>
</html>