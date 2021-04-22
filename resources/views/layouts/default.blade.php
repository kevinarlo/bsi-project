<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-X4WXXYN7Y6"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-X4WXXYN7Y6');
        </script>

    <!-- Title -->
    <title> @yield('title')</title>

    @include('includes.style')

</head>

<body>

    @include('includes.preloader')

    @include('includes.header')

    @yield('content')

    @yield('scripts-reCAPTCHA')

    @include('includes.wa')

    @include('includes.footer')

    @include('includes.script')
    
</body>

</html>
