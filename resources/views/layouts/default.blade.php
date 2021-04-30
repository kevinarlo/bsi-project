<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="facebook-domain-verification" content="3ojy6nijiih6lx6o3rpbw8e3y73crl" />
    <meta name="google-site-verification" content="CSI1p4e4qLt9At-7xVgtpkIINvI2W2pEO69gl6N_WUo" />
    <meta name="description" content="Hunian Masa Depan Anda">
    <meta name="keywords" content="Perumahan Subsidi, Hunian Masa Depan, Rumah Subsidi Karawang">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="{{ url('landing/assets/engine1/style.css') }}" />
    <script type="text/javascript" src="{{ url('landing/assets/engine1/jquery.js') }}"></script>
    <!-- End WOWSlider.com HEAD section -->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NQGNMN8');</script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-X4WXXYN7Y6"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-X4WXXYN7Y6');
        </script>

    <!-- Title -->
    {!! SEOMeta::generate() !!}

    @include('includes.style')

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NQGNMN8"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    @include('includes.preloader')

    @include('includes.header')

    @yield('content')

    @yield('scripts-reCAPTCHA')

    @include('includes.wa')

    @include('includes.mylivechat')

    @include('includes.footer')

    @include('includes.script')
    
</body>

</html>
