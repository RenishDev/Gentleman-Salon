<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Stylen | Saloon & Spa HTML 5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('media/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/sal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/wizard/smart_wizard_all.min.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Color Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/colors/color-biege.css') }}" class="color-css">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>


    @include('front-end.layouts.header')
    @include('front-end.layouts.setting')

    @yield('main-section')

    @include('front-end.layouts.footer')
    <!-- Jquery Js -->
    <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-validator.js') }}"></script>
    <script src="{{ asset('js/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-appear.js') }}"></script>
    <script src="{{ asset('js/vendor/sal.js') }}"></script>
    <script src="{{ asset('js/vendor/js.cookie.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.smartWizard.min.js') }}"></script>

    <!-- Site Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
