<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <title>@yield('MyEcolo - Minimize Waste, Maximize taste')</title>

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="{{asset('front/lib/lightbox/css/lightbox.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/lib/owlcarousel/assets/owl.carousel.min.css')}}">


        <!-- Customized Bootstrap Stylesheet -->
        <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">

        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
        @livewireStyles()
        @stack('styleSheets')
    </head>

    <body>
        <!-- Header here -->
        @include('front.layout.inc.header')

        @yield('content')

        <!-- Footer Start -->
        @include('front.layout.inc.footer')


<!-- Back to Top -->
<a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- Template Javascript -->
    <script src="front/js/main.js"></script>



    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="front/lib/easing/easing.min.js"></script>
    <script src="front/lib/waypoints/waypoints.min.js"></script>
    <script src="front/lib/lightbox/js/lightbox.min.js"></script>
    <script src="front/lib/owlcarousel/owl.carousel.min.js"></script>

    @livewireScripts()
    @stack('scripts')
    </body>

</html>
