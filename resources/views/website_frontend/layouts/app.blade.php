<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Shivani Portfolio</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <meta name="robots" content="noindex, nofollow">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/paw.jpg') }}" rel="icon">
    <link href="{{ asset('assets/img/paw.jpg') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/" rel="preconnect">
    <link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Questrial:wght@400&amp;display=swap"
        rel="stylesheet">


    @include('website_frontend.layouts.script')
    @stack('styles')
</head>

<body class="index-page">

    @include('website_frontend.layouts.header')
    <main class="main">

        @yield('content')


    </main>



    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    @include('website_frontend.layouts.js')
    @stack('scripts')


    @include('website_frontend.layouts.footer')
</body>



</html>
